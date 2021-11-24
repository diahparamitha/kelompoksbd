<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TvshowController extends Controller
{
    public function index()
    {
        return view('tvshow.index', [
            'title' => 'halaman tvshow'
        ]);
    }

    public function infoShow()
    {
        return view('tvshow.infoShow', [
            'title' => 'sesuai id'
        ]);
    }
}
