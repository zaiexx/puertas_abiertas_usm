<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }

    public function show($rut)
    {

        $alumno = \App\Alumno::where('rut',$rut)->first();

        if ($alumno != null) {
            $id_alumno = $alumno->id_alumno;
            $actividadesEventosInscritos = \App\ActividadEventoInscrito::where('alumno_id',$id_alumno)->get();
            $arr_actividades = array();
            $i = 0;
            foreach ($actividadesEventosInscritos as $actividad) {
                $actividad = $actividad->actividades_eventos;
                $horario_inicio = $actividad->horario_inicio->horario;
                $horario_termino = $actividad->horario_termino->horario;

                $arr_actividades[$actividad->id_actividad_evento] = [$actividad->actividades->nombre_actividad,$horario_inicio, $horario_termino,++$i];
            }


            return view('home.show')->with('actividades',$arr_actividades)
                                    ->with('rut',$rut);   

        }
    }


    public function postAsistencia($rut, $id_actividad_evento) {


        $alumno = \App\Alumno::where("rut",$rut);

        if ($alumno != null) {


            return redirect()->route('home.show',array($rut))->with('message', 'Asitencia registrada con éxito');

        }else {

            return redirect()->route('home.show',array($rut))->withErrors(['No se pudo registrar asistencia']);
        }




    }

}
