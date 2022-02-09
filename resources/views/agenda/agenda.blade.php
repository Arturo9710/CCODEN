@extends('layout.plantilla')
@section('titulo', 'Agenda')
@section('content')

    <div class="col-lg-7"
        style="
                                                                                                                                margin: 0 auto;">
        <div class="  p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">AGENDA</h1>
                <hr>
            </div>

            <form action="{{ route('guardaragenda') }}" method="POST" class="user">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="seguimiento">Seguimiento:
                        @if ($errors->first('seguimiento'))
                            <p class='text-danger'>{{ $errors->first('seguimiento') }}</p>
                        @endif
                    </label>
                    <input type="text" name="seguimiento" class="form-control form-control-user" id="seguimiento"
                        value="{{ old('seguimiento') }}" placeholder="Seguimiento">
                </div>
                <div class="form-group">
                    <label for="alias_clave">Alias:
                        @if ($errors->first('alias_clave'))
                            <p class='text-danger'>{{ $errors->first('alias_clave') }}</p>
                        @endif
                    </label>
                    <input type="text" name="alias_clave" class="form-control form-control-user" id="alias_clave"
                        value="{{ old('alias_clave') }}" placeholder="Alias">
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
                    <label for="apellido_p">Primer Apellido:
                        @if ($errors->first('apellido_p'))
                            <p class='text-danger'>{{ $errors->first('apellido_p') }}</p>
                        @endif
                    </label>
                    <input type="text" name="apellido_p" class="form-control form-control-user" id="apellido_p"
                        value="{{ old('apellido_p') }}" placeholder="Primer Apellido">
                </div>
                <div class="form-group">
                    <label for="apellido_m">Segundo Apellido:
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
                    <input type="text" name="telefono" class="form-control form-control-user" id="telefono"
                        value="{{ old('telefono') }}" placeholder="Teléfono">
                </div>
                <div class="form-group">
                    <label for="hora">Hora:
                        @if ($errors->first('hora'))
                            <p class='text-danger'>{{ $errors->first('hora') }}</p>
                        @endif
                    </label>
                    <input type="time" name="hora" class="form-control form-control-user" id="hora"
                        value="{{ old('hora') }}">
                </div>

                <div class="form-group">
                    <label for="publicidad">Publicidad:
                        @if ($errors->first('publicidad'))
                            <p class='text-danger'>{{ $errors->first('publicidad') }}</p>
                        @endif
                    </label>
                    <select name='publicidad' class="custom-select">
                        <option>Seleccione Publicidad</option>
                        <option value="facebook">Facebook</option>
                        <option value="cartel">Cartel</option>
                        <option value="propaganda">Propaganda</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nombre">Contesto:
                        @if ($errors->first('contesto'))
                            <p class='text-danger'>{{ $errors->first('contesto') }}</p>
                        @endif
                    </label>
                    <input type="text" name="contesto" class="form-control form-control-user" id="contesto"
                        value="{{ old('contesto') }}" placeholder="Contesto">
                </div>

                <div class="row">
                    <div class="col-xs-10 col-md-10"><input type="submit" value="Guardar"
                            class="btn btn-primary btn-user btn-block"></div>
                </div>
        </div>
    </div>




@endsection
