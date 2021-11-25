<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_tvshow extends Model
{
    use HasFactory;

    protected $guarded = ['id_tvshow'];

    protected $primaryKey = 'id_tvshow'; 

     public function daftar_genre()
    {
        return $this->belongsTo('App\Models\daftar_genre', 'id_genre');    //satu satu tvshow memiliki satu genre
    }

    public function daftar_director()
    {
        return $this->belongsTo('App\Models\daftar_director', 'id_director');    //satu satu tvshow memiliki satu genre
    }

    public function daftar_pemain()
    {
        return $this->belongsTo('App\Models\daftar_pemain', 'id_pemain');    //satu satu tvshow memiliki satu genre
    }

    public function daftar_episode()
    {
        return $this->belongsTo('App\Models\daftar_episode', 'id_episode');    //satu satu tvshow memiliki satu genre
    }


}
