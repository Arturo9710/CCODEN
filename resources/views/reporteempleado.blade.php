@extends('layout.plantilla')
@section('content')
<div class="container">
 <center><h1>REPORTE EMPLEADOS</h1></center>
 <br>
 <a href="{{route('empleados')}}">
 <button type="button" class="btn btn-success">Alta Empleado</button>
 </a>
 <br>
 <br>
<table class="table table-hover">
  <thead  class="table-dark">
  <tr>
      <td>ID</td>
      <td>Foto</td>
      <td>Alias</td>
      <td>Nombre</td>
      <td>Primer Apellido</td>
      <td>teléfono</td>
      <td>Género</td>
      <td>Operaciones</td>
    </tr>
  </thead>
  <tbody>
    @foreach($consulta as $c)
    <tr>
      <th scope="row">{{$c->id_empleado}}</th>
      <td>{{$c->foto}}</td>
      <td>{{$c->alias}}</td>
      <td>{{$c->nombre}}</td>
      <td>{{$c->apellido_p}}</td>
      <td>{{$c->telefono}}</td>
      <td>{{$c->genero}}</td>
      <td>
      <button type="button" class="btn btn-primary">Modificar</button>
 
      @if($c->deleted_at)
      <a href="{{route('desactivarempleado',['id_empleado'=>$c->id_empleado])}}">
      <button type="button" class="btn btn-warning">Activar</button>
      </a>
      @else
      <a href="{{route('desactivarempleado',['id_empleado'=>$c->id_empleado])}}">
      <button type="button" class="btn btn-danger">Desactivar</button>
      </a>
      @endif

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection