<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\empleados;
use DataTables;
use Session;


class ControllerEmpleados extends Controller
{

    function __contruct()
    {
        $this->middleware('auth');
    $this->middleware('permission:ver-socio|crear-socio|editar-socio|desactivar-socio',['only'=>['index']]); 
    $this->middleware('permission:crear-socio',['only'=>['create','store']]); 
    $this->middleware('permission:editar-socio',['only'=>['edit','update']]);     
    $this->middleware('permission:borrar-socio',['only'=>['destroy']]);     
}
    
    public function empleados(){
        $consulta = empleados::orderBy('id_empleado','DESC')
                             ->take(1)->get();

        $cuantos = count($consulta);
        if($cuantos == 0)
        {
            $idsigue = 1;
        }
        else {
            $idsigue = $consulta[0]->id_empleado + 1;
        }
        return view ('empleados.empleados')
               ->with('idsigue',$idsigue);
       
    }
   
    public function guardarempleado(Request $request){
        
         $this->validate($request,[
         'alias' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/|unique:empleados,alias',
         'nombre' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
         'apellido_p' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
         'apellido_m' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
         'telefono' => 'required|regex:/^[0-9]{10}$/',
         'clave_socio' => 'required|regex:/^[0-9]+$/',
         'foto'=>'image|mimes:jpg,png,jpeg'
         ]);
     
        $file = $request->file('foto');
        if($file<>"")
        {
            $foto = $file->getClientOriginalName();
            $foto2 = $request->id_empleado . $foto;
            \Storage::disk('local')->put($foto2, \File::get($file));
        }
        else{
            $foto2 = "sinfoto.png";
        }
     
        $empleados = new empleados;
        $empleados->id_empleado= $request->id_empleado;
        $empleados->alias = $request->alias;
        $empleados->nombre = $request->nombre;
        $empleados->apellido_p =$request->apellido_p;
        $empleados->apellido_m = $request->apellido_m;
        $empleados->telefono = $request->telefono;
        $empleados->clave_socio = $request->clave_socio;
        $empleados->genero = $request->genero;
        $empleados->foto =$request->foto;
        $empleados->foto = $foto2;
        $empleados->save();

        Session::flash('mensaje',"El Socio $request->nombre $request->apellido_p 
        ha sido dado de alta correctaemente");
        return redirect()->route('reporteempleado');
       
    }

    public function reporteempleado(){
        
        $empleados = empleados::withTrashed()->select(['id_empleado','alias','nombre',
        'apellido_p','telefono','foto','deleted_at'])
        ->where('deleted_at','=',null)
        ->orderBy('empleados.nombre')
        ->get();
        
        return view ('empleados.reporteempleado')->with('empleados',$empleados);
    }

    public function desactivarempleado($id_empleado){
        $empleados = empleados::find($id_empleado);
        $empleados->delete();
        Session::flash('mensaje',"El Socio 
        ha sido desactivado correctaemente");
        return redirect()->route('reporteempleado');
     
    }

    public function borraempleado($id_empleado){
        $empleados = empleados::withTrashed()->find($id_empleado)->forceDelete();
        Session::flash('mensaje',"El Socio  
        ha sido borrado del sistema correctaemente");
        return redirect()->route('reporteempleado');
    }

    public function modificaempleado($id_empleado){
        $empleados = empleados::withTrashed()->select('id_empleado','alias','nombre',
        'apellido_p','apellido_m','telefono','genero','foto','clave_socio')
        ->where('id_empleado',$id_empleado)
        ->get();
        return view ('empleados.modificaempleado')
        ->with('empleados',$empleados[0]);
    }

    public function guardacambios_empleados(Request $request)
    { 

        $this->validate($request,[
            'alias' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'nombre' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_p' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_m' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'telefono' => 'required|regex:/^[0-9]{10}$/',
            'clave_socio' => 'required',
            'foto'=>'image|mimes:jpg,png,jpeg'
        ]);

   

        $file = $request->file('foto');
        if($file<>"")
        {
            $foto = $file->getClientOriginalName();
            $foto2 = $request->id_empleado . $foto;
            \Storage::disk('local')->put($foto2, \File::get($file));
        }
    
        $empleados = empleados::find($request->id_empleado);
        $empleados->id_empleado= $request->id_empleado;
        $empleados->alias = $request->alias;
        $empleados->nombre = $request->nombre;
        $empleados->apellido_p =$request->apellido_p;
        $empleados->apellido_m = $request->apellido_m;
        $empleados->telefono = $request->telefono;
        $empleados->clave_socio = $request->clave_socio;
        $empleados->genero = $request->genero;
        if($file<>"")
        {
        $empleados->foto = $foto2;
        }
        $empleados->save();

        Session::flash('mensaje',"El Socio $request->nombre $request->apellido_p 
        ha sido dado de alta correctaemente");
        return redirect()->route('reporteempleado');
    }
    
}
