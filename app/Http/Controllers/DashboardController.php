<?php

namespace App\Http\Controllers;

use App\Actividad;
use Illuminate\Http\Request;

class DashboardController extends Controller
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


        $bloques =  array();
        $bloques[0] = "Todos"; 
        $bloques[1] = "Bloque 1: 10:00 - 11:00";
        $bloques[2] = "Bloque 2: 11:00 - 12:00";
        $bloques[3] = "Bloque 3: 12:00 - 13:00";
        $bloques[4] = "Bloque 4: 13:00 - 14:00";
        $bloques[5] = "Bloque 5: 14:00 - 15:00";
        $bloques[6] = "Bloque 6: 15:00 - 16:00";

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

        $id_bloque = $id;

        $hi = 0;
        $ht = 22;

        if ($id_bloque == 1) {
            $hi = 1;
            $ht = 3;
        }else if ($id_bloque == 2) {
            $hi = 3;
            $ht = 5;
        }else if ($id_bloque == 3) {
            $hi = 5;
            $ht = 7;
        }else if ($id_bloque == 4) {
            $hi = 7;
            $ht = 9;
        }else if ($id_bloque == 5) {
            $hi = 9;
            $ht = 11;
        }else if ($id_bloque == 6){
            $hi = 11;
            $ht = 13;
        }


        $actividades = \App\ActividadEvento::where('evento_id',2)->where('hora_inicio_id','>=',$hi)->where('hora_inicio_id','<',$ht)->get();
 
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
            $hi = 1;
            $ht = 3;
        }else if ($id_bloque == 2) {
            $hi = 3;
            $ht = 5;
        }else if ($id_bloque == 3) {
            $hi = 5;
            $ht = 7;
        }else if ($id_bloque == 4) {
            $hi = 7;
            $ht = 9;
        }else if ($id_bloque == 5) {
            $hi = 9;
            $ht = 11;
        }else if ($id_bloque == 6){
            $hi = 11;
            $ht = 13;
        }

        $actividades = \App\ActividadEvento::where('evento_id',2)->where(function ($query) use ($hi, $ht) {
                    $query->where('hora_inicio_id',">=",$hi)->where('hora_inicio_id',"<",$ht);
                })->get();
        if ($actividades != null) {
            return redirect()->route('dashboard.show',array($id_bloque))->with('actividades', $actividades);
        }else {
            return redirect()->route('dashboard.index')->withErrors('No existen actividades registradas');          
        }

    }

}
