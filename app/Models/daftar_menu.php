<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_menu extends Model
{
    use HasFactory;

     protected $primaryKey = 'id_menu'; 

     public function daftar_tvshow()
    {
        return $this->belongsTo('App\Models\daftar_tvshow', 'id_tvshow');    //satu satu tvshow memiliki satu genre
    }
}
