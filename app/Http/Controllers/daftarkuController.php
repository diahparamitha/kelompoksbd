<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\daftarku;
use App\Models\history_tontonan;


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
            'history' => history_tontonan::all()
        ]);
    }
}