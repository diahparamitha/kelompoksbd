<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar_menu;

class MenuController extends Controller
{
    public function index()
    {
        return view('admin.menu.index', [
            'title' => 'daftar menu',
            'menus' => daftar_menu::latest()->paginate(5)
            //SELECT * FROM daftar_menus ORDER BY DESC
        ]);
    }

    public function tambah(Request $request)
    {
        $menu = $request->validate([
            'nama_menu' => 'required | unique:daftar_menus',
        ]);

          daftar_menu::create($menu);
          //INSERT INTO daftar_menus ('id_menu', 'nama_menu') VALUES ($id_menu, $nama_menu) 
          //                        WHERE nama_menu <> daftar_menus['nama_menu']
          return redirect('/menu')->with('success', 'menu sudah ditambahkan!');
        
    }

    public function edit($id)
    {
        $menu = daftar_menu::find($id);

        return view('admin.menu.edit', [
            'menu' => $menu,
            'title' => 'edit menu'
        ]);
        //SELECT * FROM daftar_menus WHERE id_menu = $id_menu LIMIT 1
    }

    public function update(Request $request, $id)
    {
        $menu = daftar_menu::find($id);
        $menu->update($request->all());
        $menu->save();
        //UPDATE daftar_menus SET id_menu = $id_menu

        return redirect('/menu')->with('edit', 'Menu berhasil di update!');

        
    }
}
