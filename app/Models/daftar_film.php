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
       return $this->belongsTo('App\Models\daftar_genre', 'id_genre');    //satu film memiliki satu genre
   }

   public function daftar_director()
   {
       return $this->belongsTo('App\Models\daftar_director', 'id_director');    //satu film memiliki satu director
   }

   public function daftar_pemain()
   {
       return $this->belongsTo('App\Models\daftar_pemain', 'id_pemain');    //satu  film memiliki satu pemain
   }

   public function daftar_menu()
   {
       return $this->belongsTo('App\Models\daftar_menu', 'id_menu');    //satu  film memiliki satu menu
   }

    public function daftarku()
    {
        return $this->hasMany('App\Models\daftarku', 'id_daftarku'); //satu history tontonan dimiliki oleh satu user
    }

    //penggunaan variabel scope untuk pencarian di halaman film mealalui judul_film 
   public function scopeFilter($query, array $filters)
    {
        $query->when($filters['judul_film'] ?? false, function ($query, $judul_film) {
            return $query->where(function ($query) use ($judul_film) {
                $query->where('judul_film', 'like', '%' . $judul_film . '%');
            });
        });
    }

}
