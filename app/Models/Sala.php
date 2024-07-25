<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;
    // Definir los campos rellenables
    protected $fillable = [
        'nombre',
        'direccion',
        'rfc',
        'sala',
        'ciudad',
        'fecha',
        'cantidad',
        'descripcion',
        'marca',
        'modelo',
        'cantdet',
        'descripciondet',
        'marcadet',
        'modelodet',
        'cantterm',
        'descripcionterm',
        'marcaterm',
        'modeloterm',
        'cantdual',
        'descripciondual',
        'marcadual',
        'modelodual',
        'cantphoto',
        'descripcionphoto',
        'marcaphoto',
        'modelophoto',
        'cantestrobo',
        'descripcionestrobo',
        'marcaestrobo',
        'modeloestrobo',
];
}
