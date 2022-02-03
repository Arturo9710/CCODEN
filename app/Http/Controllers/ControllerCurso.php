<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCurso extends Controller
{
    public function curso(){
        return view('curso.curso');
    }
    public function guardacurso(Request $request){
    
        $this->validate($request,[
            'id_curso' => 'required|regex:/^[0-9]{5}$/',
            'nombre' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_p' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'apellido_m' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'alias' => 'required|regex:/^[0-9]{5}$/',
            'clave_agenda' => 'required|regex:/^[0-9]{2}$/',
            'id_agenda' => 'required|regex:/^[0-9]{2}$/',
            'edad' => 'required|regex:/^[0-9]{2}$/',
            'junta_informacion' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'telefono' => 'required|regex:/^[0-9]{10}$/',
            'campo_vacio_f1' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
           
        ]);
        echo "TODO CORRECTO";
    }
}