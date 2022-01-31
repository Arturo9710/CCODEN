<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadosModel extends Model
{
    use HasFactory;
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
