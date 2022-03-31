
<div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">{{ $modo}} socio </h1>
                <hr>
            </div>
<h1> </h1>
<div class="col-lg-7" style="margin: 0 auto;">
        <div class="  p-5">
    <div class="form-group">       
    <label for="Codigo">Codigo</label>
    <input type="text" name="Codigo"   value="{{ isset($socio->Codigo)?$socio->Codigo:'' }}" id="Codigo" class="form-control form-control-user"      >
    </div>
    <div class="form-group">  
    <label for="Cargo">Cargo</label>
    <input type="text" name="Cargo"  value="{{ isset($socio->Cargo)?$socio->Cargo:'' }}"  id="Cargo" class="form-control form-control-user">
    </div>
    <div class="form-group">      
    <label for="Horario">Horario</label>
    <input type="text" name="Horario"  value="{{ isset($socio->Horario)?$socio->Horario:'' }}" id="Horario" class="form-control form-control-user">
    </div>
    <div class="form-group"> 
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre"  value="{{ isset($socio->Nombre)?$socio->Nombre:'' }}"  id="Nombre" class="form-control form-control-user">
    </div>
    <label for="ApellidoPaterno">ApellidoPaterno</label>
    <input type="text" name="ApellidoPaterno"  value="{{ isset($socio->ApellidoPaterno)?$socio->ApellidoPaterno:'' }}" id="ApellidoPaterno" class="form-control form-control-user">
    <div class="form-group"> 
    <label for="ApellidoMaterno">ApellidoMaterno</label>
    <input type="text" name="ApellidoMaterno" value="{{ isset($socio->ApellidoMaterno)?$socio->ApellidoMaterno:'' }}" id="ApellidoMaterno" class="form-control form-control-user">
    </div>
    <div class="form-group"> 
    <label for="Clave">Clave</label>
    <input type="text" name="Clave" value="{{ isset($socio->Clave)?$socio->Clave:'' }}"  id="Clave"  class="form-control form-control-user">
    </div>
    
    <div class="form-group">
    <label for="Telefono">Telefono</label>
    <input type="text" name="Telefono"  value="{{ isset($socio->Telefono)?$socio->Clave:'' }}" id="Telefono" class="form-control form-control-user">
    </div>
    <div class="form-group">
    <label for="Genero">Genero</label>
    <input type="text" name="Genero"  value="{{ isset($socio->Genero)?$socio->Codigo:'' }}" id="Genero" class="form-control form-control-user">
    </div>
    <div class="form-group">
    <label for="Foto">Foto</label>
    @if(isset($socio->Foto))
     <img src="{{ asset('storage').'/'.$socio->Foto }}" width="100" alt="">
    @endif
    <input type="File" name="Foto"  value="" id="Foto" class="form-control form-control-user">
    </div>

    <div class="row">
    <div class="col-xs-10 col-md-10"><input type="submit" value="{{ $modo }} datos" class="btn btn-primary btn-user btn-block"> 
    <a href="{{ url('socio') }}">Regresar</a>
    </div>
    
    </div>

    