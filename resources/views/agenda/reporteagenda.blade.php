@can('ver-agenda')
    @extends('layout.plantilla')
    @section('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
    @endsection
    @section('titulo', 'Agenda Reportes')
@section('content')
    <div class="container">
        <h1>Reporte Telefonia</h1>
        <br>
        @can('crear-agenda')
            <a href="{{ route('agenda') }}">

                <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                        class="fa fa-phone-square" aria-hidden="true"></i> Crea nueva Telefonia</button>
            </a>
        @endcan
        <br>
        <br>
        <div class="card shadow mb-1">
            <div class="card-header py-1">
                <h6 class="m-0 font-weight-bold text-primary">Telefonia Datos</h6>
            </div>
            @if (Session::has('mensaje'))
                <div class="alert alert-success">{{ Session::get('mensaje') }}</div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-striped shadow-lg mt-4" id="dataTableAgenda" width="100%" cellspacing="0">
                        <thead class="bg-success text-white">
                            <tr>
                                <th>#</th>
                                <th>Seguimiento</th>
                                <th>Alias</th>
                                <th>Nombre</th>
                                <th>Hora</th>
                                <th>Publicidad</th>
                                <th>Operaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($agenda as $a)
                                <tr>
                                    <td>{{ $a->id_agenda }}</td>
                                    <td>{{ $a->seguimiento }}</td>
                                    <td>{{ $a->alias }}</td>
                                    <td>{{ $a->nombre }}</td>
                                    <td>{{ $a->hora }}</td>
                                    <td>{{ $a->publicidad }}</td>


                                    <td style="display:block;">
                                        @can('editar-agenda')
                                            <a href="{{ route('modificaagenda', ['id_agenda' => $a->id_agenda]) }}"
                                                class="btn btn-info"><i class="fas fa-edit"></i> Editar
                                            </a>
                                        @endcan
                                        @can('eliminar-agenda')
                                            <a href="{{ route('desactivaagenda', ['id_agenda' => $a->id_agenda]) }}">
                                                <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i>
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
                            $('#dataTableAgenda').DataTable({
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
                @endsection
            </div>
        </div>
    </div>
</div>
@endsection
@endcan
