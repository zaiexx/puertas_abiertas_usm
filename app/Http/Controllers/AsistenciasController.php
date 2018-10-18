<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidacionForm;
use App\Http\Requests;


class AsistenciasController extends Controller
{

    public function __construct() {

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $eventos = \App\Evento::all();
        $salida_eventos = array();


        foreach ($eventos as $evento) {
            $salida_eventos[$evento->id_evento] = $evento->nombre_evento;
        }

        return view('asistencias.index')->with('eventos',$salida_eventos);
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
    public function store(ValidacionForm $request)
    {

        $input = $request->all();

        $rut = $input["rut"];

        $rut_val = preg_replace('/[^k0-9]/i', '', $rut);
        $dv  = substr($rut, -1);
        $numero = substr($rut, 0, strlen($rut)-1);
        $i = 2;
        $suma = 0;
        foreach(array_reverse(str_split($numero)) as $v) {
            if($i==8)
                $i = 2;
            $suma += $v * $i;
            ++$i;
        }

        $dvr = 11 - ($suma % 11);
    
        if($dvr == 11)
            $dvr = 0;
        if($dvr == 10)
            $dvr = 'K';
        if($dvr == strtoupper($dv)) {
            return redirect()->route('validacion.show',array($input["id_evento"]))->withErrors(['Rut ingresado no valido']);
        }else {

            $alumno = \App\Alumno::where("rut",$rut)->first();
            $id_evento = $input["id_evento"];

            if ($alumno != null) {

                $inscripcion = \App\EventoInscrito::where('evento_id',$id_evento)->where('alumno_id',$alumno->id_alumno)->get();

                if (count($inscripcion) == 0) {

                    $inscripcion = new \App\EventoInscrito;
                    $inscripcion->alumno_id = $alumno->id_alumno;
                    $inscripcion->evento_id = $id_evento;
                    $inscripcion->save();
                }
                
                return redirect()->route('validacion.show',array($id_evento))->with('message', 'Alumno Validado Correctamente, IR A PASO 2: INSCRIPCIÓN');

            }else {

                $alumno = new \App\Alumno;

                $alumno->rut = $rut;
                $alumno->dv_rut = 'N';

                $alumno->save();


                $inscripcion = new \App\EventoInscrito;
                $inscripcion->alumno_id = $alumno->id_alumno;
                $inscripcion->evento_id = $id_evento;
                $inscripcion->save();

                return redirect()->route('validacion.show',array($id_evento))->withErrors(['¡¡IMPORTANTE!! El Alumno Debe Llenar Ficha. IR A PASO 2: INSCRIPCIÓN']);

            }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = \App\Evento::find($id);
    
        return view('asistencias.show')->with('evento',$evento);
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
        $id_evento = $input["id_evento"];
        return redirect()->route('validacion.show',array($id_evento))->with('message', 'Evento Seleccionado Exitosamente');
    }
}
