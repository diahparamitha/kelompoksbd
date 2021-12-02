<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\daftarku;
use App\Http\Controllers\TvshowController;


class daftarkuController extends Controller
{
    public function daftarku()
    {
        return view('user.data.daftarku', [
            'title' => 'daftarku'
        ]);
    }

    public function tambahDaftarku($id_tvshow)
    {
        
    }
}