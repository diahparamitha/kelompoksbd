<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_menu extends Model
{
    use HasFactory;

     protected $guarded = ['id_menu'];

     protected $primaryKey = 'id_menu'; 

     public function daftar_tvshow()
    {
        return $this->hasMany('App\Models\daftar_tvshow', 'id_tvshow');    //satu tvshow memiliki satu menu
    }

    public function daftar_film()
    {
        return $this->hasMany('App\Models\daftar_film', 'id_film');    //satu film memiliki satu menu
    }
}
