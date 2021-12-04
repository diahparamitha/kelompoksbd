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
        return $this->belongsTo('App\Models\daftar_genre', 'id_genre');    //satu tvshow memiliki satu genre
    }

    public function daftar_director()
    {
        return $this->belongsTo('App\Models\daftar_director', 'id_director');    //satu tvshow memiliki satu director
    }

    public function daftar_pemain()
    {
        return $this->belongsTo('App\Models\daftar_pemain', 'id_pemain');    //satu tvshow memiliki satu pemain
    }

    public function daftar_episode()
    {
        return $this->belongsTo('App\Models\daftar_episode', 'id_episode');    //satu tvshow memiliki satu episode (jumlah)
    }

    public function daftar_menu()
    {
        return $this->belongsTo('App\Models\daftar_menu', 'id_menu');    //satu tvshow memiliki satu menu
    }


    //penggunaan variabel scope untuk pencarian di halaman tvshow mealalui judul_tvshow 
   public function scopeFilter($query, array $filters)
    {
        $query->when($filters['judul_tvshow'] ?? false, function ($query, $judul_tvshow) {
            return $query->where(function ($query) use ($judul_tvshow) {
                $query->where('judul_tvshow', 'like', '%' . $judul_tvshow . '%');
            });
        });
    }
}
 