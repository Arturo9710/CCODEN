<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAgenda extends Controller
{

    public function agenda(){
        return view('agenda');
    }
    public function guardaragenda(Request $request){
    
        $this->validate($request,[
            'id_agenda' => 'required|regex:/^[0-9]{5}$/',
            'seguimiento' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'alias_clave' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'nombre' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_p' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_m' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'telefono' => 'required|regex:/^[0-9]{10}$/',
            'dia' => 'required|date',
            'contesto' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            
        ]);
        echo "TODO CORRECTO";
    }
 
}