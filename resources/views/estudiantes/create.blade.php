@extends("layouts.app")

@section("titulo", "crear estudiante")

@section("contenido")
<br>
<h3>Registrar nuevo estudiante</h3>
    <form action="/estudiantes" method="POST" enctype="multipart/form-data">
        @csrf
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre y apellidos</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>

  <div class="mb-3">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="number" class="form-control" id="telefono" name="telefono">
  </div>

  <div class="mb-3">
    <label for="curso" class="form-label">Curso</label>
    <input type="text" class="form-control" id="curso" name="curso">
  </div>

  <div class="mb-3">
    <label for="imagen" class="form-label">Cargar imagen</label>
    <input type="file" class="form-control" id="imagen" name="imagen">
  </div>
  <br>

  <button type="submit" class="btn btn-success">Guardar</button>
     </form>

@endsection
