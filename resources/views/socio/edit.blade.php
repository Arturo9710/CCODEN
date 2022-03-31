@extends('layout.plantilla')
@section('content')
<form method="post" action="{{ url('/socio/'.$socio->id) }}" enctype="multipart/form-data" class="user">
    
    @csrf 

     {{ method_field('PATCH') }}   

    @include('socio.form',['modo'=>'Editar'] );
    
</form>
@endsection