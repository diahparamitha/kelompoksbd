<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'title' => 'halaman admin'
        ]);
    }

    public function tonton()
    {
        return view('admin.tonton', [
            'title' => 'data tontonan'
        ]);
    }
}
