<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\InscripcionesForm;
use Illuminate\Support\Facades\Redis;

class InscripcionesController extends Controller
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


        $model = \App\ActividadEventoInscrito::where('alumno_id',$id_alumno)->where('actividad_evento_id',$id_actividad)->get();

        if (count($model) == 0) {
            $model = new \App\ActividadEventoInscrito;

            $model->alumno_id = $id_alumno;
            $model->actividad_evento_id = $id_actividad;

            if($model->save()) {
                $redis = Redis::connection();
                $redis->publish('message', $id_actividad . '-' . \App\ActividadEvento::find($id_actividad)->cuposTotales());
            }
            return redirect()->route('inscripciones.show',array($rut))->with('message', 'Inscrito Exitosamente');
        }else{
            return redirect()->route('inscripciones.show',array($rut))->withErrors(['Alumno Ya se Encuentra Inscrito']);
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
        

        $alumno = \App\Alumno::where("rut",$id)->first();

        if (count($alumno) != 0) {

            $id_alumno = $alumno->id_alumno;

            $eventoInscrito = \App\EventoInscrito::where('alumno_id',$id_alumno)->orderBy('created_at','desc')->first();

            if ($eventoInscrito != null) {
                $id_evento = $eventoInscrito->evento_id;
                $actividades = \App\ActividadEvento::where('evento_id',$id_evento)->get();


                return view('inscripciones.show')->with('actividades', $actividades)
                                                 ->with('alumno',$alumno);
            }else{

            return redirect()->route('inscripciones.index')->withErrors('El alumno no se encuentra validado');          


            }
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


    public function postProcesar (InscripcionesForm $request) {

        $input = $request->all();
        $rut = $input["rut"];

        $alumno = \App\Alumno::where("rut",$rut)->first();
        if ($alumno != null) {

            $eventoInscrito = \App\EventoInscrito::where('alumno_id',$alumno->id_alumno)->where('evento_id',2)->get();
            if (count($eventoInscrito) > 0) {
                    return redirect()->route('inscripciones.show',array($rut))->with('message', 'Alumno registrado correctamente, puede inscribir taller');
            }else {

                $inscripcion = new \App\EventoInscrito;
                $inscripcion->alumno_id = $alumno->id_alumno;
                $inscripcion->evento_id = 2;
                $inscripcion->save();
                return redirect()->route('inscripciones.show',array($rut))->with('message', 'Alumno registrado correctamente, puede inscribir taller');

            }
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

        $inscripcion = \App\ActividadEventoInscrito::where("alumno_id",$id_alumno)->where("actividad_evento_id",$id_actividad);
       
        if($inscripcion->forceDelete()) {
            $redis = Redis::connection();
            $redis->publish('message', $id_actividad . '-' . \App\ActividadEvento::find($id_actividad)->cuposTotales());    
            return redirect()->route('inscripciones.show',array($rut))->with('message', 'Alumno Desinscrito correctamente');
        }else {
            return redirect()->route('inscripciones.show',array($rut))->withErrors(['No se pudo desiscribir Alumno']);
        }       


    }



    public function getBloques ($rut, $id_bloque) {


        $alumno = \App\Alumno::where("rut",$rut)->first();

        if (count($alumno) != 0) {
            $id_alumno = $alumno->id_alumno;

            $hi = 0;
            $ht = 22;

            if ($id_bloque == 1) {
                $hi = 1;
                $ht = 2;
            }else if ($id_bloque == 2) {
                $hi = 3;
                $ht = 4;
            }else if ($id_bloque == 3) {
                $hi = 5;
                $ht = 6;
            }else if ($id_bloque == 4) {
                $hi = 7;
                $ht = 8;
            
            }else if ($id_bloque == 5) {
                $hi = 9;
                $ht = 10;
            }else {
                $hi = 11;
                $ht = 12;
            }

            $eventoInscrito = \App\EventoInscrito::where('alumno_id',$id_alumno)->orderBy('created_at','desc')->first();
            $id_evento = $eventoInscrito->evento_id;
            $actividades = \App\ActividadEvento::where('evento_id',$id_evento)->where(function ($query) use ($hi, $ht) {
                    $query->where('hora_inicio_id',$hi)->orWhere('hora_inicio_id',$ht);
                })->get();
                    
            return view('inscripciones.show')->with('actividades', $actividades)
                                             ->with('alumno',$alumno);
        }else {

            return redirect()->route('inscripciones.index')->withErrors('El alumno no se encuentra validado');          
        }

    }


    public function postConsultar (InscripcionesForm $request) {

        $input = $request->all();
        $alumno = \App\Alumno::where('rut',$input['rut'])->first();

        if ($alumno != null) {
            $id_alumno = $alumno->id_alumno;
            $actividadesEventosInscritos = \App\ActividadEventoInscrito::where('alumno_id',$id_alumno)->orderBy('created_at','desc')->first();
            if($actividadesEventosInscritos != null) {
                return redirect()->route('home.show',array($alumno->rut))->with('message','El alumno se encuentra registrado en las siguientes actividades')
                                                 ->with('actividades',$actividadesEventosInscritos); 
            }else {
                return redirect()->route('home.index')->withErrors('El alumno no se encuentra validado');                     
            }                    

        }else {
            return redirect()->route('home.index')->withErrors('El alumno no se encuentra validado');                     
        }

    }


}
