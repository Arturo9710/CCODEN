<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class entrevista extends Model
{
    use HasFactory;
    use Softdeletes;

    protected $primaryKey = 'id_entrevista';
    protected $fillable = [
        'id_entrevista',
        'nombre_agenda',
        'edad',
        'citado',
        'publicidad',
        'hora',
        'oficina',
        'status',
        'agenda_id'];      
}