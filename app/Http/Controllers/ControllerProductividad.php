<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productividad;
use Session;

class ControllerProductividad extends Controller
{
    public function productividad(){
        return view('productividad.productividad');
    }
    
    public function guardarproductividad(Request $request){

        $this->validate($request,[
        'nombre' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
        'apellido_p' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
        'apellido_m' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
        'contesto' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
        'llego' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
        'porcentaje' => 'required',
        'efectividad' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',

        ]);
            $productividad = new Productividad;
            $productividad->id_productividad = $request->id_productividad;
            $productividad->nombre = $request->nombre;
            $productividad->apellido_p =$request->apellido_p;
            $productividad->apellido_m = $request->apellido_m;
            $productividad->contesto = $request->contesto;
            $productividad->llego = $request->llego;
            $productividad->porcentaje = $request->porcentaje;
            $productividad->efectividad =$request->efectividad;
            $productividad->entrevista_id = 1;
            $productividad->save();

            Session::flash('mensaje',"Creado Correctamente $request->nombre");
            return redirect()->route('reporteproductividad');
            }

        public function reporteproductividad(){
            $productividad = Productividad::withTrashed()->select(
                ['id_productividad',
                'nombre',
                'apellido_p',
                'apellido_m',
                'contesto',
                'llego',
                'porcentaje',
                'efectividad',
                'deleted_at'])
            // ->orderBy('productividad.apellido_p')
            ->get();

            return view ('productividad.reporteproductividad')->with('productividad',$productividad);
            }
        
        public function desactivarproductividad($id_productividad){
        $productividad = productividad::find($id_productividad);
        $productividad->delete();
        Session::flash('mensaje',"Desactivado correctaemente");
        return redirect()->route('reporteproductividad');

        }

        public function activarproductividad($id_productividad){
            
            $productividad = productividad::withTrashed()->where('id_productividad',$id_productividad)->restore();
            Session::flash('mensaje',"activado correctamente");
            return redirect()->route('reporteproductividad');

        }

}
