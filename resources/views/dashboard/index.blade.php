@extends('layouts.app')

@section('header')

    @include('dashboard.header')

@endsection


@section('content')

    <div class="container-fluid">
        <div class="block-header">
            <h2>Panel de Administración | Sedes</h2>
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

    @include('dashboard.js')

@endsection
 
 
 