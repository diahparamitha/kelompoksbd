<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_pemain extends Model
{
    use HasFactory;

    protected $guarded = ['id_pemain'];

    protected $primaryKey = 'id_pemain'; 

     public function daftar_tvshow()
    {
        return $this->hasMany('App\Models\daftar_tvshow', 'id_tvshow');    //satu tvshow memiliki banyak pemain
    }

    public function daftar_film()
    {
        return $this->hasMany('App\Models\daftar_film', 'id_film');    //satu film memiliki banyak pemain
    }

}
