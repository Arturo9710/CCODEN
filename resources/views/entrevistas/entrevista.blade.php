@extends('layout.plantilla')
@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.min.css') }}">
@endsection
@section('titulo', 'Entrevistas')
@section('content')

    <div class="col-lg-7"
        style="
                                                                                                            margin: 0 auto;">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">ENTREVISTA</h1>
                <hr>
            </div>
            <form action="{{ route('guardarentrevista') }}" method="POST" class="user">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nombre">ID Entrevista:
                        @if ($errors->first('id_entrevista'))
                            <p class='text-danger'>{{ $errors->first('id_entrevista') }}</p>
                        @endif
                    </label>
                    <input type="text" name="id_entrevista" class="form-control form-control-user" id="id_entrevista"
                        value="{{ $idsigue }}" readonly='readonly' placeholder="ID">
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre Agenda:
                        @if ($errors->first('nombre_agenda'))
                            <p class='text-danger'>{{ $errors->first('nombre_agenda') }}</p>
                        @endif
                    </label>
                    <input type="text" name="nombre_agenda" class="form-control form-control-user" id="nombre_agenda"
                        value="{{ old('nombre_agenda') }}" placeholder="Nombre Agenda" onkeyup="autocompletar()">
                        <dl id="lista"></dl>
                </div>
                <div class="form-group">
                    <label for="nombre">Edad:
                        @if ($errors->first('edad'))
                            <p class='text-danger'>{{ $errors->first('edad') }}</p>
                        @endif
                    </label>
                    <input type="text" name="edad" class="form-control form-control-user" id="edad"
                        value="{{ old('edad') }}" placeholder="Edad">
                </div>
                <div class="form-group">
                    <label for="nombre">Citado Por:
                        @if ($errors->first('citado'))
                            <p class='text-danger'>{{ $errors->first('citado') }}</p>
                        @endif
                    </label>
                    <input type="text" name="citado" class="form-control form-control-user" id="citado"
                        value="{{ old('citado') }}" placeholder="Citado Por">
                </div>
                <div class="form-group">
                    <label for="publicidad">Publicidad:</label>
                    @if ($errors->first('publicidad'))
                            <p class='text-danger'>{{ $errors->first('publicidad') }}</p>
                    @endif
                    <input type="text" name="publicidad" class="form-control form-control-user" id="publicidad"
                        value="{{ old('publicidad') }}" placeholder="Publicidad">

                </div>
                <div class="form-group">
                    <label for="hora">Hora:
                        @if ($errors->first('hora'))
                            <p class='text-danger'>{{ $errors->first('hora') }}</p>
                        @endif
                    </label>
                    <input type="datetime" name="hora" class="form-control form-control-user" id="hora"
                        value="{{ old('hora') }}" placeholder="Hora">
                </div>
              <!--  <div class="form-group">
                    <label for="oficina">Oficina:</label>
                    <select name='oficina' class="custom-select">
                        <option selected="">Seleccione Oficina</option>
                        <option>101</option>
                        <option>102</option>
                        <option>103</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <label for="dni">Status:</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="status1" name="status" value="A" class="custom-control-input">
                            <label class="custom-control-label" for="status1">Aceptado</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="status2" name="status" value="R" class="custom-control-input">
                            <label class="custom-control-label" for="status2">Rechazado</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="status2" name="status" value="R" class="custom-control-input">
                            <label class="custom-control-label" for="status2">Reprogramado</label>
                        </div>

                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <label for="dni">Turno:</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="status1" name="status" value="Matutino" class="custom-control-input">
                            <label class="custom-control-label" for="status1">Matutino</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="status2" name="status" value="R" class="custom-control-input">
                            <label class="custom-control-label" for="status2">Vespertino</label>
                        </div>


                    </div>

                </div>-->
                <hr>
                <div class="row">
                    <div class="col-xs-10 col-md-10"><input type="submit" value="Guardar"
                            class="btn btn-primary btn-user btn-block" title="Guardar datos ingresados"></div>
                </div>
        </div>
    </div>
@section('js')
    <script src="{{ asset('vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <link href="{{ asset('css/estilosAutocompleta.css') }}" rel="stylesheet" type="text/css">
    <script>
        $('#nombre_agenda').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ route('buscador') }}",
                    dataType: 'json',
                    data: {
                        agenda: request.agenda
                    },
                    success: function(response) {
                        // response($.map(data, function (item,element) {
                        //     console.log(element.attr("id"))
                        //     $(this).css("color","red")
                        //     console.log()
                        //     return item.nombre
                        // }));
                        
                    },

                })
            },
            select: function (event, ui) {
                // alert(ui.item.attr("id"));
                // alert(ui.item.label);
                // alert(ui.item.alias);
            },


        })



          
        function autocompletar(){
            var query = $("#nombre_agenda").val(); //Valor de la caja de texto 
            if(query != '')  
            {  
                $.ajax({  
                    url:"js/search.php",  //Busqueda en la base de datos y creacion de lista
                    method:"POST",  
                    data:{query:query},  
                    success:function(data)  
                    {  
                        $('#lista').fadeIn().css("opacity","1").removeAttr("hidden");  //Muestra la lista
                        $('#lista').html(data);  //Coloca datos de la base
                        $('#lista dl dt').each(function(index, item){
                            id=$(item).attr('data-id');
                            nombre=$(item).attr('data-nom');
                            edad=$(item).attr('data-edad');
                            alias=$(item).attr('data-alias');
                            publi=$(item).attr('data-publi');
                            hora=$(item).attr('data-hora');
                            $(item).attr("onclick","seleccion('"+id+"','"+nombre+"','"+edad+"','"+alias+"','"+publi+"','"+hora+"')");
                        });
                    }  
                });  
            } 
        }
        function seleccion(idE,nombreE,edadE,aliasE,publiE,horaE){
            $(".ulCLass").hide();
            $("#nombre_agenda").val(nombreE);
            $("#edad").val(edadE);
            $("#citado").val(aliasE);
            $("#publicidad").val(publiE);
            $("#hora").val(horaE);
        }
    </script>
@endsection
@endsection
