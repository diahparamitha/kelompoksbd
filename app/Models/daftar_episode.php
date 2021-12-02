<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_episode extends Model
{
    use HasFactory;

    protected $guarded = ['id_episode'];

    protected $primaryKey = 'id_episode'; 

     public function daftar_tvshow()
    {
        return $this->hasMany('App\Models\daftar_tvshow', 'id_tvshow');    
    }

}
