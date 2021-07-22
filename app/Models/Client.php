<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'cedula',
        'nombreComercial',
        'telefono',
        'direccion',
        'regimen',
        'representanteLegal',
        'cedulaRepresentanteLegal',
        'correoFe',
        'contrasenaFe',
        'nota'
    ];

    
}
