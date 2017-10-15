<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InscripcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
     
        $input = $request->all();
        $rut = $input["rut"];
        $id_actividad = $input["id_actividad"];

        $alumno = \App\Alumno::where("rut",$rut)->first();
        $id_alumno = $alumno->id_alumno;


        $model = new \App\ActividadInscrito;

        $model->alumno_id = $id_alumno;
        $model->actividad_id = $id_actividad;

        $model->save();

        return redirect()->route('inscripciones.show',array($rut))->with('message', 'Inscrito Exitosamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
        $alumno = \App\Alumno::where("rut",$id)->get();
        return view('inscripciones.index')->with('actividades', \App\Actividad::all())
                                          ->with('alumno',$alumno);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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


    public function postProcesar (Request $request) {

        $input = $request->all();
        $rut = $input["rut"];
        return redirect()->route('inscripciones.show',array($rut))->with('message', 'hahahah');

    }
}
