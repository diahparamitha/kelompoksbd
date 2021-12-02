<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar_genre;

class GenreController extends Controller
{
    public function index()
    {
        return view('admin.genre.index', [
            'title' => 'genre',
            'genre' => daftar_genre::all()
        ]);
    }

    public function tambah(Request $request)
    {
        $genre = $request->validate([
            'nama_genre' => 'required | unique:daftar_genres',
        ]);

          daftar_genre::create($genre);
          return redirect('/genre')->with('success', 'Genre sudah ditambahkan!');
        
    }

    public function edit($id)
    {
        $genre = daftar_genre::find($id);
        
        return view('admin.genre.edit', [
            'genre' => $genre,
            'title' => 'edit genre'
        ]);
    }

    public function update(Request $request, $id)
    {
        $genre = daftar_genre::find($id);
        $genre->update($request->all());
        $genre->save();

        return redirect('/genre')->with('edit', 'Genre berhasil di update!');
    }
}
