<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    protected $table='envio';
    protected $primaryKey="idEnvio";
    public $timestamps=false;

    protected $fillable=[
        'idEnvio',
        'Descripcion',
        'Mensaje',
        'Fecha_envio',
        'Destinatario',
        'TelDestinatario',
        'DirecDestinatario',
    ];
}
