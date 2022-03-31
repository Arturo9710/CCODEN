@extends('layout.plantilla')
@section('content')

<form action="{{ url('socio')}}" method="post"  enctype="multipart/form-data" class="user">
@csrf

@include('socio.form',['modo'=>'Crear'])

</form>
@endsection