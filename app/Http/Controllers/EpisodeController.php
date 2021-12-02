<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar_episode;

class EpisodeController extends Controller
{
    public function index()
    {
        return view('admin.episode.index', [
            'title' => 'daftar episode',
            'episode' => daftar_episode::all()
        ]);
    }

   public function tambah(Request $request)
    {
        $episode = $request->validate([
            'no_episode' => 'required | unique:daftar_episodes',
        ]);

          daftar_episode::create($episode);
          return redirect('/episode')->with('success', 'episode sudah ditambahkan!');
        
    }

    public function edit($id)
    {
        $episode = daftar_episode::find($id);

        return view('admin.episode.edit', [
            'episode' => $episode,
            'title' => 'edit jumlah episode'
        ]);
    }

    public function update(Request $request, $id)
    {
        $episode = daftar_episode::find($id);
        $episode->update($request->all());
        $episode->save();

        return redirect('/episode')->with('edit', 'Jumlah episode berhasil di update!');
    }
}
