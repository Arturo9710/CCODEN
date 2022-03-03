<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agenda;
use App\Models\empleados;
use Session;


class ControllerAgenda extends Controller
{
    function __contruct()
    {
    $this->middleware('permission:ver-agenda|crear-agenda|editar-agenda|eliminar-agenda',['only'=>['index']]); 
    $this->middleware('permission:crear-agenda',['only'=>['create','store']]); 
    $this->middleware('permission:editar-agenda',['only'=>['edit','update']]);     
    $this->middleware('permission:eliminar-agenda',['only'=>['destroy']]);     
    }
    public function agenda(){
        $empleados = empleados::all();

        return view('agenda.agenda')
        ->with('empleados', $empleados);
    }
    public function guardaragenda(Request $request){
    
        $this->validate($request,[
            // 'seguimiento' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'alias_clave' => 'required',
            'nombre' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_p' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ñ]+$/',
            'apellido_m' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ñ]+$/',
            'telefono' => 'required|regex:/^[0-9]{10}$/',
            'edad' => 'required|regex:/^[0-9]{2}$/',
            'fecha' => 'required',
            'hora' => 'required',
            'publicidad' => 'required',
            'contesto' => 'required',
            
        ]);
        
        
        
        $agenda = new agenda;
        $agenda->id_agenda    = $request->id_agenda;
        $agenda->seguimiento  = $request->seguimiento;
        $agenda->alias        = $request->alias_clave;
        $agenda->nombre       = $request->nombre;
        $agenda->apellido_p   = $request->apellido_p;
        $agenda->apellido_m   = $request->apellido_m;
        $agenda->telefono     = $request->telefono;
        $agenda->edad         = $request->edad;
        $agenda->fecha         = $request->fecha;
        $agenda->hora         = $request->hora;
        $agenda->publicidad   = $request->publicidad;
        $agenda->contesto     = $request->contesto;
        $agenda->empleado_id  = 22;

        $agenda->save();

        // dd($agenda);
        return redirect()->route('reporteagenda');
        
    }

    public function reporteagenda(){
    $agenda = agenda::withTrashed()->select(
        ['id_agenda',
        'seguimiento',
        'alias',
        'nombre',
        'telefono',
        'fecha',
        'hora',
        'deleted_at'])
    ->orderBy('agendas.id_agenda')
    ->where('deleted_at','=',null)
    ->get();

    return view ('agenda.reporteagenda')->with('agenda',$agenda);
    }

    public function desactivaagenda($id_agenda){
        $agenda = agenda::find($id_agenda);
        $agenda->delete();
        Session::flash('mensaje',"Agenda Desactivada");
       
        return redirect()->route('reporteagenda');

    }

 
    public function modificaagenda($id_agenda){
      $agenda = agenda::withTrashed()->select('id_agenda','seguimiento','alias','nombre','apellido_p','apellido_m','telefono','fecha','hora','publicidad','contesto')
      ->where('id_agenda',$id_agenda)
      ->get();
      return view ('agenda.modificaagenda')
      ->with('agenda',$agenda[0]);
      }

    public function guardacambiosAgenda(Request $request){

        
        $this->validate($request,[
            'seguimiento' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'alias_clave' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'nombre' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_p' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_m' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'telefono' => 'required|regex:/^[0-9]{10}$/',
            'edad' => 'required|regex:/^[0-9]{2}$/',
            'fecha' => 'required',
            'hora' => 'required',
            'publicidad' => 'required',
            'contesto' => 'required',
            
        ]);
        
        
        $agendas = agenda::withTrashed()->find($request->id_agenda);
       
            $agendas->id_agenda= $request->id_agenda;
            $agendas->seguimiento= $request->seguimiento;
            $agendas->alias = $request->alias_clave;
            $agendas->nombre = $request->nombre;
            $agendas->apellido_p =$request->apellido_p;
            $agendas->apellido_m = $request->apellido_m;
            $agendas->telefono = $request->telefono;
            $agendas->edad = $request->edad;
            $agendas->fecha = $request->fecha;
            $agendas->hora = $request->hora;
            $agendas->publicidad = $request->publicidad;
            $agendas->contesto = $request->contesto;
            $agendas->empleado_id = 22;
            $agendas->save();
            Session::flash('mensaje',"La agenda $request->nombre
            ha sido modificado correctaemente");
            return redirect()->route('reporteagenda');
        }
    }
