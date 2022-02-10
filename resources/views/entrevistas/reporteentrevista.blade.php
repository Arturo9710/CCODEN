@extends('layout.plantilla')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <h1>REPORTE ENTREVISTA</h1>
        <br>
        <a href="{{ route('entrevista') }}">
            <button type="button" class="btn btn-success">Alta Entrevista</button>
        </a>
        <br>
        <br>
        <div class="card shadow mb-1">
            <div class="card-header py-1">
                <h6 class="m-0 font-weight-bold text-primary">REPORTE ENTREVISTAS</h6>
            </div>
            @if (Session::has('mensaje'))
                <div class="alert alert-success">{{ Session::get('mensaje') }}</div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-striped shadow-lg mt-4" id="dataTableEmpleados" width="100%" cellspacing="0">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>#</th>
                                <th>Nombre Agenda</th>
                                <th>Edad</th>
                                <th>Citado</th>
                                <th>Publicidad</th>
                                <th>Hora</th>
                                <th>Oficina</th>
                                <th>Status</th>
                                <th>Operaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($entrevista as $entrevista)
                                <tr>
                                    <td>{{ $entrevista->id_entrevista }}</td>
                                    <td>{{ $entrevista->nombre_agenda }}</td>
                                    <td>{{ $entrevista->edad }}</td>
                                    <td>{{ $entrevista->citado }}</td>
                                    <td>{{ $entrevista->publicidad }}</td>
                                    <td>{{ $entrevista->hora }}</td>
                                    <td>{{ $entrevista->oficina }}</td>
                                    <td>{{ $entrevista->status }}</td>

                                    <td style="display:flex;">
                                    <a href="{{ route('modificaentrevista', ['id_entrevista' => $entrevista->id_entrevista]) }}">
                                    <button type="button" class="btn btn-info">editar</button>
                                        </a>
                                        @if($entrevista->deleted_at)
                                        <a href="{{ route('activarentrevista', ['id_entrevista' => $entrevista->id_entrevista]) }}">
                                        <button type="button" class="btn btn-warning">Activar</button>
                                        </a>  
                                        <a href="{{ route('borraentrevista', ['id_entrevista' => $entrevista->id_entrevista]) }}">
                                        <button type="button" class="btn btn-secondary">Borrar</button>
                                        </a>  
                                        @else
                                        <a href="{{ route('desactivaentrevista', ['id_entrevista' => $entrevista->id_entrevista]) }}">
                                        <button type="button" class="btn btn-danger">Desactiva</button>
                                        </a> 
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @section('js')
                    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

                    <script>
                        $(document).ready(function() {
                            $('#dataTableEmpleados').DataTable();
                        });
                    </script>
                @endsection
            </div>
        </div>
    </div>
</div>
@endsection
