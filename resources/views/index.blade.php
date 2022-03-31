@extends('layout.plantilla')
@section('css')
    <link rel="stylesheet" href="css/modalCss.css">
@endsection
@section('content')
    <!-- Main Content -->
    <div id="content">


        <!-- Begin Page Content -->

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">@yield('title','Panel de control')</h1>
               
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Convenios</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <button class="btn btn-success"> <a href="{{ route('vistaPrevia') }}"
                                                style="text-decoration: none; color:white;">Generar
                                                convenio</a>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Earnings (Annual)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                        </div>
                                        <div class="col">
                                            <div class="progress progress-sm mr-2">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Pending Requests</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <form action="creaConvenio/generapdf.php" method="get">
                        <h3>CCODEN TOLUCA</h3>
                        <h4>CAPACITACION Y COMERCIALIZADORA PARA EL DESARROLLO DE NEGOCIOS</h4>
                        <p>CONVENIO DE CONFORMIDAD</p>
                        <hr>
                        <p>Que firman, por una parte: <input type="text" id="nombre" value="David reyes German" /></p>
                        <p>En su calidad de: <input type="text" value="Socio Junior"> y por otra la Empresa. </p>

                        <p>Se otorga el dia: <input type="text" id="dia" value="21 DE FEBREBO DE 2022"> en Toluca, Edo. de
                            Mexico. </p>
                        <p>


                        <p>CODIF: <input type="text" id="codigo value=" AB009"></p>

                        <p>DESPACHO: <input type="text" id="despacho" value="203"></p>
                        <p>CURSO: <input type="text" id="curso" value="07M"></p>
                        <hr>
                        <p>En el que manifiestan que han enterado ambas partes de que:</p>
                        <input value="" type="text" class="inputBorder" id="p_input" name="p_input">gfgsdfhsdfhhsdgffh
                        </p>
                        <input type="submit" value="Submit">

                    </form>
                </div>

            </div>
            <!-- Content Row -->

            <!-- Content Row -->


        </div>

        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection

@section('js')
    <script>
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
