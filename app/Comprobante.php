<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
	public $timestamps = false;

    public function reserva()
    {
    	return $this->belongsTo('App\Reserva');
    }
    
    public function usuario()
    {
    	return $this->belongsTo('App\Usuario');
    }
}
