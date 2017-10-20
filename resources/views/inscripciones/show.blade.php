@extends('layouts.app')

@section('header')

    @include('inscripciones.header')

@endsection


@section('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>

    <div class="container-fluid">
        <div class="block-header">
            <h2>Panel de Administración | Inscripcion de Talleres y Rutas de alumno Rut: <b>{{ $alumno->rut }}</b>
            <div>
            <a href="{!! action('InscripcionesController@getBloques',[$alumno->rut,1]) !!}" title="Primer Bloque" class ="btn bg-red btn-xs waves-effect"><i class="material-icons">remove_red_eye</i>Ver Talleres Primer Bloque</a>&nbsp;
            <a href="{!! action('InscripcionesController@getBloques',[$alumno->rut,2]) !!}" title="Segundo Bloque" class ="btn bg-yellow btn-xs waves-effect col-black"><i class="material-icons">remove_red_eye</i>Ver Talleres Segundo Bloque</i></a>&nbsp;
            <a href="{!! action('InscripcionesController@getBloques',[$alumno->rut,3]) !!}" title="Tercer Bloque" class ="btn bg-light-blue btn-xs waves-effect"><i class="material-icons">remove_red_eye</i>Ver Talleres Tercer Bloque</i></a>&nbsp;
            </div>
        </h2>
        </div>

        <div class="row clearfix ">

            @if($errors->has())
                <div class='alert alert-danger'>
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    @foreach ($errors->all('<p>:message</p>') as $message)
                        {!! $message !!}
                    @endforeach
                </div>
            @endif

            @if (Session::has('message'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ Session::get('message') }}
                </div>
            @endif

        <!-- Task Info -->

            @if(count($actividades))

                @foreach ($actividades as $index => $actividad)

                    <div class="col-lg2 col-md-3 col-sm-6 col-xs-12 curso">
                        <div class="card">
                            @if($actividad->cuposTotales() <= 0)
                                <div class="body bg-grey">
                                <?php $col = "col-white"; ?>

                            @else


                                @if ($actividad->actividades->carreras->id_carrera == 12 or $actividad->actividades->carreras->id_carrera == 5) 
                                    <div class="body bg-orange col-pink">
                                    <?php $col = "col-black"; ?>
                                @elseif ($actividad->actividades->carreras->id_carrera == 21  or $actividad->actividades->carreras->id_carrera == 3) 
                                    <div class="body bg-indigo">
                                    <?php $col = "col-white"; ?>
                                @elseif ($actividad->actividades->carreras->id_carrera == 10 or $actividad->actividades->carreras->id_carrera == 7) 
                                    <div class="body bg-lime">
                                    <?php $col = "col-indigo"; ?>
                                @elseif ($actividad->actividades->carreras->id_carrera == 13) 
                                    <div class="body bg-white">
                                    <?php $col = "col-light-blue"; ?>
                                @elseif ($actividad->actividades->carreras->id_carrera == 7 or $actividad->actividades->carreras->id_carrera == 16) 
                                    <div class="body bg-white">
                                    <?php $col = "col-light-blue"; ?>
                                @elseif ($actividad->actividades->carreras->id_carrera == 15) 
                                    <div class="body bg-white">
                                    <?php $col = "col-light-blue"; ?>
                                @elseif ($actividad->actividades->carreras->id_carrera == 22 or $actividad->actividades->carreras->id_carrera == 14) 
                                    <div class="body bg-blue-grey">
                                    <?php $col = "col-light-white"; ?>                                

                                @elseif ($actividad->actividades->carreras->id_carrera == 9) 
                                    <div class="body bg-pink">
                                    <?php $col = "col-light-white"; ?> 

                                @elseif ($actividad->actividades->carreras->id_carrera == 1) 
                                    <div class="body bg-red">
                                    <?php $col = "col-light-white"; ?> 
                                                                   
                                @elseif ($actividad->actividades->carreras->id_carrera == 4) 
                                    <div class="body bg-deep-purple">
                                    <?php $col = "col-light-white"; ?> 
                                                                   

                                @elseif ($actividad->actividades->carreras->id_carrera == 6) 
                                    <div class="body bg-deep-orange">
                                    <?php $col = "col-light-white"; ?> 
                                                                   
                                @else
                                    <div class="body bg-cyan">
                                    <?php $col = "col-light-white"; ?>                                
                                @endif

                            @endif
                                    <h4 class = "{{$col}}">{{$actividad->actividades->nombre_actividad}}</h4>
                                    <span class ="{{$col}}">Cantidad de Cupos: <span class="badge" act-id="{{$actividad->id_actividad_evento}}">{{$actividad->cuposTotales()}}</span><br/>
                                    {{ $actividad->horario_inicio->horario}} - {{ $actividad->horario_termino->horario }}
                                    </span>

                                    @if ($actividad->actividades->id_actividad != 80 && $actividad->actividades->id_actividad != 24 && $actividad->actividades->id_actividad != 74) 
                                        <br/>
                                    @endif

                                    <?php $flag = false; ?>
                                    <?php $flag2 = true; ?>

                                    @foreach($actividad->inscritos as $alumno_tmp) 
                                        @if ($alumno->rut == $alumno_tmp->rut)
                                            <?php $flag = true;?>
                                        @endif
                                    @endforeach

                                    @foreach($actividad->inscritos as $alumno_tmp) 
                                        @if ($alumno->rut == $alumno_tmp->rut)
                                            <?php $flag2 = false;?>
                                        @endif
                                    @endforeach



                                    {!! Form::open(['route' => 'inscripciones.store']) !!}
                                    {{ Form::hidden('id_actividad', $actividad->id_actividad_evento) }}
                                    {{ Form::hidden('rut', $alumno->rut) }}
                                    <br/>

                                    @if($actividad->cuposTotales() <= 0)
                                        {!! Form::submit('Inscribir', ["class" => "btn btn-primary m-t-15 waves-effect", "disabled" => "disabled"]) !!}
                                    @else
                                        @if ($flag)
                                            {!! Form::submit('Inscribir', ["class" => "btn btn-primary m-t-15 waves-effect", "disabled" => "disabled"]) !!}
                                        @else
                                            {!! Form::submit('Inscribir', ["class" => "btn btn-primary m-t-15 waves-effect"]) !!}
                                        @endif
                                    @endif
                                    {!! Form::close() !!}

                                    &nbsp;
                                    {!! Form::open(['route' => 'inscripciones.desinscribir']) !!}
                                        {{ Form::hidden('id_actividad', $actividad->id_actividad_evento) }}
                                        {{ Form::hidden('rut', $alumno->rut) }}

                                        @if (!$flag2)
                                            {!! Form::submit('Desinscibir', ["class" => "btn btn-primary m-t-15 waves-effect"]) !!}
                                        @else
                                            {!! Form::submit('Desinscibir', ["class" => "btn btn-primary m-t-15 waves-effect","disabled" => "disabled"]) !!}
                                        @endif
                                    {!! Form::close() !!}
                                   
        
                                </div>
                        </div>

                        </div>
                        @endforeach

                        @else
                            <h3> No se han resgistrado Actividades </h3>
                        @endif

        </div>

        <script>
            var socket = io.connect('http://localhost:8890');
            socket.on('message', function (data) {

                var $badge = $('[act-id="' + data[0] + '"]');
                $badge.html(data[1]);

                if (data[1] <= 0) {
                    $badge.closest('.body')
                        .removeClass('bg-red')
                        .addClass('bg-grey')
                        .find('.btn')
                        .prop('disabled', true);
                } else {
                    $badge.closest('.body')
                        .addClass('bg-red')
                        .removeClass('bg-grey')
                        .find('.btn')
                        .prop('disabled', false);
                }
            });
        </script>

@endsection


@section('js')

    @include('inscripciones.js')

@endsection