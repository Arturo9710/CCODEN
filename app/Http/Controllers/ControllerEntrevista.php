<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\entrevista;
use App\Models\agenda;
use DataTables;
use Session;

class ControllerEntrevista extends Controller
{

    public function buscador(Request $request){
        $entrevista = $request->get('entrevista');
        $querys = entrevista::where('nombre_agenda','LIKE','%'.$entrevista.'%')->get();

        $data =[];

        foreach($querys as $query){
            $data[] = [
                'label' =>$query->nombre_agenda
            ];
        }
        return $data;

        return $query;
    }

    public function entrevista(){

        $consulta = entrevista::orderBy('id_entrevista','DESC')
        ->take(1)->get();

              $cuantos = count($consulta);
              if($cuantos==0)
             {
              $idsigue = 1;
             }
             else {
             $idsigue = $consulta[0]->id_entrevista + 1;
             }
             return view ('entrevistas.entrevista')
             ->with('idsigue',$idsigue);

}
    public function guardarentrevista(Request $request){
    
        $this->validate($request,[
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

        Session::flash('mensaje',"La Entrevista
        ha sido dada de alta correctaemente");
        return redirect()->route('reporteentrevista');
       
    }

    public function reporteentrevista(){
        $entrevista = entrevista::withTrashed()->select(['id_entrevista','nombre_agenda','edad',
        'citado','publicidad','hora','oficina','status','deleted_at'])
        ->get();
        return view('entrevistas.reporteentrevista')->with('entrevista',$entrevista);
    }

    public function desactivaentrevista($id_entrevista){
        $entrevistas = entrevista::find($id_entrevista);
        $entrevistas->delete();
        Session::flash('mensaje',"La Entrevista
        ha sido desactivada correctamente");
        return redirect()->route('reporteentrevista');
    }

    public function activarentrevista($id_entrevista){
        $entrevistas = entrevista::withTrashed()->where('id_entrevista',$id_entrevista)->restore();
        Session::flash('mensaje',"La Entrevista
        ha sido activada correctamente");
        return redirect()->route('reporteentrevista');
    }

    public function borraentrevista($id_entrevista){
        $entrevistas = entrevista::withTrashed()->find($id_entrevista)->forceDelete();
        Session::flash('mensaje',"La Entrevista  
        ha sido borrada del sistema correctaemente");
        return redirect()->route('reporteentrevista');
    }

    public function modificaentrevista($id_entrevista){
        $entrevista = entrevista::withTrashed()->select('id_entrevista','nombre_agenda','edad',
        'citado','publicidad','hora','oficina','status')
        ->where('id_entrevista',$id_entrevista)
        ->get();
        return view ('entrevistas.modificaentrevista')
        ->with('entrevista',$entrevista[0]);

    }

    public function guardacambios_entrevista(Request $request){

        $this->validate($request,[
            'nombre_agenda' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'edad' => 'required|regex:/^[0-9]{2}$/',
            'citado' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,]+$/',
            'hora' => 'required',
            'publicidad' => 'required',
            'oficina' => 'required'
        ]);

        $entrevista = entrevista::find($request->id_entrevista);
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

        Session::flash('mensaje',"La Entrevista
        ha sido modificada correctaemente");
        return redirect()->route('reporteentrevista');
    }
}
