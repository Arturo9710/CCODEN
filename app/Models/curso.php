<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class curso extends Model
{
    use HasFactory;
    use Softdeletes;

    protected $primaryKey = 'id_curso';
    protected $fillable = [
        'id_curso',
        'nombre',
        'apellido_p',
        'apellido_m',
        'alias',
        'clave_agenda',
        'edad',
        'junta_informacion',
        'despacho',
        'telefono',
        'fecha',
        'campo_vacio_f1',
        'entrevista_id',
        'agenda_id'];
}