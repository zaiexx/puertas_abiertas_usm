<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $eventos = \App\Evento::all();
        $arr_eventos = array();
     
        $i = 0;

        foreach ($eventos as $evento) {
            $sede = $evento->sedes;
            $arr_eventos[$evento->id_evento] = array($evento->nombre_evento, $sede->nombre_sede, ++$i);

        }

        return view('eventos.index')->with('eventos',$arr_eventos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $sedes = \App\Sede::all();

        $arr_sedes = array();

        foreach ($sedes as $sede) {
            $arr_sedes[$sede->id_sede] = $sede->nombre_sede;
        }

        return view('eventos.create')->with('sedes',$arr_sedes);
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
        $data = array();

        $evento = new \App\Evento;

        $evento->nombre_evento = $input["nombre_evento"];

        $sede = \App\Sede::find($input["sede_id"]);
        $sede->eventos()->save($evento);




         return redirect('eventos')->with('message', 'Evento agregado con éxito');        }

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
