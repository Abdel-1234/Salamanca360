<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LugaresInteres extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'ubicacion',
        'ubicacion_enlace',
        'enlace',
        'imagen_ruta',
        'decripcionMin',
        'decripcionMax',
        'telefono',
        'precio'
    ];
}
