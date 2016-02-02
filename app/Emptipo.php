<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emptipo extends Model
{
    public function empleados()
    {
    	return $this->hasMany('App\Empleado');
    }
}
