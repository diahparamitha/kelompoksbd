<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\daftar_tvshow;
use App\Models\daftar_film;
use App\Models\genre_tvshows;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'title' => 'halaman admin',
            'users' => User::all()
            //SELECT * FROM user;
        ]);
    }

    public function tonton()
    {
        return view('admin.tonton', [
            'title' => 'data tontonan',
            'tontonan' => daftar_tvshow::all()
            //SELECT * FROM daftar_tvshow;
        ]);
    }

    public function tontonFilm()
    {
        return view('admin.tontonFilm', [
            'title' => 'data tontonan',
            'film' => daftar_film::all()
            //SELECT * FROM daftar_film;
        ]);
    }
}
