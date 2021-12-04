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
            //SELECT * FROM daftar_episode
        ]);
    }

   public function tambah(Request $request)
    {
        $episode = $request->validate([
            'no_episode' => 'required | unique:daftar_episodes',
        ]);

          daftar_episode::create($episode);
          //INSERT INTO daftar_episode ('id_episode', no_episode') VALUES ('$no_episode') 
          //                    WHERE no_episode != daftar_episodes['no_episode']
          return redirect('/episode')->with('success', 'episode sudah ditambahkan!');
        
    }

    public function edit($id)
    {
        $episode = daftar_episode::find($id);

        return view('admin.episode.edit', [
            'episode' => $episode,
            'title' => 'edit jumlah episode'
        ]);
        //SELECT * FROM daftar_episode WHERE no_episode = $no_episode LIMIT 1
    }

    public function update(Request $request, $id)
    {
        $episode = daftar_episode::find($id);
        $episode->update($request->all());
        $episode->save();
        //UPDATE daftar_directors SET 'id_episode' = $id_episode

        return redirect('/episode')->with('edit', 'Jumlah episode berhasil di update!');
    }
}
