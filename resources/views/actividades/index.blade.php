@extends('layouts.app')

@section('header')
    
    @include('actividades.header')

@endsection


@section('content')

       <div class="container-fluid">
            <div class="block-header">
                <h2>Panel de Administración | Mantención de actividades</h2>
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
                            <h2>Todas las Actividades Registradas&nbsp; <a href="{!! action('ActividadesController@create') !!}" title="Agregar Actividad" class ="btn bg-usm btn-xs waves-effect"><i class="material-icons">playlist_add</i>Agregar Actividad</a>

                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li> <a href="{!! action('ActividadesController@create') !!}"> Agregar Actividad</a></li>
                                        <li><a href="javascript:void(0);">Actividades Activas</a></li>
                                        <li><a href="javascript:void(0);">Actividades Inactivas</a></li>
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
                                            <th>Descripción</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($actividades as $id_actividad => $actividad)
                                            @if ($actividad[2] % 2 == 0)
                                                <tr class="even pointer">
                                            @else
                                                <tr class="odd pointer">
                                            @endif
                                            <td><span class="label bg-usm">{{$actividad[0]}}</span></td>
                                            <td>{{$actividad[1]}}</td>
                                             
                                            <td>
                                                <a href="{!! action('ActividadesController@show', [$id_actividad]) !!}"  title="Ver" class ="btn btn-primary btn-xs"><i class="material-icons">remove_red_eye</i></a>
                                                <a href="{!! action('ActividadesController@edit', [$id_actividad]) !!}"  title="Editar" class ="btn btn-info btn-xs"><i class="material-icons">mode_edit</i></a>
                                                <a href="#"  title="Borrar" class ="btn btn-danger btn-xs"><i class="material-icons">delete</i></a>
                                            </td>                                                   
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            @else
                                <h3> No se han resgistrado Actividades </h3>
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



