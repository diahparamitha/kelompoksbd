<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\daftarku;
use App\Models\history_tontonan;
use Illuminate\Support\Facades\DB;


class daftarkuController extends Controller
{
    public function daftarku()
    {
        return view('user.data.daftarku', [
            'title' => 'daftarku'
        ]);
    }

    public function history()
    {
        return view('user.data.history', [
            'title' => 'history',
            'history' => DB::table('history_tontonans')
                        ->leftJoin('daftar_tvshows','daftar_tvshows.id_tvshow','=','history_tontonans.id_tvshow')
                        ->leftJoin('daftar_films','daftar_films.id_film','=','history_tontonans.id_film')
                        ->leftJoin('users','users.id','=','history_tontonans.id_user')
                        ->select('history_tontonans.id_history_tontonan','daftar_tvshows.judul_tvshow', 'daftar_tvshows.id_tvshow', 'daftar_tvshows.cover_tvshow', 'daftar_tvshows.id_menu', 'daftar_films.judul_film', 'daftar_films.id_film', 'daftar_films.cover_film','users.nama')
                        ->get()
        ]);
    }
}