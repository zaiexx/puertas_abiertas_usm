<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ActividadesController extends Controller
{
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

            $hora_inicio = $actividad->horario_inicio->hora_inicio;
            $hora_termino = $actividad->horario_termino->hora_termino;
            
            $arr_actividades[$actividad->id_actividad] = array($actividad->nombre_actividad, $actividad->descripcion, $hora_inicio,
                                                               $hora_termino, $actividad->cupos, $actividad->sobre_cupos, ++$i);
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

        $arr_horarios = array();

        foreach ($horarios as $horario) {
            $arr_horarios[$horario->id_horario] = $horario->nombre;
        }

        return view('actividades.create')->with('horarios',$arr_horarios);

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
        dd($input);


        $data = array();

        $actividad = new \App\Actividad;

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
