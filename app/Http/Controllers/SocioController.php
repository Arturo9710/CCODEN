<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use Illuminate\Http\Request;

use  Illuminate\Support\Facades\Storage;

class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos['socios']=Socio::paginate(5);
        return view('socio.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
            return view('socio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $datosSocio = request()->except('_token');

        if($request->hasFile('Foto')){
            $datosSocio['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Socio::insert($datosSocio);

        //return response()->json($datosSocio);
        return redirect('socio')->with('mensaje','Socio agrefado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Socio  $socio
     * @return \Illuminate\Http\Response
     */
    public function show()
    {       
        $datos['socios']=Socio::paginate(5);
        return view('socio.show ', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Socio  $socio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $socio=Socio::findOrFail($id);
        return view('socio.edit', compact('socio') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Socio  $socio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $datosSocio = request()->except(['_token','_method']);
     
      if($request->hasFile('Foto')){
            $socio=Socio::FindOrFail($id);
            Storage::delete('public/'.$socio->Foto);
            $datosSocio['Foto']=$request->file('Foto')->store('uploads','public');
        }
     
     
       Socio::where('id','=',$id)->update($datosSocio);
       $socio=Socio::FindOrFail($id);
       return view('socio.edit', compact('socio'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Socio  $socio
     * @return \Illuminate\Http\Response
     */

    
    public function destroy($id)
    {
        
      Socio::destroy($id);
      return redirect('socio');
    }
}
