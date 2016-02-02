<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habreserva extends Model
{
    public $timestamps = false;

    public function habitacion()
    {
        return $this->belongsTo('App\Habitacion');
    }
    
    public function reserva()
    {
        return $this->belongsTo('App\Reserva');
    }

    public function servicios()
    {
        return $this->belongsToMany('App\Servicio');
    }
}
