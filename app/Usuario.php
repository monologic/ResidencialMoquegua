<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
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
