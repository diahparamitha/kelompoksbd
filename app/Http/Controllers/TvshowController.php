<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar_tvshow;
use App\Models\daftar_menu;
use App\Models\daftar_genre;
use App\Models\daftar_director;
use App\Models\daftar_pemain;
use App\Models\daftar_episode;

class TvshowController extends Controller
{
    public function index()
    {
        return view('tvshow.index', [
            'title' => 'halaman tvshow',
            'tvshow' => daftar_tvshow::join('daftar_menus', 'daftar_menus.id_menu', '=', 'daftar_tvshows.id_menu')->get()
        ]);
    }

    public function infoShow($id)
    {
        return view('tvshow.infoShow', [
            'title' => 'halaman tvshow',
            'tvshow' => daftar_tvshow::find($id)
        ]);
    }

    public function tambahShow()
    {
        return view('tvshow.tambahShow', [
            'title' => 'halaman tvshow',
            'menu' => daftar_menu::all(),
            'genre' => daftar_genre::all(),
            'director' => daftar_director::all(),
            'pemain' => daftar_pemain::all(),
            'episode' => daftar_episode::all(),
        ]);
    }

    public function tambahShow1(Request $request)
    {
        $data = $request->validate([
            'judul_tvshow' => 'required | max:100',
            'batasan_umur_tvshow' => 'required | numeric',
            'cover_tvshow' => 'image | file | max:1024',
            'description_tvshow' => 'required',
            'komentar_tvshow' => 'required',
            'id_director' => 'required',
            'id_pemain' => 'required',
            'id_episode' => 'required',
            'id_genre' => 'required',
            'id_menu' => 'required',
        ]);

        if($request->hasFile('cover_tvshow')) {
            // Mengambil gambar dan menyimpannya di folder tujuan dengan nama asli
            $request->file('cover_tvshow')->move('images/tvshow', $request->file('cover_tvshow')->getClientOriginalName());
            $data['cover_tvshow'] = $request->file('cover_tvshow')->getClientOriginalName();
        }

        daftar_tvshow::create($data);
          return redirect('/data-tontonan')->with('success', ' Tvshow berhasil ditambah!');

    }

    public function edit($id)
    {
        $tvshow = daftar_tvshow::find($id);

        return view('tvshow.edit',[
            'tvshow' => $tvshow,
            'title' => 'edit tvshow',
            'menu' => daftar_menu::all(),
            'genre' => daftar_genre::all(),
            'director' => daftar_director::all(),
            'pemain' => daftar_pemain::all(),
            'episode' => daftar_episode::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $tvshow = daftar_tvshow::find($id);
        $tvshow->update($request->validate([
            'judul_tvshow' => 'required | max:100',
            'batasan_umur_tvshow' => 'required | numeric',
            'cover_tvshow' => 'image | file | max:1024',
            'description_tvshow' => 'required',
            'komentar_tvshow' => 'required',
            'id_director' => 'required',
            'id_pemain' => 'required',
            'id_episode' => 'required',
            'id_genre' => 'required',
            'id_menu' => 'required',
            ]));
        
        if($request->hasFile('cover_tvshow')) {
            // Mengambil gambar dan menyimpannya di folder tujuan dengan nama asli
            $request->file('cover_tvshow')->move('images/tvshow', $request->file('cover_tvshow')->getClientOriginalName());
            $tvshow->cover_tvshow = $request->file('cover_tvshow')->getClientOriginalName();
            $tvshow->save();
        }

        return redirect('/data-tontonan')->with('edit', ' data tvshow berhasil diedit!');
    }

   public function delete($id)
    {
        $tvshow = daftar_tvshow::find($id);
        $tvshow->delete();

        return redirect('/data-tontonan')->with('delete', 'data tvshow berhasil dihapus');
    }
}
