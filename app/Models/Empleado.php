<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = [
        'empleado',
        'nombre',
        'puesto',
        'sala',
        'email',
        'curp',
        'telefono',
        'empresa',
        'rfc',
        'imss',
        'cursopa',
        'cursopai',
        'cursopaf',
        'ciudadpa',
        'cursobyr',
        'cursobyri',
        'cursobyrf',
        'ciudadbyr',
        'cursomyue',
        'cursomyuei',
        'cursomyuef',
        'ciudadmyue',
        'cursoeyr',
        'cursoeyri',
        'cursoeyrf',
        'ciudadeyr',
      
    ];
    public function evaluaciones()
    {
        return $this->hasMany(Evaluaciones::class,'user_id');
    }
}
