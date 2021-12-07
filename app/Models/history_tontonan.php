<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history_tontonan extends Model
{
    use HasFactory;

    protected $guarded = ['id_history_tontonan'];

    protected $primaryKey = 'id_history_tontonan';

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
