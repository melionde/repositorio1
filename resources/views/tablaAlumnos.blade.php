@extends('plantilla')
@section('content')
<div class="container w-25 border p-4 mt-4">
<form action="{{ route('alumnos') }}" method="POST">
    @csrf
  <div class="row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input type="nombre" class="form-control" id="nombre" placeholder="nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="apellido">Apellido</label>
      <input type="apellido" class="form-control" id="apellido" placeholder="apellido">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4">
      <label for="inputState">Grupo</label>
      <select id="inputState" class="form-control">
        <option selected>A</option>
        <option>B</option>
        <option>C</option>
        <option>D</option>
      </select>
    </div>
  </div>
  <br>
  
  <button type="submit" class="btn btn-primary"></button>
</form>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Grupo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
@endsection