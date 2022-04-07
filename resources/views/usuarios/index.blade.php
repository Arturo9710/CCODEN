@extends('layout.plantilla')

@section('content')
    <section class="container">
    <h1>Usuarios</h1>
    <br>
   
    <a href="{{ route('usuarios.create') }}"> <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                    class="fa fa-users" aria-hidden="true"></i> Nuevo </button>
    </a>
    <br>
    <br>

    <div class="card shadow mb-1">
            <div class="card-header py-1">
                <h6 class="m-0 font-weight-bold text-primary">Usuarios</h6>
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-striped shadow-lg mt-4" id="dataTableAgenda" width="100%" cellspacing="0">
                        <thead class="bg-success text-white">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">E-mail</th>
                                    <th style="color:#fff;">Rol</th>
                                    <th style="color:#fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td style="display: none;">{{ $usuario->id }}</td>
                                            <td>{{ $usuario->name }}</td>
                                            <td>{{ $usuario->email }}</td>
                                            <td>
                                                @if (!empty($usuario->getRoleNames()))
                                                    @foreach ($usuario->getRoleNames() as $rolNombre)
                                                        <h5><span class="badge badge-dark">{{ $rolNombre }}</span></h5>
                                                    @endforeach
                                                @endif
                                            </td>

                                            <td>
                                                <a class="btn btn-info"
                                                    href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>

                                                {!! Form::open(['method' => 'DELETE', 'route' => ['usuarios.destroy', $usuario->id], 'style' => 'display:inline']) !!}
                                                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
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

                   
    </section>
@endsection
