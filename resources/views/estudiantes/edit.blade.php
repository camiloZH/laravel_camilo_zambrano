@extends("layouts.app")

@section("titulo", "Editar estudiante")

@section('contenido')
<br>
<h3 class="text-center">Editar informacion del estudiante</h3>
    <form action="/estudiantes/{{$student->id}}" method="POST" enctype="multipart/form-data">
        @method("PUT")
        @csrf
   <div class="mb-3">
    <label for="nombre" class="form-label">Nombre y apellidos</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$student->nombre}}">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{$student->email}}">
  </div>

  <div class="mb-3">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="number" class="form-control" id="telefono" name="telefono" value="{{$student->telefono}}">
  </div>

  <div class="mb-3">
    <label for="curso" class="form-label">Curso</label>
    <input type="text" class="form-control" id="curso" name="curso" value="{{$student->curso}}">
  </div>

  <div class="mb-3">
    <label for="imagen" class="form-label">Cargar imagen</label>
    <input type="file" class="form-control" id="imagen" name="imagen" value="{{$student->imagen}}">
  </div>

  <button type="submit" class="btn btn-success">Actualizar</button>

     </form>

     @endsection
