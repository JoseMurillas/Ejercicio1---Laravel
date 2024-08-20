<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabla3 extends Model
{
    use HasFactory;

    protected $table = 'tabla3';

    protected $fillable =[
        'cedula',
        'id',
        'curso_alternativo'
    ];
}
