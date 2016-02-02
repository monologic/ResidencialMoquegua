<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
	public $timestamps = false;

    public function habitacions()
    {
        return $this->belongsToMany('App\Habitacion');
    }

    public function habreservas()
    {
        return $this->belongsToMany('App\Habreserva');
    }
}
