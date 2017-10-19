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
        dd($alumno);
        if ($alumno != null) {
            $id_alumno = $alumno->id_alumno;
            $actividadesEventosInscritos = \App\ActividadEventoInscrito::where('alumno_id',$id_alumno)->get();

            $arr_actividades = array();
            $i = 0;
            foreach ($actividadesEventosInscritos as $actividad) {
                $arr_actividades[$actividad->id_actividad_evento] = [$actividad->actividades->nombre_actividad,++$i];
            }


            return view('home.show')->with('actividades',$arr_actividades);   

        }
    }

}
