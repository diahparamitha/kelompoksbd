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
        return $this->hasMany('App\Models\daftar_tvshow', 'id_tvshow');    
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');    
    }
}
