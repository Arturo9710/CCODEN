@extends('layout.plantilla')
@section('content')

        <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Productividad</h1>
                                <hr> 
                            </div>
                            <form action="{{route('guardarproductividad')}}" method ="POST" class="user">
                                         {{csrf_field()}}
                                <div class="form-group">
                                <label for="nombre">Alias:
                                    @if($errors->first('id_empleado'))
                                    <p class = 'text-danger'>{{$errors->first('id_empleado')}}</p>
                                    @endif
                                </label>
                                    <input type="text" name="id_empleado" class="form-control form-control-user" id="id_empleado" 
                                       value="{{old('id_empleado')}}" placeholder="Alias">
                                </div>
                                <div class="form-group">
                                <label for="nombre">Nombre:
                                    @if($errors->first('nombre'))
                                    <p class = 'text-danger'>{{$errors->first('nombre')}}</p>
                                    @endif
                                </label>
                                    <input type="text" name="nombre" class="form-control form-control-user" id="nombre"
                                    value="{{old('nombre')}}"   placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                <label for="nombre">Primer Apellido:
                                    @if($errors->first('apellido_p'))
                                    <p class = 'text-danger'>{{$errors->first('apellido_p')}}</p>
                                    @endif
                                </label>
                                    <input type="text" name="apellido_p" class="form-control form-control-user" id="apellido_p"
                                    value="{{old('apellido_p')}}"  placeholder="Primer Apellido">
                                </div>
                                <div class="form-group">
                                <label for="nombre">Segundo Apellido:
                                    @if($errors->first('apellido_m'))
                                    <p class = 'text-danger'>{{$errors->first('apellido_m')}}</p>
                                    @endif
                                </label>
                                    <input type="text" name="apellido_m" class="form-control form-control-user" id="apellido_m"
                                    value="{{old('apellido_m')}}"  placeholder="Segundo Apellido">
                                </div>
                                <div class="form-group">
                                <label for="nombre">Teléfono:
                                    @if($errors->first('telefono'))
                                    <p class = 'text-danger'>{{$errors->first('telefono')}}</p>
                                    @endif
                                </label>
                                    <input type="text" name="telefono" class="form-control form-control-user" id="telefono"
                                    value="{{old('telefono')}}"    placeholder="Teléfono">
                                </div>
                                <div class="form-group">
                                <label for="nombre">Fecha De Nacimiento:
                                    @if($errors->first('fecha_nacimeinto'))
                                    <p class = 'text-danger'>{{$errors->first('fecha_nacimeinto')}}</p>
                                    @endif
                                </label>
                                    <input type="date" name="fecha_nacimiento" class="form-control form-control-user" id="fecha_nacimeinto"
                                    value="{{old('fecha_nacimeinto')}}"   placeholder="Fecha De Nacimiento">
                                </div>
                                <label for="dni">Género:</label>
                                <div class="custom-control custom-radio">
                                <input type="radio" id="sexo1" name="genero"  value = "M" class="custom-control-input" checked="">
                                <label class="custom-control-label" for="sexo1">Masculino</label>
                                </div>
                                <div class="custom-control custom-radio">
                                <input type="radio" id="sexo2" name="genero" value = "F" class="custom-control-input">
                                <label class="custom-control-label" for="sexo2">Femenino</label>
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