@extends('layout.plantilla')

@section('template_title')
    Horario
@endsection

@section('content')
    


<div class="container">

<a href="{{ url('horarios/create') }}">
<button type="button" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
  class="fa fa-clock" aria-hidden="true"></i>Crear horario</button></a>
  <br>
  <br>
  <div class="card shadow mb-1">
            <div class="card-header py-1">
                <h6 class="m-0 font-weight-bold text-primary">Horarios </h6>
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-striped shadow-lg mt-4" id="dataTableAgenda" width="100%" cellspacing="0">
                        <thead class="bg-success text-white">
                                    <tr>
                                        <th>Hora de Entrada:</th>
										<th>Hora  de Salida</th>

                                        <th>Operaciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($horarios as $horario)
                                        <tr>
                                          
                                            
											<td>{{ $horario->time_in }}</td>
											<td>{{ $horario->time_out }}</td>

                                            <td>
                                                <form action="{{ route('horarios.destroy',$horario->id) }}" method="POST">
                                                   <!--<a class="btn btn-sm btn-primary " href="{{ route('horarios.show',$horario->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>-->
                                                    <a class="btn btn-sm btn-success" href="{{ route('horarios.edit',$horario->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
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
                                Width: false,

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