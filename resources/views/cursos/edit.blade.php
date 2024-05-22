@extends("layouts.app")

@section("titulo", "Editar curso")

@section('contenido')
<br>
<h3 class="text-center">Editar informacion del curso</h3>
    <form action="/cursos/{{$course->id}}" method="POST" enctype="multipart/form-data">
        @method("PUT")
        @csrf
  <div class="mb-3">
    <label for="nombrecurso" class="form-label">Nombre del curso</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$course->nombre}}">
  </div>
  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion del curso</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$course->descripcion}}">
  </div>

  <div class="mb-3">
    <label for="imagen" class="form-label">Cargar imagen</label>
    <input type="file" class="form-control" id="imagen" name="imagen" value="{{$course->imagen}}">
  </div>

  <button type="submit" class="btn btn-success">Actualizar</button>

     </form>

     @endsection
