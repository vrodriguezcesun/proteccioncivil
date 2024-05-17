<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluaciones extends Model
{
    use HasFactory;
    protected $fillable = [
        'pregunta1', 
        'pregunta2', 
        'pregunta3',
        'user_id',
    ];
    public function empleado()
{
    return $this->belongsTo(Empleado::class,'user_id');
}

}
 