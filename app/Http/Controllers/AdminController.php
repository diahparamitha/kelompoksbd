<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\daftar_tvshow;

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
            'tontonan' => daftar_tvshow::all()
        ]);
    }
}
