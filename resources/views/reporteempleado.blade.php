@extends('layout.plantilla')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
       <center> <h1>REPORTE EMPLEADOS</h1></center>
        <br>
        <a href="{{ route('empleados') }}">
            <button type="button" class="btn btn-success">Alta Empleado</button>
        </a>
        <br>
        <br>
        <div class="card shadow mb-1">
            <div class="card-header py-1">
                <h6 class="m-0 font-weight-bold text-primary">REPORTE EMPLEADOS</h6>
            </div>
            @if(Session::has('mensaje'))
            <div class="alert alert-success">{{Session::get('mensaje')}}</div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-striped shadow-lg mt-4" id="dataTableEmpleados" width="100%" cellspacing="0">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>#</th>
                                <th>Alias</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Telefono</th>
                                <th>Genero</th>
                                <th>Foto Empleado</th>
                                <th>Operaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($empleados as $empleado)
                                <tr>
                                {{-- {{ dd($empleado) }} --}}
                                <td>{{ $empleado->id_empleado }}</td>
                                <td>{{ $empleado->alias }}</td>
                                <td>{{ $empleado->nombre }}</td>
                                <td>{{ $empleado->apellido_p }}</td>
                                <td>{{ $empleado->apellido_m }}</td>
                                <td>{{ $empleado->telefono }}</td>
                                <td>{{ $empleado->genero }}</td>
                                <td><img src = "{{asset('archivos/'. $empleado->foto)}}" height=50 width=50></td>
                                <td style="display:flex;">
                                 <a href="{{ route('modificaempleado',['id_empleado' => $empleado->id_empleado]) }}" class="btn btn-info">Editar
                                 </a>
                                @if ($empleado->deleted_at)
                                <a href="{{ route('activarempleado', ['id_empleado' => $empleado->id_empleado]) }}">
                                    <button type="button" class="btn btn-warning">Activar</button>
                                </a>
                                <a href="{{ route('borraempleado', ['id_empleado' => $empleado->id_empleado]) }}">
                                    <button type="button" class="btn btn-secondary">Borrar</button>
                                </a>
                                @else
                                <a href="{{ route('desactivarempleado', ['id_empleado' => $empleado->id_empleado]) }}">
                                    <button type="button" class="btn btn-danger">Desactivar</button>
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
