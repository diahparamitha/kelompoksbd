<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar_director;

class DirectorController extends Controller
{
     public function index()
    {
        return view('admin.director.index', [
            'title' => 'daftar director',
            'director' => daftar_director::all()
        ]);
    }

    public function tambah(Request $request)
    {
        $director = $request->validate([
            'nama_director' => 'required | unique:daftar_directors',
        ]);

          daftar_director::create($director);
          return redirect('/director')->with('success', 'director sudah ditambahkan!');
        
    }

    public function edit($id)
    {
        $director = daftar_director::find($id);

        return view('admin.director.edit', [
            'director' => $director,
            'title' => 'edit director'
        ]);
    }

    public function update(Request $request, $id)
    {
        $director = daftar_director::find($id);
        $director->update($request->all());
        $director->save();

        return redirect('/director')->with('edit', 'director berhasil di update!');

        
    }
}
