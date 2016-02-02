<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public $timestamps = false;

    public function habreservas()
    {
        return $this->hasMany('App\Habreserva');
    }

    public function cliente()
    {
    	return $this->belongsTo('App\Cliente');
    }

    public function usuario()
    {
    	return $this->belongsTo('App\Usuario');
    }

    public function comprobante()
    {
        return $this->hasOne('App\Comprobante');
    }
}