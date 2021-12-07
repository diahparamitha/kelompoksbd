<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\daftar_film;
use App\Models\daftar_menu;
use App\Models\daftar_genre;
use App\Models\daftar_director;
use App\Models\daftar_pemain;
use App\Models\history_tontonan;
use Illuminate\Support\Facades\Auth;


class FilmController extends Controller
{
    public function index()
    {
        return view('film.index', [
            'title' => 'halaman film',
            'films' => daftar_film::latest()->filter(request(['judul_film']))->paginate(8)
            //SELECT * FROM daftar_films WHERE 'judul_film' LIKE' '%' .$request['judul_film']. '%' ORDER BY DESC 
        ]);
    }

    public function film2(daftar_film $daftar_film)
    {
        $title = 'halaman film';
        $tonton = false;
        $film = daftar_film::find($daftar_film->id_film); 
        //SELECT * FROM daftar_films WHERE 'id_films' = $daftar_films->id_film

        $history = history_tontonan::Where('id_user', Auth::user()->id)->where('id_film', $daftar_film->id_film)->first();
             $history ? $tonton = true : history_tontonan::create([
            'id_user' => Auth::user()->id,
            'id_film' => $daftar_film->id_film
        ]);
        //INSERT INTO history_tontonan WHERE id_user = auth::user()->id AND id_film = $daftar_film->id_film

        return view('film.film2', compact('film', 'tonton', 'title'));
    }

    public function tambahFilm()
    {
        return view('film.tambahFilm', [
            'title' => 'halaman film',
            'menu' => daftar_menu::all(),
            'genre' => daftar_genre::all(),
            'director' => daftar_director::all(),
            'pemain' => daftar_pemain::all(),
        ]);
        // SELECT * FROM daftar_films JOIN daftar_menus ON daftar_films.id_menu = daftar_menus.id menu
        //                            JOIN daftar_genres ON daftar_films.id_genre = daftar_genres.id_genre
        //                            JOIN daftar_directors ON daftar_films.id_director = daftar_directors.id_director
        //                            JOIN daftar_pemains ON daftar_films.id_pemain = daftar_pemains.id_pemain
    }

    public function tambahFilm1(Request $request)
    {
        $data = $request->validate([
            'judul_film' => 'required | max:100',
            'batasan_umur_film' => 'required | numeric',
            'cover_film' => 'image | file',
            'description_film' => 'required', 
            'komentar_film' => 'required', 
            'id_director' => 'required',
            'id_pemain' => 'required',
            'id_genre' => 'required',
            'id_menu' => 'required',
        ]);

        if($request->hasFile('cover_film')) {
            // Mengambil gambar dan menyimpannya di folder tujuan dengan nama asli
            $request->file('cover_film')->move('images/film', $request->file('cover_film')->getClientOriginalName());
            $data['cover_film'] = $request->file('cover_film')->getClientOriginalName();
        }

        daftar_film::create($data);
        //INSERT INTO daftar_films ('id_film', 'judul_film', 'batasan_umur_film', 'cover_film', 'description_film', 'komentar_film', 'id_director', 'id_pemain', 'id_genre', 'id_menu') VALUES ($id_film, $judul_film, $batasan_umur_film, $cover_film, $description_film, $komentar_film, daftar_directors['id_director'], daftar_pemains['id_pemain'], daftar_genres['id_genre'], daftar_menus['id_menu']);

          return redirect('/data-tontonan/film')->with('success', ' Film berhasil ditambah!');

    }

    public function edit($id)
    {
        $film = daftar_film::find($id);

        return view('film.edit',[
            'film' => $film,
            'title' => 'edit film',
            'menu' => daftar_menu::all(),
            'genre' => daftar_genre::all(),
            'director' => daftar_director::all(),
            'pemain' => daftar_pemain::all(),
        ]);
        // SELECT * FROM daftar_films JOIN daftar_menus ON daftar_films.id_menu = daftar_menus.id menu
        //                            JOIN daftar_genres ON daftar_films.id_genre = daftar_genres.id_genre
        //                            JOIN daftar_directors ON daftar_films.id_director = daftar_directors.id_director
        //                            JOIN daftar_pemains ON daftar_films.id_pemain = daftar_pemains.id_pemain
        //                            WHERE id_film = $film
    }

    public function update(Request $request, $id)
    {
        $film = daftar_film::find($id);
        $film->update($request->validate([
            'judul_film' => 'required | max:100',
            'batasan_umur_film' => 'required | numeric',
            'cover_film' => 'image | file',
            'description_film' => 'required',
            'komentar_film' => 'required',
            'id_director' => 'required',
            'id_pemain' => 'required',
            'id_genre' => 'required',
            'id_menu' => 'required',
            ]));
        
        if($request->hasFile('cover_film')) {
            // Mengambil gambar dan menyimpannya di folder tujuan dengan nama asli
            $request->file('cover_film')->move('images/film', $request->file('cover_film')->getClientOriginalName());
            $film->cover_film = $request->file('cover_film')->getClientOriginalName();
            $film->save();
        }
        //UPDATE daftar_films SET id_film = $film

        return redirect('/data-tontonan/film')->with('edit', ' data film berhasil diedit!');
    }

    public function delete($id)
    {
        $film = daftar_film::find($id);
        $film->delete();
        //DELETE daftar_films WHERE id_film = $film

        return redirect('/data-tontonan/film')->with('delete', 'data film berhasil dihapus');
    }

}
