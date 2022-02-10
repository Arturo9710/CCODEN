@extends('layout.plantilla')
@section('titulo', 'Productividad')
@section('content')

    <div class="col-lg-7" style="margin: 0 auto;">
        <div class="  p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Productividad</h1>
                <hr>
            </div>

            <form action="{{ route('guardarproductividad') }}" method="POST" class="user">
                {{ csrf_field() }}

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
                    <label for="contesto">Contesto:
                        @if ($errors->first('contesto'))
                            <p class='text-danger'>{{ $errors->first('contesto') }}</p>
                        @endif
                    </label>
                    <input type="text" name="contesto" class="form-control form-control-user" id="contesto"
                        value="{{ old('contesto') }}" placeholder="Contesto">
                </div>
                <div class="form-group">
                    <label for="llego">Llego:
                        @if ($errors->first('llego'))
                            <p class='text-danger'>{{ $errors->first('llego') }}</p>
                        @endif
                    </label>
                    <input type="text" name="llego" class="form-control form-control-user" id="llego"
                        value="{{ old('llego') }}" placeholder="Llego">
                </div>


                <div class="form-group">
                    <label for="porcentaje">Porcentaje:
                        @if ($errors->first('porcentaje'))
                            <p class='text-danger'>{{ $errors->first('porcentaje') }}</p>
                        @endif
                    </label>
                    <input type="text" name="porcentaje" class="form-control form-control-user" id="porcentaje"
                        value="{{ old('porcentaje') }}" placeholder="Porcentaje">
                </div>
                <div class="form-group">
                    <label for="efectividad">Efectividad:
                        @if ($errors->first('efectividad'))
                            <p class='text-danger'>{{ $errors->first('efectividad') }}</p>
                        @endif
                    </label>
                    <input type="text" name="efectividad" class="form-control form-control-user" id="efectividad"
                        value="{{ old('efectividad') }}" placeholder="Efectividad">
                </div>

                <div class="row">
                    <div class="col-xs-10 col-md-10"><input type="submit" value="Guardar"
                            class="btn btn-primary btn-user btn-block"></div>
                </div>
        </div>
    </div>




@endsection
