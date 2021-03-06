<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habtipo extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'tipo', 'descripcion','foto',
    ];

    public function habitacions()
    {
        return $this->hasMany('App\Habitacion');
    }
}
