<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;


class AlumnosController extends Controller
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


        $alumnos = \App\Alumno::all();
        $arr_alumnos = array();
     
        $i = 0;

        foreach ($alumnos as $alumno) {
            $rut = $alumno->rut."-".$alumno->dv_rut;
            $arr_alumnos[$alumno->id_alumno] = array($alumno->nombres, $alumno->apellido_paterno, $alumno->apellido_materno, $rut, ++$i);
        }

        return view('alumnos.index')->with('alumnos',$arr_alumnos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view ('alumnos.create');

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

        $alumno = new \App\Alumno;

        $alumno->nombres = $input["nombres"];
        $alumno->apellido_paterno = $input["apellido_paterno"];
        $alumno->apellido_materno = $input["apellido_materno"];
        $alumno->rut = $input["rut"];
        $alumno->dv_rut = $input["dv_rut"];
        $alumno->fecha_nacimiento  = Carbon::createFromFormat('d/m/Y',$input["fecha_nacimiento"]);
        $alumno->sexo = $input["genero"];
        $alumno->email = $input["email"];
        $alumno->celular = $input["celular"];
        $alumno->telefono = $input["telefono"];
        $alumno->region = $input["region"];
        $alumno->comuna = $input["comuna"];
        $alumno->direccion = $input["direccion"];

        $alumno->save();


        return redirect('alumnos')->with('message', 'Alumno agregado con éxito');    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

        $alumno = \App\Alumno::find($id);

        if ($alumno != null) {

            $actividades = $alumno->actividades;
            $arr_actividades = array();
            $i = 0;
            foreach($actividades as $actividad) {
                $hora_inicio = $actividad->horario_inicio->horario;
                $hora_termino = $actividad->horario_termino->horario;
                $arr_actividades[$actividad->id_actividad_evento] = [$actividad->actividades->nombre_actividad, $hora_inicio, $hora_termino,++$i];
            }

            return view('alumnos.show')->with('alumno',$alumno)
                                       ->with('actividades',$arr_actividades);


        }else {

            return redirect('alumnos')->withErrors('Alumno no está registrado en el sistema');    
        
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
}
