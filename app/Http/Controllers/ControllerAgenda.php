<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agenda;


class ControllerAgenda extends Controller
{

    public function agenda(){
        return view('agenda.agenda');
    }
    public function guardaragenda(Request $request){
    
        $this->validate($request,[
            'seguimiento' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'alias_clave' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'nombre' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_p' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_m' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'telefono' => 'required|regex:/^[0-9]{10}$/',
            'hora' => 'required',
            'fecha' => 'required|date',
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
        $agenda->hora         = $request->hora;
        $agenda->publicidad   = $request->publicidad;
        $agenda->contesto     = $request->contesto;
        $agenda->empleado_id  = 2;

        $agenda->save();
        return redirect()->route('reporteagenda');
        
    }

    public function reporteagenda(){
    $agenda = agenda::withTrashed()->select(['id_agenda','seguimiento','alias','nombre','deleted_at'])
    ->orderBy('agendas.nombre')
    ->get();

    return view ('agenda.reporteagenda')->with('agenda',$agenda);
    }
 
}
