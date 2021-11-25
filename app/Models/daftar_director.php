<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_director extends Model
{
    use HasFactory;

    protected $guarded = ['id_director'];

    protected $primaryKey = 'id_director'; 

    public function daftar_tvshow()
    {
        return $this->belongsTo(daftar_tvshow::class);    
    }

}
