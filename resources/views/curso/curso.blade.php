@extends('layout.plantilla')
@section('content')

<div class="col-lg-7" style="margin: 0 auto;">
        <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">CURSO</h1>
                                <hr> 
                            </div>
                            <form action="{{route('guardarcurso')}}" method ="POST" class="user">
                                         {{csrf_field()}}
                                 <div class="form-group">
                                <label for="nombre">ID Curso:
                                    @if($errors->first('id_curso'))
                                    <p class = 'text-danger'>{{$errors->first('id_curso')}}</p>
                                    @endif
                                </label>
                                    <input type="text" name="id_curso" class="form-control form-control-user" id="id_curso" 
                                       value="{{$idsigue}}"  readonly='readonly' placeholder="ID Curso">
                                </div>

                                <div class="form-group">
                                <label for="nombre">Nombre:
                                    @if($errors->first('nombre'))
                                    <p class = 'text-danger'>{{$errors->first('nombre')}}</p>
                                    @endif
                                </label>
                                    <input type="text" name="nombre" class="form-control form-control-user" id="nombre" 
                                       value="{{old('nombre')}}" placeholder="Nombre">
                                </div>

                                <div class="form-group">
                                <label for="nombre">Primer Apellido:
                                    @if($errors->first('apellido_p'))
                                    <p class = 'text-danger'>{{$errors->first('apellido_p')}}</p>
                                    @endif
                                </label>
                                    <input type="text" name="apellido_p" class="form-control form-control-user" id="apellido_p" 
                                       value="{{old('apellido_p')}}" placeholder="Primer Apellido">
                                </div>

                                <div class="form-group">
                                <label for="nombre">Segundo Apellido:
                                    @if($errors->first('apellido_m'))
                                    <p class = 'text-danger'>{{$errors->first('apellido_m')}}</p>
                                    @endif
                                </label>
                                    <input type="text" name="apellido_m" class="form-control form-control-user" id="apellido_m" 
                                       value="{{old('apellido_m')}}" placeholder="Segundo Apellido">
                                </div>

                                <div class="form-group">
                                <label for="nombre">Alias:
                                    @if($errors->first('alias'))
                                    <p class = 'text-danger'>{{$errors->first('alias')}}</p>
                                    @endif
                                </label>
                                    <input type="text" name="alias" class="form-control form-control-user" id="alias" 
                                       value="{{old('alias')}}" placeholder="Alias">
                                </div>

                                <div class="form-group">
                                <label for="nombre">Clave Agenda:
                                    @if($errors->first('clave_agenda'))
                                    <p class = 'text-danger'>{{$errors->first('clave_agenda')}}</p>
                                    @endif
                                </label>
                                    <input type="text" name="clave_agenda" class="form-control form-control-user" id="clave_agenda" 
                                       value="{{old('clave_agenda')}}" placeholder="Clave Agenda">
                                </div>
                                <div class="form-group">
                                <label for="nombre">Edad:
                                    @if($errors->first('edad'))
                                    <p class = 'text-danger'>{{$errors->first('edad')}}</p>
                                    @endif
                                </label>
                                    <input type="text" name="edad" class="form-control form-control-user" id="edad" 
                                       value="{{old('edad')}}" placeholder="Edad">
                                </div>
                                <div class="form-group">
                                <label for="nombre">Junta Información:
                                    @if($errors->first('junta_informacion'))
                                    <p class = 'text-danger'>{{$errors->first('junta_informacion')}}</p>
                                    @endif
                                </label>
                                    <input type="text" name="junta_informacion" class="form-control form-control-user" id="junta_informacion" 
                                       value="{{old('junta_informacion')}}" placeholder="Junta Inaformación">
                                </div>
                                <div>
                                <label for="despacho">Despacho:</label>
                                <select name = 'publicidad' class="custom-select">
                                <option selected="">Seleccione Despacho</option>
                                <option value="103">103</option>
                                <option value="104">104</option>
                                <option value="105">105</option>
                                </select>
                                </div>

                                <div class="form-group">
                                <label for="nombre">Teléfono:
                                    @if($errors->first('telefono'))
                                    <p class = 'text-danger'>{{$errors->first('telefono')}}</p>
                                    @endif
                                </label>
                                    <input type="text" name="telefono" class="form-control form-control-user" id="telefono" 
                                       value="{{old('telefono')}}" placeholder="Teléfono">
                                </div>
                                <div class="form-group">
                                <label for="nombre">Fecha:
                                    @if($errors->first('fecha'))
                                    <p class = 'text-danger'>{{$errors->first('fecha')}}</p>
                                    @endif
                                </label>
                                    <input type="date" name="fecha" class="form-control form-control-user" id="fecha"
                                    value="{{old('fecha')}}"   placeholder="Fecha">
                                </div>
                                <div class="form-group">
                                <label for="nombre">Campo Vacio:
                                    @if($errors->first('campo_vacio_f1'))
                                    <p class = 'text-danger'>{{$errors->first('campo_vacio_f1')}}</p>
                                    @endif
                                </label>
                                    <input type="text" name="campo_vacio_f1" class="form-control form-control-user" id="campo_vacio_f1"
                                    value="{{old('campo_vacio_f1')}}"   placeholder="Campo Vacio">
                                </div>
                                <div class="row">
                                <div class="col-xs-10 col-md-10"><input type="submit" value="Guardar" class="btn btn-primary btn-user btn-block"
                                   title="Guardar datos ingresados"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection