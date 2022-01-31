<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerEmpleados extends Controller
{
    
    public function index2(){
        return view('index');
    }
    public function empleados(){
        return view('empleados');
    }
    public function guardarempleado(Request $request){
    
        $this->validate($request,[
            'id_empleado' => 'required|regex:/^[E][M][P][-][0-9]{5}$/',
            'nombre' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_p' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_m' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'telefono' => 'required|regex:/^[0-9]{10}$/',
            'fecha_nacimiento' => 'required|date',
            
        ]);
        echo "TODO CORRECTO";
    }
}