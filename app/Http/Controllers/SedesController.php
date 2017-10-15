<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SedesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $sedes = \App\Sede::all();

        $arr_sedes = array();
     
        $i = 0;

        foreach ($sedes as $sede) {
            $arr_sedes[$sede->id_sede] = array($sede->nombre_sede, $sede->direccion, $sede->email, $sede->telefono, ++$i);
        }

        return view('sedes.index')->with('sedes',$arr_sedes);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sedes.create');
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

        $sede = new \App\Sede;

        $sede->nombre_sede = $input["nombre_sede"];
        $sede->direccion = $input["direccion"];
        $sede->email = $input["email"];
        $sede->telefono = $input["telefono"];


        $sede->save();


         return redirect('sedes')->with('message', 'Sede agregada con éxito');    
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
