<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar_film;

class FilmController extends Controller
{
    public function index()
    {
        return view('film.index', [
            'title' => 'halaman film' ,
            'film' => daftar_film::all()->sortBy('created_At')
        ]);
    }

    public function film2($id)
    {
        return view('film.film2', [
            'title' => 'halaman film' ,
            'film' => daftar_film::find($id)
        ]);
    }
}
