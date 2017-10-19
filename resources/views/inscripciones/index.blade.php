@extends('layouts.app')

@section('header')
    
    @include('home.header')

@endsection

@section('content')

        <div class="container-fluid">
        
            <div class="block-header">
                <h2>Panel de Administración | Inscripción Talleres y Rutas</h2>
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
                            <h2>Sistema de Inscripción de Talleres y Rutas &nbsp;</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">

                            <div class="demo-masked-input">

                            {!! Form::open(['route' => 'inscripciones.procesar']) !!}

                                <label><span class="required">* </span>Rut (Sin Dígito Verificador. Sin puntos)</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('rut', null, ['class'=>'form-control', 'placeholder' => "Ej: 12345678"])!!}
                                    </div>
                                </div>


	                            <div class="form-group">
                                    {!! Form::submit('Enviar', ["class" => "btn btn-primary m-t-15 waves-effect"]) !!}
                                    {!! link_to(URL::previous(), 'Volver', ['class' => 'btn btn-danger m-t-15 waves-effect']) !!}
                                </div>           
                    
                            {!! Form::close() !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection


@section('js')

    @include('home.js')

@endsection 