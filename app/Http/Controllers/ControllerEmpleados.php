<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmpleadosModel;

class ControllerEmpleados extends Controller
{
    
    public function empleados(){
        return view('empleados');
    }
    public function eloquent(){
        $empleados = new EmpleadosModel;
        $empleados->id_empleado = 3;
        $empleados->alias = "preuba";
        $empleados->nombre = "Arturo";
        $empleados->apellido_p = "Reyes";
        $empleados->apellido_m = "German";
        $empleados->telefono = "7224495978";
        $empleados->fecha_nacimiento = '2021-12-12';
        $empleados->genero = "masculino";
        $empleados->foto = "foto.jpg    ";
        $empleados->save();
       return "Operacion realizada";

    }
    public function guardarempleado(Request $request){
    
        $this->validate($request,[
            'id_empleado' => 'required|regex:/^[E][M][P][-][0-9]{5}$/',
            'nombre' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_p' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_m' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            // 'telefono' => 'required|regex:/^[s0-9]{10}$/',
            'fecha_nacimiento' => 'required|date',
            
        ]);
        echo "TODO CORRECTO";
    }
}