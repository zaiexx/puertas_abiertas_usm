<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CarrerasController extends Controller
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
        
        $carreras = \App\Carrera::all();
        $arr_carreras = array();
     
        $i = 0;

        foreach ($carreras as $carrera) {
            $sede = $carrera->sedes;
            $arr_eventos[$carreras->id_carrera] = array($carrera->nombre_carrera, $sede->nombre_sede, ++$i);
        }

        return view('carreras.index')->with('carreras',$arr_carreras);



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

        return view ('carreras.create')->with('sedes', $sedes);
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
