<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\daftar_tvshow;
use App\Models\daftar_film;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'title' => 'halaman admin',
            'users' => User::all()
        ]);
    }

    public function tonton()
    {
        return view('admin.tonton', [
            'title' => 'data tontonan',
            'tontonan' => daftar_tvshow::join('daftar_genres', 'daftar_genres.id_genre', '=', 'daftar_tvshows.id_genre')
                                     ->join('daftar_pemains', 'daftar_pemains.id_pemain', '=', 'daftar_tvshows.id_pemain')
                                     ->join('daftar_menus', 'daftar_menus.id_menu', '=', 'daftar_tvshows.id_menu')
                                     ->join('daftar_episodes', 'daftar_episodes.id_episode', '=', 'daftar_tvshows.id_episode')
                                     ->join('daftar_directors', 'daftar_directors.id_director', '=', 'daftar_tvshows.id_director')
                                     ->get()
        ]);
    }

    public function tontonFilm()
    {
        return view('admin.tontonFilm', [
            'title' => 'data tontonan',
            'film' => daftar_film::all()
        ]);
    }
}
