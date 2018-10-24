<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ListasController extends Controller
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
        

//        $actividades_eventos = \App\ActividadEvento::where('evento_id',2)->get();

        $actividades_eventos = \App\ActividadEvento::all();
        $arr_actividades = array();
        
        $i = 0;
        $evento = "";
        foreach ($actividades_eventos as $actividad_evento) {

            switch ($actividad_evento->evento_id) {
                case 1:
                    $evento = "Viernes";
                    break;
                case 2:
                    $evento = "Sábado";
                    break;
                case 3:
                    $evento = "Jueves";
                    break;
            }

            $hora_inicio = $actividad_evento->horario_inicio->horario;
            $hora_termino = $actividad_evento->horario_termino->horario;

            $arr_actividades[$actividad_evento->id_actividad_evento] = array($actividad_evento->actividades->nombre_actividad, $hora_inicio, $hora_termino, ++$i, $evento);
        }

        return view('listas.index')->with('actividades',$arr_actividades);

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $actividadEvento = \App\ActividadEvento::find($id);
        $actividad = $actividadEvento->actividades;
        $alumnos = $actividadEvento->inscritos;

        $arr_alumnos = array();

        $i = 0;

        foreach ($alumnos as $alumno) {
            $arr_alumnos[$alumno->id_alumno] = array($alumno->rut, $alumno->nombres, $alumno->apellido_paterno, $alumno->apellido_materno, ++$i);
        }

        return view('listas.show')->with('alumnos',$arr_alumnos)
                                  ->with('actividad',$actividad);


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
}
