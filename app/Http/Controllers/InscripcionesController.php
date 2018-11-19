<?php

namespace Maraton\Http\Controllers;

use Illuminate\Http\Request;

class InscripcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscripcionEquipos =  \Maraton\InscripcionEquipos::all();
        return view('inscripciones.consulta',compact('inscripcionEquipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inscripciones.inscripcionEquipos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         \Maraton\InscripcionEquipos::create([
            'nombreEquipo'=>$request['nombreEquipo'],
            'codigo'=>$request['codigo'],
            'semestre'=>$request['semestre'],
            'nombreApellidos'=>$request['nombreApellidos'],
            'correo'=>$request['correo'],
            'categorias'=>$request['categorias'],
            'codigo2'=>$request['codigo2'],
            'semestre2'=>$request['semestre2'],
            'nombreApellidos2'=>$request['nombreApellidos2'],
            'correo2'=>$request['correo2'],
            'categorias2'=>$request['categorias2'],
            'codigo3'=>$request['codigo3'],
            'semestre3'=>$request['semestre3'],
            'nombreApellidos3'=>$request['nombreApellidos3'],
            'correo3'=>$request['correo3'],
            'categorias3'=>$request['categorias3'],
            'nombreProfesor'=>$request['nombreProfesor'],
            'correoProfesor'=>$request['correoProfesor'],
        ]);

        return redirect('/inscripcionEquipos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inscripcionEquipos =  \Maraton\InscripcionEquipos::find($id);

        return view('inscripciones.edit',['inscripcionEquipos' => $inscripcionEquipos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inscripcionEquipos =  \Maraton\InscripcionEquipos::find($id);
        $inscripcionEquipos->fill($request->all());
        $inscripcionEquipos->save();

        return redirect('/inscripcionEquipos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
