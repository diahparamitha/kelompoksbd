<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history_tontonan extends Model
{
    use HasFactory;

    protected $guarded = ['id_history_tontonan']

    protected $primaryKey = 'id_history_tontonan';

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
}
