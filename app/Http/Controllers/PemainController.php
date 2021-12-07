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
            'pemains' => daftar_pemain::latest()->paginate(5)
            //SELECT * FROM daftar_pemains ORDER BY DESC
        ]);
    }

    public function tambah(Request $request)
    {
        $pemain = $request->validate([
            'nama_pemain' => 'required | unique:daftar_pemains',
        ]);

          daftar_pemain::create($pemain);
          //INSERT INTO daftar_pemains ('id_pemain', 'nama_pemain') VALUES ($id_pemain, $nama_pemain) 
          //                        WHERE nama_pemain <> daftar_pemains['nama_pemain']
          return redirect('/pemain')->with('success', 'Pemeran sudah ditambahkan!');
        
    }

    public function edit($id)
    {
        $pemain = daftar_pemain::find($id);

        return view('admin.pemain.edit', [
            'pemain' => $pemain,
            'title' => 'edit pemain'
            //SELECT * FROM daftar_pemains WHERE id_pemain = $id_pemain LIMIT 1
        ]);
    }

    public function update(Request $request, $id)
    {
        $pemain = daftar_pemain::find($id);
        $pemain->update($request->all());
        $pemain->save();
        //UPDATE daftar_menus SET id_menu = $id_menu

        return redirect('/pemain')->with('edit', 'Pemeran berhasil di update!');

        
    }
}
