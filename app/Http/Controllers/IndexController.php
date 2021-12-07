<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\daftar_tvshow;
use App\Models\daftar_film;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Beranda',
            'tontonan' => daftar_tvshow::all(),
            //SELECT * FROM daftar_tvshows
            
            'films' => daftar_film::all()
            //SELECT * FROM daftar_films
        ]);
    }
}
