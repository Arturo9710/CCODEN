<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\curso;
use DataTables;
use Session;

class ControllerCurso extends Controller
{
    function __contruct()
    {
        $this->middleware('auth');
    $this->middleware('permission:ver-curso|crear-curso|editar-curso|desactivar-curso',['only'=>['index']]); 
    $this->middleware('permission:crear-curso',['only'=>['create','store']]); 
    $this->middleware('permission:editar-curso',['only'=>['edit','update']]);     
    $this->middleware('permission:borrar-curso',['only'=>['destroy']]);     
}
    public function curso(){

        $consulta = curso::orderBy('id_curso','DESC')
                         ->take(1)->get();
                    
         $cuantos = count($consulta);
         if($cuantos==0)
         {
         $idsigue = 1;
         }
        else {
        $idsigue = $consulta[0]->id_curso + 1;
        }
        return view ('curso.curso')
        ->with('idsigue',$idsigue);
        
    }

    public function guardarcurso(Request $request){
    
        $this->validate($request,[
            'nombre' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_p' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_m' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'alias' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'clave_agenda' => 'required|regex:/^[0-9]{2}$/',
            'id_agenda' => 'required|regex:/^[0-9]{2}$/',
            'edad' => 'required|regex:/^[0-9]{2}$/',
            'junta_informacion' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'telefono' => 'required|regex:/^[0-9]{10}$/',
            'campo_vacio_f1' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
        ]);

        $curso = new curso;
        $curso->id_curso= $request->id_curso;
        $curso->nombre= $request->nombre;
        $curso->apellido_p= $request->apellido_p;
        $curso->apellido_m= $request->apellido_m;
        $curso->alias= $request->alias;
        $curso->clave_agenda= $request->clave_agenda;
        $curso->edad= $request->edad;
        $curso->junta_informacion= $request->junta_informacion;
        $curso->despacho= $request->despacho;
        $curso->telefono= $request->telefono;
        $curso->fecha= $request->fecha;
        $curso->campo_vacio_f1= $request->campo_vacio_f1;
        $curso->entrevista_id= 1;
        $curso->agenda_id= 1;
        $curso->save();
        echo "guardado";
        //Session::flash('mensaje',"La Entrevista
        //ha sido dada de alta correctaemente");
        //return redirect()->route('reporteentrevista');
      
        
    }
}