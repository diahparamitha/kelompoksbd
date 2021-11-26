<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_film extends Model
{
    use HasFactory;

    protected $guarded = ['id_film'];

    protected $primaryKey = 'id_film'; 

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

   public function daftar_menu()
   {
       return $this->belongsTo('App\Models\daftar_menu', 'id_menu');    //satu satu tvshow memiliki satu menu
   }


}
