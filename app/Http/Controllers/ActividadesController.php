<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ActividadesController extends Controller
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
        $actividades = \App\Actividad::all();
        $arr_actividades = array();
     
        $i = 0;

        foreach ($actividades as $actividad) {

            $arr_actividades[$actividad->id_actividad] = array($actividad->nombre_actividad, $actividad->descripcion, ++$i);
        }

        return view('actividades.index')->with('actividades',$arr_actividades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     

        $horarios = \App\Horario::all();
        $eventos = \App\Evento::all();

        $arr_horarios = array();
        $arr_eventos = array();

        foreach ($horarios as $horario) {
            $arr_horarios[$horario->id_horario] = $horario->nombre." (".$horario->horario.")";
        }

        foreach ($eventos as $evento) {
            $arr_eventos[$evento->id_evento] = $evento->nombre_evento;
        }


        return view('actividades.create')->with('horarios',$arr_horarios)
                                         ->with('eventos', $arr_eventos);

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

        dd("opcion no valida");
        $data = array();

        $actividad = new \App\Actividad;
        $actividadEvento = new \App\ActividadEvento;

        $actividad->nombre_actividad = $input["nombre_actividad"];
        $actividad->descripcion = $input["descripcion"];


        $actividad->nombre_actividad = $input["nombre_actividad"];
        $actividad->nombre_actividad = $input["nombre_actividad"];
        $actividad->nombre_actividad = $input["nombre_actividad"];
        $actividad->nombre_actividad = $input["nombre_actividad"];

        $sede = \App\Sede::find($input["sede_id"]);
        $sede->eventos()->save($evento);




         return redirect('eventos')->with('message', 'Evento agregado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $i
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
