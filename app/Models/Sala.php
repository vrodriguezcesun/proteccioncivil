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
];
}
