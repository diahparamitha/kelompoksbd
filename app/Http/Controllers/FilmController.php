<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar_film;
use App\Models\daftar_menu;
use App\Models\daftar_genre;
use App\Models\daftar_director;
use App\Models\daftar_pemain;

class FilmController extends Controller
{
    public function index()
    {
        return view('film.index', [
            'title' => 'halaman film' ,
            'film' => daftar_film::all()->sortBy('created_at')
        ]);
    }

    public function film2($id)
    {
        return view('film.film2', [
            'title' => 'halaman film' ,
            'film' => daftar_film::find($id)
        ]);
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
    }

    public function tambahFilm1(Request $request)
    {
        $data = $request->validate([
            'judul_film' => 'required | max:100',
            'batasan_umur_film' => 'required | numeric',
            'cover_film' => 'image | file | max:1024',
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
          return redirect('/data-tontonan/film')->with('success', ' Film berhasil ditambah!');

    }

    public function delete($id)
    {
        $film = daftar_film::find($id);
        $film->delete();

        return redirect('/data-tontonan/film')->with('delete', 'data film berhasil dihapus');
    }
}
