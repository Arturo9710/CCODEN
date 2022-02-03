<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerEntrevista extends Controller
{

    public function entrevista(){
        return view('entrevistas.entrevista');
    }
    public function guardarentrevista(Request $request){
    
        $this->validate($request,[
            'id_entrevistas' => 'required|regex:/^[0-9]{3}$/',
            'nombre_agenda' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'edad' => 'required|regex:/^[0-9]{2}$/',
            'citado' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
        ]);
        echo "TODO CORRECTO";
    }
 
}