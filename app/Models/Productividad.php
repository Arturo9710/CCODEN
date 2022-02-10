<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Productividad extends Model
{
    use HasFactory;
    use Softdeletes;
    
    protected $primaryKey = 'id_productividad';
    protected $fillable =[
    'id_productividad',
    'nombre',
    'apellido_p',
    'apellido_m',
    'contesto',
    'llego',
    'porcentaje',
    'efectividad',
    'entrevista_id'];
    
}
