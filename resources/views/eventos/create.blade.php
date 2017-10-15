@extends('layouts.app')

@section('header')
    
    @include('eventos.header')

@endsection

@section('content')

        <div class="container-fluid">
        
            <div class="block-header">
                <h2>Panel de Administración | Eventos</h2>
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
                            <h2>Sistema de Ingreso de Eventos &nbsp;</h2>
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

                            {!! Form::open(['route' => 'eventos.store']) !!}

                                <label><span class="required">*</span>Nombre del Evento</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('nombre_evento', null, ['class'=>'form-control', 'placeholder' => "Ingresa nombre del evento"])!!}
                                    </div>
                                </div>

                                <label><span class="required">*</span> Sede</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::select('sede_id', $sedes, null, ['class' => 'form-control']) !!} 

                                            @if ($errors->has('rol_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('rol_id') }}</strong>
                                                </span>
                                            @endif
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

    @include('eventos.js')

@endsection 