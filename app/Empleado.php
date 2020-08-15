<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table='empleado';
    protected $primaryKey="idEmpleado";
    public $timestamps=false;

    protected $fillable=[
        'idEmpleado',
        'Telefono',
        'Nombre',
    ];
}
