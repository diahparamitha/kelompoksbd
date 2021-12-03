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

    public function daftar_menu()
    {
        return $this->belongsTo('App\Models\daftar_menu', 'id_menu');    //satu satu tvshow memiliki satu menu
    }

     //penggunaan variabel scope untuk pencarian di halaman pasien mealalui nama dan tulisan
     public function scopeFilter($query, array $filters)
     {
         $query->when($filters['cari'] ?? false, function ($query, $cari) {
             return $query->where(function ($query) use ($cari) {
                 $query->where('judul_tvshow', 'like', '%' . $cari . '%');
             });
         });
     }

     public function tvshow()
    {
        //filter diambil dari model pasien untuk melakukan searching
        return view('tvshow.index', [
            'title' => 'TV Show',
            'daftar_tvshow' => daftar_tvshow::orderBy('judul_tvshow')->filter(request(['cari']))->paginate(7)->withQueryString()
        ]);
    }
}
