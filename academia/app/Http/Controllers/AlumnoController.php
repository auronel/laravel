<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Modulo;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos=Alumno::orderBy('apellidos')->paginate(4);
        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        return view('alumnos.detalle',compact('alumno'));
    }

    public function fmatricula(Alumno $alumno){
        $modulos2=$alumno->modulosOut();
        //Compruebo si ya los tiene todos
        if($modulos2->count()==0){
            return redirect()->route('alumnos.show',$alumno)->with('mensaje','Este alumno ya está matriculado en todos los modulos');
        }
        //Cargamos el formulario matricular alumno le mando el alumno y los modulos que le faltan
        return view('alumnos.fmatricula',compact('alumno','modulos2'));
    }   

    public function matricular(Request $request){
        $id=$request->alumno_id;
        //Me traigo el alumno de codigo id
        $alumno=Alumno::find($id);
        if(isset($request->modulo_id)){
            foreach($request->modulo_id as $item){
                $alumno->modulos()->attach($item);
            }
            return redirect()->route('alumnos.show',$alumno)->with('mensaje','Alumno matriculado con éxito');
        }
        return redirect()->route('alumnos.show',$alumno)->with('mensaje','Ningun modulo seleccionado');
    }

    public function fcalificar(Alumno $alumno){
        $modulos=$alumno->modulos()->get();
        if($modulos->count()==0){
            return redirect()->route('alumnos.show',$alumno)->with('mensaje','El alumno no cursa ningun módulo');
        }
        return view('alumnos.fcalificar',compact('alumno'));
    }

    public function calificar(Request $request){
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
