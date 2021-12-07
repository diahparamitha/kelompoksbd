<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar_tvshow;
use App\Models\daftar_menu;
use App\Models\daftar_genre;
use App\Models\daftar_director;
use App\Models\daftar_pemain;
use App\Models\daftar_episode;
use App\Models\history_tontonan;
use Illuminate\Support\Facades\Auth;

class TvshowController extends Controller
{
    public function index()
    {
        return view('tvshow.index', [
            'title' => 'halaman tvshow',
            'tvshow' => daftar_tvshow::latest()->filter(request(['judul_tvshow']))->paginate(8)
            //SELECT * FROM daftar_tvshows WHERE 'judul_tvshow' LIKE' '%' .$request['judul_tvshow']. '%' ORDER BY DESC 
        ]);
    }

    public function infoShow(daftar_tvshow $daftar_tvshow)
    {
       
        $title = 'halaman tvshow';
        $tonton = false;
        $tvshow = daftar_tvshow::find($daftar_tvshow->id_tvshow); 
        //SELECT * FROM daftar_tvshows WHERE 'id_tvshows' = $daftar_tvshows->id_tvshow

        $history = history_tontonan::Where('id_user', Auth::user()->id)->where('id_tvshow', $daftar_tvshow->id_tvshow)->first();
             $history ? $tonton = true : history_tontonan::create([
            'id_user' => Auth::user()->id,
            'id_tvshow' => $daftar_tvshow->id_tvshow
        ]);
        //INSERT INTO history_tontonan WHERE id_user = auth::user()->id AND id_tvshow = $daftar_tvshow->id_tvshow

        return view('tvshow.infoShow', compact('tvshow', 'tonton', 'title'));

        /*return view('tvshow.infoShow', [
            'title' => 'halaman tvshow',
            'tvshow' => daftar_tvshow::find($id)
        ]);*/
            //SELECT * FROM daftar_tvshows WHERE 'id_tvshows' = daftar_tvshows['id_tvshows']
        

        /*$tonton = false;
        $tvshow = daftar_tvshow::find($daftar_tvshow->id_tvshow);
        $history = history_tontonan::Where('id_user', Auth::user()->id)->where('id_tvshow', $daftar_tvshow->id_tvshow)->first();
        $history ? $tonton = true : history_tontonan::create([
            'user_id' => Auth::user()->id,
            'tvshow' => $daftar_tvshow->id_tvshow
        ]);
        return view('tvshow.infoShow', compact('tvshow', 'tonton'));*/
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
        // SELECT * FROM daftar_tvshows JOIN daftar_menus ON daftar_tvshows.id_menu = daftar_menus.id menu
        //                              JOIN daftar_genres ON daftar_tvshows.id_genre = daftar_genres.id_genre
        //                              JOIN daftar_directors ON daftar_tvshows.id_director = daftar_directors.id_director
        //                              JOIN daftar_pemains ON daftar_tvshows.id_pemain = daftar_pemains.id_pemain
        //                              JOIN daftar_episodes ON daftar_tvshows.id_pemain = daftar_episodes.id_pemain
    }

    public function tambahShow1(Request $request)
    {
        $data = $request->validate([
            'judul_tvshow' => 'required | max:100',
            'batasan_umur_tvshow' => 'required | numeric',
            'cover_tvshow' => 'image | file',
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
        //INSERT INTO daftar_tvshows ('id_tvshow', 'judul_tvshow', 'batasan_umur_tvshow', 'cover_tvshow', 'description_tvshow', 'komentar_tvshow', 'id_director', 'id_pemain', 'id_genre', 'id_menu') VALUES ($id_tvshow, $judul_tvshow, $batasan_umur_tvshow, $cover_tvshow, $description_tvshow, $komentar_tvshow, daftar_directors['id_director'], daftar_pemains['id_pemain'], daftar_genres['id_genre'], daftar_menus['id_menu']);
        
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
        // SELECT * FROM daftar_tvshows JOIN daftar_menus ON daftar_tvshows.id_menu = daftar_menus.id menu
        //                              JOIN daftar_genres ON daftar_tvshows.id_genre = daftar_genres.id_genre
        //                              JOIN daftar_directors ON daftar_tvshows.id_director = daftar_directors.id_director
        //                              JOIN daftar_pemains ON daftar_tvshows.id_pemain = daftar_pemains.id_pemain
        //                              JOIN daftar_episodes ON daftar_tvshows.id_pemain = daftar_episodes.id_pemain
        //                              WHERE id_tvshow = $tvshow
    }

    public function update(Request $request, $id)
    {
        $tvshow = daftar_tvshow::find($id);
        $tvshow->update($request->validate([
            'judul_tvshow' => 'required | max:100',
            'batasan_umur_tvshow' => 'required | numeric',
            'cover_tvshow' => 'image | file',
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
        //UPDATE daftar_tvshows SET id_tvshow = $tvshow

        return redirect('/data-tontonan')->with('edit', ' data tvshow berhasil diedit!');
    }

   public function delete($id)
    {
        $tvshow = daftar_tvshow::find($id);
        $tvshow->delete();
        //DELETE daftar_tvshows WHERE id_tvshow = $tvshow

        return redirect('/data-tontonan')->with('delete', 'data tvshow berhasil dihapus');
    }
} 
