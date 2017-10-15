@extends('layouts.app')

@section('header')

    @include('inscripciones.header')

@endsection


@section('content')

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
                    

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="body bg-red">
                                {{$actividad->nombre_actividad}}
                                <span class="badge">{{$actividad->cuposTotales()}}</span>

                                {!! Form::open(['route' => 'inscripciones.store']) !!}          
                                {{ Form::hidden('id_actividad', $actividad->id_actividad) }}
                                {{ Form::hidden('rut', $alumno[0]->rut) }}
                                {!! Form::submit('Enviar', ["class" => "btn btn-primary m-t-15 waves-effect"]) !!}
                                {!! Form::close() !!}


                            </div>
                        </div>
                    </div>
                @endforeach

            @else
                <h3> No se han resgistrado Actividades </h3>
            @endif

        </div>
    </div>

@endsection


@section('js')

    @include('inscripciones.js')

@endsection