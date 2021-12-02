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
            'menu' => daftar_menu::all()
        ]);
    }

    public function tambah(Request $request)
    {
        $menu = $request->validate([
            'nama_menu' => 'required | unique:daftar_menus',
        ]);

          daftar_menu::create($menu);
          return redirect('/menu')->with('success', 'menu sudah ditambahkan!');
        
    }

    public function edit($id)
    {
        $menu = daftar_menu::find($id);

        return view('admin.menu.edit', [
            'menu' => $menu,
            'title' => 'edit menu'
        ]);
    }

    public function update(Request $request, $id)
    {
        $menu = daftar_menu::find($id);
        $menu->update($request->all());
        $menu->save();

        return redirect('/menu')->with('edit', 'Menu berhasil di update!');

        
    }
}
