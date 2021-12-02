<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_director extends Model
{
    use HasFactory;

    protected $guarded = ['id_director'];

    protected $primaryKey = 'id_director'; 

    public function daftar_tvshow()
    {
        return $this->hasMany('App\Models\daftar_tvshow', 'id_tvshow');    
    }

    public function daftar_film()
    {
        return $this->hasMany('App\Models\daftar_film', 'id_film');    
    }

}
