@extends("layouts.app")

@section("titulo", "lista de cursos")

@section('contenido')
<br>
<h3 class="text-center">Lista de cursos disponibles</h3>
<br>
<div class="row">
    @foreach ($course as $cour)
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img style="height: 200px; width:250px; margin:20px" src="{{Storage::url($cour->imagen)}}" class="card-img-top" alt="...">
        <div class="card-body">
    <h5 class="card-title">{{$cour->nombre}}</h5>
    <p class="card-text">{{$cour->descripcion}}</p>
    <a href="/cursos/{{$cour->id}}" class="btn btn-success">Ver detalles</a>
        </div>
       </div>
    </div>

    @endforeach
</div>

@endsection
