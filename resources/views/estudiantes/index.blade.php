@extends("layouts.app")

@section("titulo", "lista de Estudiantes")

$@section('contenido')
<br>
<h3 class="text-center">Lista de Estudiantes</h3>
<br>
<div class="row">
    @foreach ($student as $stud)
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
    <h5 class="card-title">{{$stud->nombre}}</h5>
    <h6 class="card-text">{{$stud->email}}</h6>
    <h6 class="card-text">{{$stud->telefono}}</h6>
    <h6 class="card-text">{{$stud->curso}}</h6>

    <a href="#" class="btn btn-success">Ver perfil</a>
        </div>
       </div>
    </div>

    @endforeach
</div>

@endsection
