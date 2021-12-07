<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar_genre;
use App\Models\daftar_tvshow;

class GenreController extends Controller
{
    public function index()
    {
        return view('admin.genre.index', [
            'title' => 'genre',
            'genre' => daftar_genre::all()
            //SELECT * FROM daftar_genre
        ]);
    }

    public function tambah(Request $request)
    {
        $genre = $request->validate([
            'nama_genre' => 'required | unique:daftar_genres',
        ]);

          daftar_genre::create($genre);
          //INSERT INTO daftar_genre ('id_genre', 'nama_genre') VALUES ($id_genre, $nama_genre) 
          //                        WHERE nama_genre != daftar_genres['nama_genre']
          return redirect('/genre')->with('success', 'Genre sudah ditambahkan!');
        
    }

    public function edit($id)
    {
        $genre = daftar_genre::find($id);
        
        return view('admin.genre.edit', [
            'genre' => $genre,
            'title' => 'edit genre'
            //SELECT * FROM daftar_genres WHERE id_genre = $id_genre LIMIT 1
        ]);
    }

    public function update(Request $request, $id)
    {
        $genre = daftar_genre::find($id);
        $genre->update($request->all());
        $genre->save();
        //UPDATE daftar_genres SET id_genre = $id_genre

        return redirect('/genre')->with('edit', 'Genre berhasil di update!');
    }

    /*public function delete( Request $request, daftar_genre $daftar_genre)
    {
        daftar_genre::destroy($daftar_genre);

        return redirect('/genre')->with('delete', 'genre berhasil dihapus');
    }*/
}
