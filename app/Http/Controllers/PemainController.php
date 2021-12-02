<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar_pemain;

class PemainController extends Controller
{
     public function index()
    {
        return view('admin.pemain.index', [
            'title' => 'daftar pemain',
            'pemain' => daftar_pemain::all()
        ]);
    }

    public function tambah(Request $request)
    {
        $pemain = $request->validate([
            'nama_pemain' => 'required | unique:daftar_pemains',
        ]);

          daftar_pemain::create($pemain);
          return redirect('/pemain')->with('success', 'Pemeran sudah ditambahkan!');
        
    }

    public function edit($id)
    {
        $pemain = daftar_pemain::find($id);

        return view('admin.pemain.edit', [
            'pemain' => $pemain,
            'title' => 'edit pemain'
        ]);
    }

    public function update(Request $request, $id)
    {
        $pemain = daftar_pemain::find($id);
        $pemain->update($request->all());
        $pemain->save();

        return redirect('/pemain')->with('edit', 'Pemeran berhasil di update!');

        
    }
}
