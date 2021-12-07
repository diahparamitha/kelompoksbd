<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftarku extends Model
{
    use HasFactory;

    public $table = 'daftarku';

    protected $guarded = ['id_daftarku'];

    protected $primaryKey = 'id_daftarku';

    public function daftar_tvshow()
    {
        return $this->belongsTo('App\Models\daftar_tvshow', 'id_tvshow');    //satu daftarku memiliki banyak tvshow
    }

    public function daftar_film()
    {
        return $this->belongsTo('App\Models\daftar_film', 'id_film');    //satu daftarku memiliki banyak film
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');    //satu daftarku dimiliki oleh satu user
    }
}
