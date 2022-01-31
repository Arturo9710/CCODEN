@extends('layout.plantilla')
@section('content')

        <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">ENTREVISTA</h1>
                                <hr> 
                            </div>
                            <form action="{{route('guardarentrevista')}}" method ="POST" class="user">
                                         {{csrf_field()}}
                                <div class="form-group">
                                <label for="nombre">ID:
                                    @if($errors->first('id_entrevistas'))
                                    <p class = 'text-danger'>{{$errors->first('id_entrevistas')}}</p>
                                    @endif
                                </label>
                                    <input type="text" name="id_entrevistas" class="form-control form-control-user" id="id_entrevistas" 
                                       value="{{old('id_entrevistas')}}" placeholder="ID Entrevista">
                                </div>
                                <div class="form-group">
                                <label for="nombre">Nombre Agenda:
                                    @if($errors->first('nombre_agenda'))
                                    <p class = 'text-danger'>{{$errors->first('nombre_agenda')}}</p>
                                    @endif
                                </label>
                                    <input type="text" name="nombre_agenda" class="form-control form-control-user" id="nombre_agenda" 
                                       value="{{old('nombre_agenda')}}" placeholder="Nombre Agenda">
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
                                <label for="nombre">Citado:
                                    @if($errors->first('citado'))
                                    <p class = 'text-danger'>{{$errors->first('citado')}}</p>
                                    @endif
                                </label>
                                    <input type="text" name="citado" class="form-control form-control-user" id="citado"
                                    value="{{old('citado')}}"   placeholder="Citado">
                                </div>
                                <div class="form-group">
                                <label for="dni">Publicidad:</label>
                                <select name = 'publicidad' class="custom-select">
                                <option selected="">Seleccione Publicidad</option>
                                <option value="1">Facebook</option>
                                <option value="2">Cartel</option>
                                <option value="3">Propaganda</option>
                                </select>
                                </div>
                                <div class="form-group">
                                <label for="nombre">Hora:
                                    @if($errors->first('hora'))
                                    <p class = 'text-danger'>{{$errors->first('hora')}}</p>
                                    @endif
                                </label>
                                    <input type="time" name="hora" class="form-control form-control-user" id="hora"
                                    value="{{old('hora')}}"  placeholder="Hora">
                                </div>
                                <div>
                                <label for="dni">Oficina:</label>
                                <select name = 'publicidad' class="custom-select">
                                <option selected="">Seleccione Oficina</option>
                                <option value="1">103</option>
                                <option value="2">104</option>
                                <option value="3">105</option>
                                </select>
                                </div>
                                <div>
                                <label for="dni">Estatus:</label>
                                <select name = 'publicidad' class="custom-select">
                                <option selected="">Seleccione Estatus</option>
                                <option value="1">Aceptado</option>
                                <option value="2">Denegado</option>
                                </select>
                                </div>
                                <hr>
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