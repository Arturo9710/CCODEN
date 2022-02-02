<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleados;
use DataTables;

class ControllerEmpleados extends Controller
{
    
    public function empleados(){
        $consulta = empleados::orderBy('id_empleado','DESC')
                             ->take(1)->get();

        $cuantos = count($consulta);
        if($cuantos==0)
        {
            $idsigue = 1;
        }
        else {
            $idsigue = $consulta[0]->id_empleado + 1;
        }
        return view ('empleados')
               ->with('idsigue',$idsigue);
       
    }
   
    public function guardarempleado(Request $request){
    
        $this->validate($request,[
            'alias' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'nombre' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_p' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_m' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'telefono' => 'required|regex:/^[s0-9]{10}$/',
            'fecha_nacimiento' => 'required|date',
            
        ]);
        $empleados = new empleados;
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

        return redirect('reporteempleado');
        // return view('mensajes')
        // ->with('proceso',"ALTA EMPLEADOS")
        // ->with('mensaje',"El Empleado $request->nombre $request->apellido_p ha sido dadode alta correctamente");   
    }

    public function reporteempleado(){
        $empleados = empleados::withTrashed()->select(['id_empleado','alias','nombre',
        'apellido_p','apellido_m','telefono','genero','foto','deleted_at'])
        ->orderBy('empleados.nombre')
        ->get();
        
        return view ('reporteempleado')->with('empleados',$empleados);
    }

    public function desactivarempleado($id_empleado){
        $empleados = empleados::find($id_empleado);
        $empleados->delete();
        return view('mensajes')
        ->with('proceso',"DESACTIVAR EMPLEADOS")
        ->with('mensaje',"El Empleado  ha sido desactivado correctamente");
     
    }
}