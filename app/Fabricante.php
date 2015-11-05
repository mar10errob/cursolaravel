<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    public function vehiculos()
    {
    	return $this->hasMany('App\Vehiculo');
    }

    public function getCountVehiculosAttribute()
    {
    	return $this->vehiculos->count();
    }
}
