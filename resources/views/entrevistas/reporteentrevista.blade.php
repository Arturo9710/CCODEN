@can('ver-entrevista')
    @extends('layout.plantilla')
    @section('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
    @endsection
    @section('content')
        <div class="container">
            <h1>REPORTE ENTREVISTA</h1>
            <br>
            @can('crear-entrevista')
                <a href="{{ route('entrevista') }}">
                    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                            class="fa fa-address-book" aria-hidden="true"></i> Crea nueva Entrevista</button>
                </a>
            @endcan
            <!-----------------------------------Inicio
                                                                                                    Modal------------------------------------------------------------>

            <!-- Trigger/Open The Modal -->




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
                        <table class="table  table-striped shadow-lg mt-4" id="dataTableEntrevistas" width="100%"
                            cellspacing="0">
                            <thead class="bg-success text-white">
                                <tr>
                                    <th>#</th>
                                    <th>Nombre Agenda</th>
                                   
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
                                       
                                        <td>{{ $entrevista->citado }}</td>
                                        <td>{{ $entrevista->publicidad }}</td>
                                        <td>{{ $entrevista->hora }}</td>
                                        <td>{{ $entrevista->oficina }}</td>
                                        <td>{{ $entrevista->status }}</td>

                                        <td style="display:flex;">
                                            @can('editar-entrevista')
                                                <a
                                                    href="{{ route('modificaentrevista', ['id_entrevista' => $entrevista->id_entrevista]) }}">
                                                    <button type="button" class="btn btn-info">Editar</button>
                                                </a>
                                            @endcan
                                            
                                              
                                                @can('eliminar-entrevista')
                                                 <a
                                                    href="{{ route('desactivaentrevista', ['id_entrevista' => $entrevista->id_entrevista]) }}">
                                                    <button type="button" class="btn btn-danger" id="btnElimina"  data-id="{{ $entrevista->id_entrevista }}"><i class="fas fa-user-times"></i>ELIMINAR</button>
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
                                $('#dataTableEntrevistas').DataTable({
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
