@extends('layout.plantilla')

@section('content')
    <div class="col-lg-7" style="margin: 0 auto;">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">NUEVO SOCIO</h1>
                <hr>
            </div>
            <form action="{{ route('guardarempleado') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">

                    <input type="text" name="id_empleado" class="form-control form-control-user" id="id_empleado"
                        value="{{ $idsigue }}" readonly='readonly' placeholder="ID Empleado" hidden="true">
                </div>
                <div class="form-group">
                    <label for="nombre">Alias:
                        @if ($errors->first('alias'))
                            <p class='text-danger'>{{ $errors->first('alias') }}</p>
                        @endif
                    </label>
                    <input type="text" name="alias" class="form-control form-control-user" id="alias"
                        value="{{ old('alias') }}" placeholder="Alias">
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre:
                        @if ($errors->first('nombre'))
                            <p class='text-danger'>{{ $errors->first('nombre') }}</p>
                        @endif
                    </label>
                    <input type="text" name="nombre" class="form-control form-control-user" id="nombre"
                        value="{{ old('nombre') }}" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="nombre">Primer Apellido:
                        @if ($errors->first('apellido_p'))
                            <p class='text-danger'>{{ $errors->first('apellido_p') }}</p>
                        @endif
                    </label>
                    <input type="text" name="apellido_p" class="form-control form-control-user" id="apellido_p"
                        value="{{ old('apellido_p') }}" placeholder="Primer Apellido">
                </div>
                <div class="form-group">
                    <label for="nombre">Segundo Apellido:
                        @if ($errors->first('apellido_m'))
                            <p class='text-danger'>{{ $errors->first('apellido_m') }}</p>
                        @endif
                    </label>
                    <input type="text" name="apellido_m" class="form-control form-control-user" id="apellido_m"
                        value="{{ old('apellido_m') }}" placeholder="Segundo Apellido">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:
                        @if ($errors->first('telefono'))
                            <p class='text-danger'>{{ $errors->first('telefono') }}</p>
                        @endif
                    </label>
                    <input type="number" name="telefono" class="form-control form-control-user" id="telefono"
                        value="{{ old('telefono') }}" placeholder="Teléfono">
                </div>
                <div class="form-group">
                    <label for="clave_socio">Codigo Socio:
                        @if ($errors->first('clave_socio'))
                            <p class='text-danger'>{{ $errors->first('clave_socio') }}</p>
                        @endif
                    </label>
<<<<<<< HEAD
                    <input type="number" name="clave_socio" class="form-control form-control-user" id="clave_socio"
=======
                    <input type="text" name="clave_socio" class="form-control form-control-user" id="clave_socio"
>>>>>>> 7fa44d1b65b7664f67089d0c78cc779adad99a46
                        value="{{ old('clave_socio') }}" placeholder="Codigo Socio">
                </div>
                <label for="dni">Género:</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="sexo1" name="genero" value="M" class="custom-control-input" check>
                    <label class="custom-control-label" for="sexo1">Masculino</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="sexo2" name="genero" value="F" class="custom-control-input">
                    <label class="custom-control-label" for="sexo2">Femenino</label>
                </div>
                <hr>
                <div class="form-group">
                    <label for="foto">Foto Perfil:</label>
                    @if ($errors->first('foto'))
                        <p class='text-danger'>{{ $errors->first('foto') }}</p>
                    @endif
                    <input type="file" name="foto" form-control-user id="foto" value="">
                </div>

                <div class="row">
                    <div class="col-xs-10 col-md-10"><input type="submit" value="Guardar"
                            class="btn btn-primary btn-user btn-block" title="Guardar datos ingresados"></div>

                </div>
        </div>
    </div>
@endsection
