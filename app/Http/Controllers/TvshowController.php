<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar_tvshow;

class TvshowController extends Controller
{
    public function index()
    {
        return view('tvshow.index', [
            'title' => 'halaman tvshow',
            'tvshow' => daftar_tvshow::all()->sortBy('created_at')

        ]);
    }

    public function infoShow($id)
    {
        return view('tvshow.infoShow', [
            'title' => 'halaman tvshow',
            'tvshow' => daftar_tvshow::find($id)
        ]);
    }

    public function tambahShow()
    {
        return view('tvshow.tambahShow', [
            'title' => 'halaman tvshow',
        ]);
    }

    public function tambahShow1(Request $request)
    {
        
    }
}
