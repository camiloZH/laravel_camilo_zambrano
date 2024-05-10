@extends("layouts.app")

@section("tiyulo", "lista de cursos")

$@section('contenido')
<br>
<h3 class="text-center">Lista de cursos disponibles</h3>
<br>
<div class="row">
    @foreach ($course as $cur)
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
    <h5 class="card-title">{{$cur->nombre}}</h5>
    <p class="card-text">{{$cur->descripcion}}</p>
    <a href="#" class="btn btn-primary">Ver detalles</a>
        </div>
       </div>
    </div>

    @endforeach
</div>

@endsection
