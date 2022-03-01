@extends('layout.plantilla')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/modalCss.css">
@endsection
@section('content')
    <div class="container">
        <h1>REPORTE ENTREVISTA</h1>
        <br>
        <a href="{{ route('entrevista') }}">
        <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                    class="fa fa-address-book" aria-hidden="true"></i> Crea nueva Entrevista</button>
        </a>
        <!-----------------------------------Inicio
                                    Modal------------------------------------------------------------>

        <!-- Trigger/Open The Modal -->
        <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                    class="fa fa-check" aria-hidden="true"></i> Convenio</button>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <form action="creaConvenio/generapdf.php" method="get">
                    <p>Some text in the Modal..<input value="" type="text" class="inputBorder" id="p_input"
                            name="p_input">gfgsdfhsdfhhsdgffh</p>
                    <input type="submit" value="Submit">
                </form>
            </div>

        </div>


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
                        <thead class="bg-success text-white">
                            <tr>
                                <th>#</th>
                                <th>Nombre  Agenda</th>
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

                                    <td style="display:block;">
                                    <a href="{{ route('modificaentrevista', ['id_entrevista' => $entrevista->id_entrevista]) }}"
                                            class="btn btn-info"><i class="fa fa-address-book"></i> Editar
                                        </a>
                                        <a href="{{ route('desactivaentrevista', ['id_entrevista' => $entrevista->id_entrevista]) }}">
                                            <button type="button" class="btn btn-danger" id="btnElimina"
                                                data-id="{{ $entrevista->id_entrevista }}"><i class="fas fa-user-times"></i>
                                                Eliminar</button>
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

                        // Get the modal
                        var modal = document.getElementById("myModal");

                        // Get the button that opens the modal
                        var btn = document.getElementById("myBtn");

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];

                        // When the user clicks on the button, open the modal
                        btn.onclick = function() {
                            modal.style.display = "block";
                        }

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                            modal.style.display = "none";
                        }

                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                        }
                    </script>
                @endsection
            </div>
        </div>
    </div>
</div>
@endsection
