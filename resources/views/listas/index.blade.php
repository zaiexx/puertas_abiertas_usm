@extends('layouts.app')

@section('header')
    
    @include('listas.header')

@endsection


@section('content')

       <div class="container-fluid">
            <div class="block-header">
                <h2>Panel de Administración | Lista de Actividades</h2>
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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Todas las actividades &nbsp; </h2>

                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li> <a href="{!! action('SedesController@create') !!}"> Agregar Alumno</a></li>
                                        <li><a href="javascript:void(0);">Actividades Activos</a></li>
                                        <li><a href="javascript:void(0);">Actividades Inactivos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        @if(count($actividades) > 0)
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>Nombre Actividad</th>
                                            <th>Día</th>
                                            <th>Hora Inicio</th>
                                            <th>hora Término</th>
                                            <th>Ver </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($actividades as $id_actividad => $actividad)
                                            @if ($actividad[3] % 2 == 0)
                                                <tr class="even pointer">
                                            @else
                                                <tr class="odd pointer">
                                            @endif
                                            <td><span class="label bg-usm">{{$actividad[0]}}</span></td>
                                            <td>{{$actividad[4]}}</td>
                                            <td>{{$actividad[1]}}</td>
                                            <td>{{$actividad[2]}}</td>
                                            <td>
                                                <a href="{!! action('ListasController@show', [$id_actividad]) !!}"  title="Ver" class ="btn btn-primary btn-xs"><i class="material-icons">remove_red_eye</i></a>
                                                
                                            </td>                                                   
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            @else
                                <h3> No se han resgistrado actividades </h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
@endsection


@section('js')

    @include('actividades.js')

@endsection 



