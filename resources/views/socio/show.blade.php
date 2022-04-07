@extends('layout.plantilla')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection
@section('titulo', 'detalle de Socios')
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle de socio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('socio.index') }}">atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>ID:</strong>
                            {{ $socio->id}}
                        </div>
                        <div class="form-group">
                            <strong>Nombre</strong>
                            {{ $socio->Nombre}}
                        </div> 
                        <div class="form-group">
                            <strong>Codigo</strong>
                            {{ $socio->Codigo}}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Paterno</strong>
                            {{ $socio->ApellidoPaterno}}
                        /div>
                        <div class="form-group">
                            <strong>Apellido Materno</strong>
                            {{ $socio->ApellidoMaterno}}
                        /div>
                        <div class="form-group">
                            <strong>Cargo</strong>
                            {{ $socio->Cargo}}
                        </div>
                        <div class="form-group">
                            <strong>Clave</strong>
                            {{ $socio->Clave}}
                        </div>
                        <div class="form-group">
                            <strong>Telefono</strong>
                            {{ $socio->Telefono}}
                        </div>
                        <div class="form-group">
                            <strong>Genero</strong>
                            {{ $socio->Genero}}
                        </div>
                        <div class="form-group">
                            <strong>Foto</strong>
                            {{ $socio->Nombre}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection