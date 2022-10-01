<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //pagina de inicio
        
        return view('inicio');
        $datos = estudiante::orderBy('id', 'desc')->paginate(3);
        return view('inicio', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //creamos un formulario en donde agregamos los datos 
        return "aqui puedes agregar";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //guarda los datos 
        $estudiantes = new Estudiantes();
        $estudiantes->id = $request->post('id_estudiante');
        $estudiantes->carne = $request->post('carne');
        $estudiantes->nombre = $request->post('nombre');
        $estudiantes->apellidos = $request->post('apellidos');
        $estudiantes->direccion = $request->post('direccion');
        $estudiantes->correo = $request->post('correo');
        $estudiantes->id_tipo_sangre = $request->post('id_tipo_sangre');
        $estudiantes->fecha_nacimiento = $request->post('fecha_nacimiento');
        $estudiantes->save();

        return redirect()->route("estudiantes.index")->with("success", "Agregado con exito!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //nos muestra el registro 
        $estudiantes = Estudiantes::find($id);
        return view("eliminar" , compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //vamos a editar el registro
        $estudiantes = Estudiantes::find($id);
        return view("actualizar" , compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiantes $id)
    {
        //actualiza los datos del formulario
        $estudiantes = new Estudiantes();
        $estudiantes->id = $request->post('id_estudiante');
        $estudiantes->carne = $request->post('carne');
        $estudiantes->nombre = $request->post('nombre');
        $estudiantes->apellidos = $request->post('apellidos');
        $estudiantes->direccion = $request->post('direccion');
        $estudiantes->correo = $request->post('correo');
        $estudiantes->id_tipo_sangre = $request->post('id_tipo_sangre');
        $estudiantes->fecha_nacimiento = $request->post('fecha_nacimiento');
        $estudiantes->save();

        return redirect()->route("estudiantes.index")->with("success", "Agregado con exito!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiantes $id)
    {
        //elimina el registro
        $estudiante = Estudiante::find($id);
        $estudiante->delete();
        return redirect()->route("estudiantes.index")->with("success", "Eliminado con exito!");
    }
}
