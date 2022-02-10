@extends('layout.plantilla')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection
@section('titulo', 'Reportes Productividad')
@section('content')
    <div class="container">
        <h1>Reporte Productividad</h1>
        <br>
        <a href="{{ route('productividad') }}">
            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus"></i> Productividad Nueva</button>
        </a>
        <br>
        <br>
        <div class="card shadow mb-1">
            <div class="card-header py-1">
                <h6 class="m-0 font-weight-bold text-primary">Agenda Datos</h6>
            </div>
            @if (Session::has('mensaje'))
                <div class="alert alert-success">{{ Session::get('mensaje') }}</div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-striped shadow-lg mt-4" id="dataTableAgenda" width="100%" cellspacing="0">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Contesto</th>
                                <th>Llego</th>
                                <th>Porcentaje </th>
                                <th>Efectividad </th>
                                <th>Operaciones </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productividad as $pro)
                                <tr>

                                    <td>{{ $pro->id_productividad }}</td>
                                    <td>{{ $pro->nombre }}</td>
                                    <td>{{ $pro->apellido_p }}</td>
                                    <td>{{ $pro->apellido_m }}</td>
                                    <td>{{ $pro->contesto }}</td>
                                    <td>{{ $pro->llego }}</td>
                                    <td>{{ $pro->porcentaje }}</td>
                                    <td>{{ $pro->efectividad }}</td>
                                    <td>
                                        <a href="{{ route('modificaagenda', ['id_agenda' => $pro->id_productividad]) }}"
                                            class="btn btn-info">Editar
                                        </a>
                                        @if ($pro->deleted_at)
                                            <a
                                                href="{{ route('activarproductividad', ['id_productividad' => $pro->id_productividad]) }}">
                                                <button type="button" class="btn btn-warning">Activar</button>
                                            </a>
                                            <a
                                                href="{{ route('borraAgenda', ['id_agenda' => $pro->id_productividad]) }}">
                                                <button type="button" class="btn btn-secondary">Borrar</button>
                                            </a>
                                        @else
                                            <a
                                                href="{{ route('desactivarproductividad', ['id_productividad' => $pro->id_productividad]) }}">
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
                    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
                    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

                    <script>
                        $(document).ready(function() {
                            $('#dataTableAgenda').DataTable({
                                responsive: true,

                            });
                        });
                    </script>
                @endsection
            </div>
        </div>
    </div>
</div>
@endsection
