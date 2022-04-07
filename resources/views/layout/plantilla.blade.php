<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('css')
    <title>Dashboard | @yield('titulo') </title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">CCODEN</div>
            </a>

            <!-- Divider -->


            <!-- Divider -->
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                REPORTES
            </div>
            <li class="nav-item active">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Panel de control</span></a>
            </li>

            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                ADMINISTRACION
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-users "></i>
                    <span>Socios</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="{{ url('socio') }}">Listado de Socios</a>
                        <a class="collapse-item" href="{{ url('horarios') }}">Horarios</a>

                    </div>
                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link" href={{ route('reporteagenda') }}>
                    <i class="fas fa-calendar-check"></i>
                    <span>Telefonia</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{ route('asistencia.index') }}>
                    <i class="fas fa-calendar-check"></i>
                    <span>Asistencia</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{ route('asistencia.index2') }}>
                    <i class="fas fa-calendar-check"></i>
                    <span>lista asistencia</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href={{ route('reporteentrevista') }}>
                    <i class="fas fa-clipboard-list"></i>
                    <span>Recepcion</span></a>
            </li>





            <li class="nav-item">
                <a class="nav-link" href="/usuarios">

                    <i class='fas fa-users'></i>
                    <span>Usuarios</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/roles">

                    <i class='fas fa-building'></i>
                    <span>Roles</span></a>

            </li>
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                IMPRIMIBLES
            </div>

            <li class="nav-item">
                <a class="nav-link" href={{ route('curso') }}>
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Curso</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{ route('reporteproductividad') }}>
                    <i class="fas fa-chart-line"></i>
                    <span>Productividad</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->


                    <!-- Nav Item - Alerts -->


                    <!-- Nav Item - Messages -->


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    @if (\Illuminate\Support\Facades\Auth::user())
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                                <div class="d-sm-none d-lg-inline-block">
                                    {{ \Illuminate\Support\Facades\Auth::user()->first_name }}</div>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-title">
                                    Welcome, {{ \Illuminate\Support\Facades\Auth::user()->name }}</div>
                                <a class="dropdown-item has-icon edit-profile" href="#" data-id="{{ \Auth::id() }}">
                                    <i class="fa fa-user"></i>Edit Profile</a>
                                <a class="dropdown-item has-icon" data-toggle="modal" data-target="#changePasswordModal"
                                    href="#" data-id="{{ \Auth::id() }}"><i class="fa fa-lock"> </i>Change
                                    Password</a>
                                <a href="{{ url('logout') }}" class="dropdown-item has-icon text-danger"
                                    onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                    class="d-none">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    @endif
                </ul>

            </nav>
            @yield('content')



            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Selecciona "Salir" si está listo para finalizar su sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="">Salir</a>
                </div>
            </div>
        </div>
    </div>-->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

    @yield('js')
</body>

</html>
