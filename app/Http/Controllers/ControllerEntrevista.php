<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\entrevista;
use DataTables;
use Session;

class ControllerEntrevista extends Controller
{

    public function entrevista(){
        return view('entrevistas.entrevista');
    }
    public function guardarentrevista(Request $request){
    
        $this->validate($request,[
            'id_entrevista' => 'required|regex:/^[0-9]{3}$/',
            'nombre_agenda' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'edad' => 'required|regex:/^[0-9]{2}$/',
            'citado' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'hora' => 'required',
        ]);

        $entrevista = new entrevista;
        $entrevista->id_entrevista= $request->id_entrevista;
        $entrevista->nombre_agenda= $request->nombre_agenda;
        $entrevista->edad= $request->edad;
        $entrevista->citado= $request->citado;
        $entrevista->publicidad= $request->publicidad;
        $entrevista->hora= $request->hora;
        $entrevista->oficina= $request->oficina;
        $entrevista->status= $request->status;
        $entrevista->agenda_id= 1;
        $entrevista->save();

        Session::flash('mensaje',"La entrevista ha sido dado de alta correctaemente");
        return redirect()->route('reporteentrevista');
       
    }
}