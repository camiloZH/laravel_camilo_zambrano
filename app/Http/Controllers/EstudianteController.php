<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $student = Estudiante::all();
        //return $course;
        return view("estudiantes.index", compact("student"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view("estudiantes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Estudiante();
        $student->nombre= $request->input("nombre");
        $student->email = $request->input("email");
        $student->telefono = $request->input("telefono");
        $student->curso = $request->input("curso");

        if($request->hasFile("imagen")){
            $student->imagen = $request->file("imagen")->store("public/estudiantes");
        }

        $student->save();
        return "Se guardo con exito";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //crea un array con informacion del registro del idque viaja en la solicitud
        $student = Estudiante::find($id);
        //asocia el array al view usando compac
        return view("estudiantes.show", compact("student"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Estudiante::find($id);
        return view("estudiantes.edit", compact("student"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Estudiante::find($id);
        /*con fill se llena todos los campos de la tabla de estudiamtes con la informacion que viene desde el
        requesst exepyo la q viene desde el imput llamado imagen*/
        $student->fill($request->except("imagen"));
         if($request->hasFile("imagen")){
            $student->imagen = $request->file("imagen")->store("public/estudiantes");
            $student->save();
            return "Informacion actualizada";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
