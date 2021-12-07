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
        return $this->belongsTo('App\Models\daftar_genre', 'id_genre');    
    }

    public function daftar_director()
    {
        return $this->belongsTo('App\Models\daftar_director', 'id_director');    
    }

    public function daftar_pemain()
    {
        return $this->belongsTo('App\Models\daftar_pemain', 'id_pemain');    
    }

    public function daftar_episode()
    {
        return $this->belongsTo('App\Models\daftar_episode', 'id_episode');    
    }

    public function daftar_menu()
    {
        return $this->belongsTo('App\Models\daftar_menu', 'id_menu');    
    }

     public function daftarku()
    {
        return $this->hasMany('App\Models\daftarku', 'id_daftarku'); 
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
 