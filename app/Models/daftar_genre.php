<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_genre extends Model
{
    use HasFactory;

    protected $guarded = ['id_genre'];

    protected $primaryKey = 'id_genre'; 

     public function daftar_tvshow()
    {
        return $this->hasMany('App\Models\daftar_tvshow', 'id_tvshow');    //satu tvshow memiliki banyak genre
    }

    public function daftar_film()
    {
        return $this->hasMany('App\Models\daftar_film', 'id_film');    //satu film memiliki banyak genre
    }


}
