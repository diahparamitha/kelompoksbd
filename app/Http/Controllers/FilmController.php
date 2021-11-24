<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        return view('film.index', [
            'title' => 'halaman film'
        ]);
    }

    public function film2()
    {
        return view('film.film2', [
            'title' => 'halaman film'
        ]);
    }
}
