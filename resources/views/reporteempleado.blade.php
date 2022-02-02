@extends('layout.plantilla')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <h1>REPORTE EMPLEADOS</h1>
        <br>
        <a href="{{ route('empleados') }}">
            <button type="button" class="btn btn-success">Alta Empleado</button>
        </a>
        <br>
        <br>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
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
                                <th>Foto</th>
                                <th>Operaciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Alias</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Telefono</th>
                                <th>Genero</th>
                                <th>Foto</th>
                                <th>Operaciones</th>
                            </tr>
                        </tfoot>
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
                                    <td>{{ $empleado->foto }}</td>
                                    <td style="display:flex;">
                                        <a href="#" class="btn btn-info" style="margin-right: 10px;">Editar</a>


                                        @if ($empleado->deleted_at)
                                            <a
                                                href="{{ route('desactivarempleado', ['id_empleado' => $empleado->id_empleado]) }}">
                                                <button type="button" class="btn btn-warning">Activar</button>
                                            </a>
                                        @else
                                            <a
                                                href="{{ route('desactivarempleado', ['id_empleado' => $empleado->id_empleado]) }}">
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

    {{-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="table-dark">
                <tr>
                    <td>ID</td>
                    <td>Foto</td>
                    <td>Alias</td>
                    <td>Nombre</td>
                    <td>Primer Apellido</td>
                    <td>teléfono</td>
                    <td>Género</td>
                    <td>Operaciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta as $c)
                    <tr>
                        <th scope="row">{{ $c->id_empleado }}</th>
                        <td>{{ $c->foto }}</td>
                        <td>{{ $c->alias }}</td>
                        <td>{{ $c->nombre }}</td>
                        <td>{{ $c->apellido_p }}</td>
                        <td>{{ $c->telefono }}</td>
                        <td>{{ $c->genero }}</td>
                        <td>
                            <button type="button" class="btn btn-primary">Modificar</button>

                            @if ($c->deleted_at)
                                <a href="{{ route('desactivarempleado', ['id_empleado' => $c->id_empleado]) }}">
                                    <button type="button" class="btn btn-warning">Activar</button>
                                </a>
                            @else
                                <a href="{{ route('desactivarempleado', ['id_empleado' => $c->id_empleado]) }}">
                                    <button type="button" class="btn btn-danger">Desactivar</button>
                                </a>
                            @endif

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> --}}
</div>
@endsection
