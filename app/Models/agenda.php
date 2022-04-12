<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class agenda extends Model
{
    use HasFactory;
    use Softdeletes;

    protected $primaryKey = 'id_agenda';
    protected $fillable =[
        'id_agenda',
        'seguimiento',
        'alias',
        'nombre','apellido_p',
        'apellido_m',
        'telefono',
        'edad',
        'fecha',
        'hora',
        'publicidad',
        'contesto',
        'empleado_id'];
}
