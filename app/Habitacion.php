<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    public $timestamps = false;

    public function habtipo()
    {
        return $this->belongsTo('App\Habtipo');
    }

    public function habreservas()
    {
        return $this->hasMany('App\Habreserva');
    }

    public function servicios()
    {
        return $this->belongsToMany('App\Servicio');
    }
}
