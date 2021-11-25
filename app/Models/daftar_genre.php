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
        return $this->belongsTo(daftar_tvshow::class);    //satu tvshow memiliki satu genre
    }


}
