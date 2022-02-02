<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class empleados extends Model
{
    use HasFactory;
    use Softdeletes;

    protected $primaryKey = 'id_empleado';
    protected $fillable = [
        'id_empleado',
        'alias',
        'nombre',
        'apellido_p',
        'apellido_m',
        'telefono',
        'fecha_nacimiento',
        'genero',
        'foto'
    ];      
}
