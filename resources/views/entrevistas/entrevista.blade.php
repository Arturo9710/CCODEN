@extends('layout.plantilla')
@section('content')

    <div class="col-lg-7" style="
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
                        value="{{ old('nombre_agenda') }}" placeholder="Nombre Agenda">
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
                    <select name='publicidad' class="custom-select">
                        <option selected="">Selecciona un Publicidad</option>
                        <option>Facebook</option>
                        <option>Cartel</option>
                        <option">Propaganda</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hora">Hora:
                        @if ($errors->first('hora'))
                            <p class='text-danger'>{{ $errors->first('hora') }}</p>
                        @endif
                    </label>
                    <input type="datetime-local" name="hora" class="form-control form-control-user" id="hora"
                        value="{{ old('hora') }}" placeholder="Hora">
                </div>
                <div class="form-group">
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

                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-10 col-md-10"><input type="submit" value="Guardar"
                            class="btn btn-primary btn-user btn-block" title="Guardar datos ingresados"></div>
                </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
