<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //protected $table = "users"; //Sí quiero que apunte a otra tabla
    //Esto funciona si son pocos campos
    //Esto acepta los permitidos e ignora los protegidos
    protected $fillable = [
        'name',
        'descripcion',
        'categoria'
    ];

    //Esto es más recomendable si son muchos campos permitidos y pocos los protegidos
    //protected $guarded = []; //o $guarded = ['status'];
}
