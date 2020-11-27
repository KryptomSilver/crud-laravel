<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    public $timestamps = true;

 
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'direccion',
        'numero_tel'
    ];
}
