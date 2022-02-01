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
        // $empleados = new EmpleadosModel();
        // $empleados->id_empleado= 2;
        // $empleados->alias = "daa";
        // $empleados->nombre = "ds";
        // $empleados->apellido_p ="dad";
        // $empleados->apellido_m = "ds";
        // $empleados->telefono = "7224495978";
        // $empleados->fecha_nacimiento = "2020-12-12";
        // $empleados->genero = "masculino";
        // $empleados->foto ="jj.jpg";
        // $empleados->save();

        // echo "Todo Chido";   
        


    //     $empleados = EmpleadosModel::find(1);
    //     $empleados->delete();
    //    return "Operacion realizada";

    }
    public function guardarempleado(Request $request){
    
        $this->validate($request,[
            'id_empleado' => 'required|regex:/^[E][M][P][-][0-9]{5}$/',
            'nombre' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_p' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_m' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'telefono' => 'required|regex:/^[s0-9]{10}$/',
            'fecha_nacimiento' => 'required|date',
            
        ]);
        $empleados = new EmpleadosModel;
        $empleados->id_empleado= $request->id_empleado;
        $empleados->alias = $request->alias;
        $empleados->nombre = $request->nombre;
        $empleados->apellido_p =$request->apellido_p;
        $empleados->apellido_m = $request->apellido_m;
        $empleados->telefono = $request->telefono;
        $empleados->fecha_nacimiento = $request->fecha_nacimiento;
        $empleados->genero = $request->genero;
        $empleados->foto =$request->foto;
        $empleados->save();

        echo "Todo Chido";

        
    }
}