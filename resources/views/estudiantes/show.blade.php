@extends("layouts.app")

@section("titulo", "Perfil de estudiante")

@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{Storage::url($student->imagen)}}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">{{$student->nombre}}</p>
        <p class="card-text">{{$student->email}}</p>
        <p class="card-number">{{$student->telefono}}</p>
        <p class="card-text">{{$student->curso}}</p>
    </div>
    <br>
    <a href="/estudiantes/{{$student->id}}/edit" class="btn btn-success">Editar estudiante</a>

</div>

@endsection
