<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class daftarkuController extends Controller
{
    public function daftarku()
    {
        return view('user.data.daftarku', [
            'title' => 'daftarku'
        ]);
    }

    public function tambahDaftarku()
    {
        
        
    }
}
