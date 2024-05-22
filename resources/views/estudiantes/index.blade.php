@extends("layouts.app")

@section("titulo", "lista de Estudiantes")

@section('contenido')
<br>
<h3 class="text-center">Lista de Estudiantes</h3>
<br>
<div class="row">
    @foreach ($student as $stud)
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img style="height: 200px; width:250px; margin:20px" src="{{Storage::url($stud->imagen)}}" class="card-img-top" alt="...">
        <div class="card-body">
    <h5 class="card-title">{{$stud->nombre}}</h5>
    <h6 class="card-text">{{$stud->email}}</h6>
    <h6 class="card-text">{{$stud->telefono}}</h6>
    <h6 class="card-text">{{$stud->curso}}</h6>

    <a href="/estudiantes/{{$stud->id}}" class="btn btn-success">Ver perfil</a>
        </div>
       </div>
    </div>

    @endforeach
</div>

@endsection
