<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_agenda';
    protected $fillable =['id_ageda','seguimineto','alias',
                          'nombre','apellido_p','apellido_m',
                          'telefono','fecha_nacimiento','hora',
                          'dia','publicidad','contesto','empleado_id'];
}
