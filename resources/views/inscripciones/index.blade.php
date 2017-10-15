@extends('layouts.app')

@section('header')

    @include('inscripciones.header')

@endsection


@section('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>

    <div class="container-fluid">
        <div class="block-header">
            <h2>Panel de Administración | Inscripcion de {{ $alumno[0]->nombres }}</h2>
        </div>

        <div class="row clearfix">

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

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 curso">
                        <div class="card">
                            @if($actividad->cuposTotales() <= 0)
                                <div class="body bg-grey">
                                    @else
                                        <div class="body bg-red">
                                            @endif
                                            {{$actividad->nombre_actividad}}
                                            <span class="badge"
                                                  act-id="{{$actividad->id_actividad}}">{{$actividad->cuposTotales()}}</span>

                                            {!! Form::open(['route' => 'inscripciones.store']) !!}
                                            {{ Form::hidden('id_actividad', $actividad->id_actividad) }}
                                            {{ Form::hidden('rut', $alumno[0]->rut) }}
                                            @if($actividad->cuposTotales() <= 0)
                                                {!! Form::submit('Enviar', ["class" => "btn btn-primary m-t-15 waves-effect", "disabled" => "disabled"]) !!}
                                            @else
                                                {!! Form::submit('Enviar', ["class" => "btn btn-primary m-t-15 waves-effect"]) !!}
                                            @endif
                                            {!! Form::close() !!}


                                {!! Form::open(['route' => 'inscripciones.desinscribir']) !!}          
                                    {{ Form::hidden('id_actividad', $actividad->id_actividad) }}
                                    {{ Form::hidden('rut', $alumno[0]->rut) }}
                                    {!! Form::submit('Desinscibir', ["class" => "btn btn-primary m-t-15 waves-effect"]) !!}
                                {!! Form::close() !!}


                            </div>
                        </div>
                        @endforeach

                        @else
                            <h3> No se han resgistrado Actividades </h3>
                        @endif

                    </div>
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