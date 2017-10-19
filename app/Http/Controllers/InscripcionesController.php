<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redis;

class InscripcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('inscripciones.index');
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


        $model = new \App\ActividadEventoInscrito;

        $model->alumno_id = $id_alumno;
        $model->actividad_evento_id = $id_actividad;

        if($model->save()) {
            $redis = Redis::connection();
            $redis->publish('message', $id_actividad . '-' . \App\ActividadEvento::find($id_actividad)->cuposTotales());
        }

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
        

        $alumno = \App\Alumno::where("rut",$id)->first();

        if (count($alumno) != 0) {
            $id_alumno = $alumno->id_alumno;

            $eventoInscrito = \App\EventoInscrito::where('alumno_id',$id_alumno)->first();
            $id_evento = $eventoInscrito->evento_id;
            $actividades = \App\ActividadEvento::where('evento_id',$id_evento)->get();
            return view('inscripciones.show')->with('actividades', $actividades)
                                             ->with('alumno',$alumno);
        }else {

            return redirect()->route('inscripciones.index')->withErrors('El alumno no se encuentra validado');          
        }

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


        $alumno = \App\Alumno::where("rut",$rut)->first();

        if ($alumno != null) {
            return redirect()->route('inscripciones.show',array($rut))->with('message', 'Alumno registrado correctamente, puede inscribir taller');
        }else{
            return redirect()->route('inscripciones.index')->withErrors('El alumno no se encuentra validado');          
        }
    }


    public function postDesinscribir (Request $request) {

        $input = $request->all();
        $rut = $input["rut"];

        $alumno = \App\Alumno::where("rut",$rut)->first();
        $id_alumno = $alumno->id_alumno;
        $id_actividad = $input["id_actividad"];

        $inscripcion = \App\ActividadInscrito::where("alumno_id",$id_alumno)->where("actividad_id",$id_actividad);

        if($inscripcion->forceDelete()) {
            $redis = Redis::connection();
            $redis->publish('message', $id_actividad . '-' . \App\Actividad::find($id_actividad)->cuposTotales());
        }


        

        return redirect()->route('inscripciones.show',array($rut))->with('message', 'hahahah');

    }



}
