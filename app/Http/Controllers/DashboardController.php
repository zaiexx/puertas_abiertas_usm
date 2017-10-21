<?php

namespace App\Http\Controllers;

use App\Actividad;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $bloques =  array();
        $bloques[0] = "Bloque 1: 9:30 - 11:30";
        $bloques[1] = "Bloque 2: 11:30 - 13:30";
        $bloques[2] = "Bloque 3: 14:00 - 16:00";

        return view('dashboard.index')->with('bloques',$bloques);
    





//        $actividades = \App\ActividadEvento::all();

 //       return view('dashboard.index')->with('actividades', $actividades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    public function show($id) {

        $hi = 0;
        $ht = 22;

        if ($id == 1) {
            $hi = 0;
            $ht = 7;

        }else if ($id == 2) {
            $hi = 5;
            $ht = 13;
        }else if ($id == 3) {
            $hi = 9;
            $ht = 14;
        }else {

            $hi = 0;
            $ht = 22;
        }

        $actividades = \App\ActividadEvento::where('evento_id',2)->where('hora_inicio_id','>=',$hi)->where('hora_termino_id','<=',$ht)->get();
 
        return view('dashboard.show')->with('actividades', $actividades);



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


    public function postProcesar(Request $request) {


        $input = $request->all();
        $id_bloque = $input["id_bloque"];

        $hi = 0;
        $ht = 22;

        if ($id_bloque == 1) {
            $hi = 0;
            $ht = 4;

        }else if ($id_bloque == 2) {
            $hi = 4;
            $ht = 8;
        }else if ($id_bloque == 3) {
            $hi = 8;
            $ht = 14;
        }else {

            $hi = 0;
            $ht = 22;
        }

        $actividades = \App\ActividadEvento::where('evento_id',1)->where('hora_inicio_id','>=',$hi)->where('hora_termino_id','<=',$ht)->get();
        if ($actividades != null) {
            return redirect()->route('dashboard.show',array($id_bloque))->with('actividades', $actividades);
        }else {
            return redirect()->route('dashboard.index')->withErrors('No existen actividades registradas');          
        }

    }

}
