<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
	public $timestamps = false;

    public function reservas()
    {
        return $this->hasMany('App\Reserva');
    }

    public function comprobante()
    {
        return $this->hasMany('App\Comprobante');
    }

    public function empleado()
    {
    	return $this->belongsTo('App\Empleado');
    }
}
