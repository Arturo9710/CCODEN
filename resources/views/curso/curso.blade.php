@extends('layout.plantilla')
@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.min.css') }}">
@endsection
@section('titulo', 'Curso')
@section('content')

    <div class="col-lg-7" style="margin: 0 auto;">
        <div class="  p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">CURSO</h1>
                <hr>
            </div>

            <form action="{{ route('guardaragenda') }}" method="POST" class="user">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="clave_agenda">Clave Agenda:
                        @if ($errors->first('clave_agenda'))
                            <p class='text-danger'>{{ $errors->first('clave_agenda') }}</p>
                        @endif
                    </label>
                    <input type="text" name="nombre_agenda" class="form-control form-control-user" id="nombre_agenda"
                        placeholder="Clave Agenda" onkeyup="autocompletar()">
                    <dl id="lista"></dl>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre:
                        @if ($errors->first('nombre'))
                            <p class='text-danger'>{{ $errors->first('nombre') }}</p>
                        @endif
                    </label>
                    <input type="text" name="nombre" class="form-control form-control-user" id="nombre_agenda"
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
                {{-- <div class="form-group">
                    <label for="alias">Alias:
                        @if ($errors->first('alias'))
                            <p class='text-danger'>{{ $errors->first('alias') }}</p>
                        @endif
                    </label>
                    <input type="text" name="alias" class="form-control form-control-user" id="alias"
                        value="{{ old('alias') }}" placeholder="Alias">
                </div> --}}


                <div class="form-group">
                    <label for="edad">Edad:
                        @if ($errors->first('edad'))
                            <p class='text-danger'>{{ $errors->first('edad') }}</p>
                        @endif
                    </label>
                    <input type="text" name="edad" class="form-control form-control-user" id="edad"
                        value="{{ old('edad') }}" placeholder="Edad">
                </div>
                <div class="form-group">
                    <label for="junta_informacion">Junta Informacion:
                        @if ($errors->first('junta_informacion'))
                            <p class='text-danger'>{{ $errors->first('junta_informacion') }}</p>
                        @endif
                    </label>
                    <input type="text" name="junta_informacion" class="form-control form-control-user"
                        id="junta_informacion" placeholder="Junta Informacion" value="{{ old('junta_informacion') }}">
                </div>
                <div class="form-group">
                    <label for="despacho">Despacho:
                        @if ($errors->first('despacho'))
                            <p class='text-danger'>{{ $errors->first('despacho') }}</p>
                        @endif
                    </label>
                    <input type="text" name="despacho" class="form-control form-control-user" id="despacho"
                        placeholder="Despacho" value="{{ old('despacho') }}">
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
                    <label for="fecha">Fecha:
                        @if ($errors->first('fecha'))
                            <p class='text-danger'>{{ $errors->first('fecha') }}</p>
                        @endif
                    </label>
                    <input type="date" name="fecha" class="form-control form-control-user" id="fecha"
                        value="{{ old('fecha') }}">
                </div>




                <div class="row">
                    <div class="col-xs-10 col-md-10"><input type="submit" value="Guardar"
                            class="btn btn-primary btn-user btn-block"></div>
                </div>
        </div>
    </div>

@section('js')
    <script src="{{ asset('vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <link href="{{ asset('css/estilosAutocompleta.css') }}" rel="stylesheet" type="text/css">
    <script>
        function autocompletar() {
            var query = $("#nombre_agenda").val(); //Valor de la caja de texto 
            if (query != '') {

                $.ajax({
                    url: "js/search.php", //Busqueda en la base de datos y creacion de lista
                    method: "POST",
                    data: {
                        query: query
                    },
                    success: function(data) {

                        $('#lista').fadeIn().css("opacity", "1").removeAttr("hidden"); //Muestra la lista
                        $('#lista').html(data); //Coloca datos de la base
                        $('#lista dl dt').each(function(index, item) {
                            id = $(item).attr('data-id');
                            nombre = $(item).attr('data-nom');
                            edad = $(item).attr('data-edad');
                            alias = $(item).attr('data-alias');
                            publi = $(item).attr('data-publi');
                            hora = $(item).attr('data-hora');
                            $(item).attr("onclick", "seleccion('" + id + "','" + nombre + "','" + edad +
                                "','" + alias + "','" + publi + "','" + hora + "')");
                        });
                    }
                });
            }
        }

        function seleccion(idE, nombreE, edadE, aliasE, publiE, horaE) {
            $(".ulCLass").hide();
            $(".id_agenda").val(idE);
            $("#nombre_agenda").val(nombreE);
            $("#edad").val(edadE);
            $("#citado").val(aliasE);
            $("#publicidad").val(publiE);
            $("#hora").val(horaE);
        }
    </script>
@endsection
@endsection
