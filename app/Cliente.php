<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nombres', 'apellidos', 'fecha_nac', 'sexo', 'dni', 'estado_civil', 'prof_ocup', 'pais', 'procedencia', 'destino', 'celular',
    ];

    public function reservas()
    {
        return $this->hasMany('App\Reserva');
    }

}
