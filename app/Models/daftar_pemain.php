<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_pemain extends Model
{
    use HasFactory;

    protected $guarded = ['id_pemain'];

    protected $primaryKey = 'id_pemain'; 

    public function tvshow()
    {
        return $this->belongsTo(daftar_tvshowe::class);    
    }

}
