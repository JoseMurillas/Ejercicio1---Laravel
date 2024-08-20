<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabla1 extends Model
{
    use HasFactory;
    protected $table = 'tabla1';

      // Los atributos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
    ];

}
