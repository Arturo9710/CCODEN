@can('ver-socio')
@extends('layout.plantilla')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection
@section('titulo', 'Listado de Socios')
@section('content')

    <div class="container">
        <h1>Listado de Socios</h1>
        <br>
        @can('crear-socio')
        <a href="{{ url('socio/create') }}">

            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                    class="fa fa-user" aria-hidden="true"></i> Nuevo Socio</button>
        </a>
        @endcan
        <br>
        <br>
        <div class="card shadow mb-1">
            <div class="card-header py-1">
                <h6 class="m-0 font-weight-bold text-primary">Datos de socios</h6>
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-striped shadow-lg mt-4" id="dataTableAgenda" width="100%" cellspacing="0">
                        <thead class="bg-success text-white">
                            <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nombre</th>
                            <th>Codigo</th>
                            <th>Operaciones</th>
                            </tr>
                        </thead>

                    <tbody>
                          @foreach( $socios as $socio)
                           <tr>
                           <td>{{ $socio->id}} </td>
                            <td>
                            <img src="{{ asset('storage').'/'.$socio->Foto }}"  width="100" alt="">
                            </td>
                            <td>
                            <a href="{{ url('/socio/'.$socio->id) }}">{{ $socio->Nombre}}</a> </td>
                            <td>{{ $socio->Codigo}} </td>
                            <td style="display:block;">
                            <a href="{{ url('/socio/'.$socio->id.'/edit')}}" class="btn btn-info">
                            <i class="fas fa-edit"></i>Editar  
                            </a>
                             <form action="{{ url('/socio/'.$socio->id) }}" method="post">
                            @csrf
                             {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger" onclick="return confirm('Quieres borrar?')" 
                            value="Borrar">
                            </form>
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