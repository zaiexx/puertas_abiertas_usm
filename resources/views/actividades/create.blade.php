@extends('layouts.app')

@section('header')
    
    @include('actividades.header')

@endsection

@section('content')

        <div class="container-fluid">
        
            <div class="block-header">
                <h2>Panel de Administración | Actividades</h2>
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
                            <h2>Sistema de Ingreso de Actividades &nbsp;</h2>
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

                            {!! Form::open(['route' => 'actividades.store']) !!}

                                <label><span class="required">*</span>Nombre Actividad</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('nombre_actividad', null, ['class'=>'form-control', 'placeholder' => "Ingresa nombre de la actividad"])!!}
                                    </div>
                                </div>

                                <label><span class="required">*</span> Descripción</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('descripcion', null, ['class'=>'form-control','placeholder' => "Ingresa la descripción de la actividad"]) !!}
                                    </div>
                                </div>

                                <label><span class="required">*</span> Horario Inicio</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::select('horario_inicio_id', $horarios, null, ['class' => 'form-control']) !!} 

                                            @if ($errors->has('horario_inicio_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('horario_id') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>

                                <label><span class="required">*</span> Horario término</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::select('horario_termino_id', $horarios, null, ['class' => 'form-control']) !!} 

                                            @if ($errors->has('horario_termino_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('horario_id') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>

                                <label><span class="required">*</span> Cupos</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('cupos', null, ['class'=>'form-control','placeholder' => "Ingresa los cupos de la actividad"]) !!}
                                    </div>
                                </div>
                
                                <label><span class="required">*</span> Sobrecupos</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('sobre_cupos', null, ['class'=>'form-control','placeholder' => "Ingresa los sobrecupos de la actividad"]) !!}
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

    @include('actividades.js')

@endsection 