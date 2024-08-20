<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabla2 extends Model
{
    use HasFactory;
    protected $table = 'tabla2';

    protected $fillable =[
        'correo',
        'edad',
        'curso'
    ];
}
