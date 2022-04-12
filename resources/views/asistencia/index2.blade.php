<?php $conn = new mysqli('localhost', 'root', '', 'ccoden_base');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Control de Asistencia y Sistema de Nómina</title>
    <link rel="icon" href="images/faviconconfiguroweb.png">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="dist/css/AdminLTE.min.css"> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style type="text/css">
        .mt20 {
            margin-top: 20px;
        }

        .result {
            font-size: 20px;
        }

        .bold {
            font-weight: bold;
        }
        .content-wrapper{
            width:80%;
            margin: auto;
            margin-top:5%
        }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Asistencia
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                    <li class="active">Asistencia</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">


                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fa fa-plus"></i> Nuevo</a>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <th class="hidden"></th>
                                        <th>Fecha</th>
                                        <th>ID Empleado</th>
                                        <th>Nombre</th>
                                        <th>Hora Entrada</th>
                                        <th>Hora Salida</th>
                                        <th>Acción</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = 'SELECT *, empleados.id_empleado AS empid, attendance.id AS attid FROM attendance LEFT JOIN empleados ON empleados.id_empleado=attendance.empleado_id ORDER BY attendance.date DESC, attendance.time_in DESC';
                                        $query = $conn->query($sql);
                                        while ($row = $query->fetch_assoc()) {
                                            $status = $row['status'] ? '<span class="label label-warning pull-right">a tiempo</span>' : '<span class="label label-danger pull-right">tarde</span>';
                                            echo "
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <td class='hidden'></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <td>" .
                                                date('M d, Y', strtotime($row['date'])) .
                                                "</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <td>" .
                                                $row['empid'] .
                                                "</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <td>" .
                                                $row['nombre'] .
                                                ' ' .
                                                $row['apellido_p'] .
                                                "</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <td>" .
                                                date('h:i A', strtotime($row['time_in'])) .
                                                $status .
                                                "</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <td>" .
                                                date('h:i A', strtotime($row['time_out'])) .
                                                "</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <button class='btn btn-success btn-sm btn-flat edit' data-id='" .
                                                $row['attid'] .
                                                "'><i class='fa fa-edit'></i> Editar</button>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <button class='btn btn-danger btn-sm btn-flat delete' data-id='" .
                                                $row['attid'] .
                                                "'><i class='fa fa-trash'></i> Eliminar</button>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <?php 
        include "php/includes/attendance_modal.php";
        ?>
    </div>
    <!-- jQuery 3 -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Moment JS -->
    <script src="bower_components/moment/moment.js"></script>
    <script>
        $(function() {
            $('.edit').click(function(e) {
                e.preventDefault();
                $('#edit').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });

            $('.delete').click(function(e) {
                e.preventDefault();
                $('#delete').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });
        });

        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: 'php/attendance_row.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    $('#datepicker_edit').val(response.date);
                    $('#attendance_date').html(response.date);
                    $('#edit_time_in').val(response.time_in);
                    $('#edit_time_out').val(response.time_out);
                    $('#attid').val(response.attid);
                    $('#employee_name').html(response.nombre + ' ' + response.apellido_p);
                    $('#del_attid').val(response.attid);
                    $('#del_employee_name').html(response.nombre + ' ' + response.apellido_p);
                }
            });
        }
    </script>
</body>

</html>
