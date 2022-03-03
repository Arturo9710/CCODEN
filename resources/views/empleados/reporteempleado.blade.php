@can('ver-socio')
@extends('layout.plantilla')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection

@section('content')
    <div class="container">
        <h1>Reporte Socios</h1>
        <br>
       @can('crear-socio')
         <a href="{{ route('empleados') }}">
            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-user-plus"
                    aria-hidden="true"></i> Nuevo Socio</button>
        </a>
        @endcan
        <br>
        <br>
        <div class="card shadow mb-1">
            <div class="card-header py-1">
                <h6 class="m-0 font-weight-bold text-primary">Reporte Socios</h6>
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
                                <th>Alias</th>
                                <th>Nombre</th>
                                <th>Primer Apellido</th>
                                <th>Telefono</th>
                                <th>Foto Empleado</th>
                                <th>Operaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($empleados as $empleado)
                                <tr>

                                    <td>{{ $empleado->id_empleado }}</td>
                                    <td>{{ $empleado->alias }}</td>
                                    <td>{{ $empleado->nombre }}</td>
                                    <td>{{ $empleado->apellido_p }}</td>

                                    <td>{{ $empleado->telefono }}</td>

                                    <td><img src="{{ asset('archivos/' . $empleado->foto) }}" height=50 width=50></td>
                                    <td style="display:block;">
                                    @can('editar-socio')
                                        <a href="{{ route('modificaempleado', ['id_empleado' => $empleado->id_empleado]) }}"
                                            class="btn btn-info">
                                            <i class="fas fa-user-edit"></i> Editar
                                        </a>
                                    @endcan  

                                    @can('eliminar-socio')
                                        <a href="{{ route('desactivarempleado', ['id_empleado' => $empleado->id_empleado]) }}">
                                            <button type="button" class="btn btn-danger" id="btnElimina"
                                                data-id="{{ $empleado->id_empleado }}"><i class="fas fa-user-times"></i>
                                                Eliminar</button>
                                        </a>
                                    @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @section('js')
                    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
                    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
                    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

                    <script>
                        $(document).ready(function() {
                            $('#dataTableEmpleados').DataTable({
                                responsive: true,
                                autoWidth: false,

                                "language": {
                                    "lengthMenu": "Mostrar _MENU_ registros por página",
                                    "zeroRecords": "Nada encontrado - disculpa",
                                    "info": "Mostrando la página _PAGE_ de _PAGES_",
                                    "infoEmpty": "No records available",
                                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                                    "search": "Buscar:",
                                    "paginate": {
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }

                                }
                            });
                        });
                    </script>
                    <script>
                        const btnEliminar = document.querySelector("#btnElimina");
                        btnEliminar.addEventListener("click", function(e) {
                            e.preventDefault();
                            let alertaELimina = confirm("Estas seguro que deseas Eliminarlo ");
                            var idDataElimina = $(this).attr('data-id');
                            console.log(idDataElimina)
                            let urlEliminar =
                                "{{ route('desactivarempleado', ['id_empleado' => 'temp']) }}";
                            urlELiminar2 = urlEliminar.replace('temp', idDataElimina);

                            if (alertaELimina) {
                                fetch(urlELiminar2).then(function(response) {
                                    window.location.href =
                                        "{{ route('reporteempleado') }}"
                                })
                            }

                        })
                    </script>
                @endsection
            </div>
        </div>
    </div>
</div>
@endsection
@endcan