@extends("layouts.app")

@section("titulo", "crear curso")

@section("contenido")
<br>
<h3>Crear un nuevo curso</h3>
    <form action="/cursos" method="POST" enctype="multipart/form-data">
        @csrf
  <div class="mb-3">
    <label for="nombrecurso" class="form-label">Nombre del curso</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion del curso</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion">
  </div>

  <div class="mb-3">
    <label for="imagen" class="form-label">Cargar imagen</label>
    <input type="file" class="form-control" id="imagen" name="imagen">
  </div>

  <button type="submit" class="btn btn-success">Guardar</button>
     </form>

@endsection
