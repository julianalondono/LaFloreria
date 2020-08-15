<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flor extends Model
{
    protected $table='flor';
    protected $primaryKey="idFlor";
    public $timestamps=false;

    protected $fillable=[
        'idFlor',
        'Nombre',
        'Precio_unitario',
    ];
}
