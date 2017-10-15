@extends('layouts.app')

@section('header')
    
    @include('sedes.header')

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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Sistema de Ingreso de Sedes &nbsp;</h2>
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

                            {!! Form::open(['route' => 'sedes.store']) !!}

                                <label><span class="required">*</span>Nombre Sede</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('nombre_sede', null, ['class'=>'form-control', 'placeholder' => "Ingresa nombre de la sede"])!!}
                                    </div>
                                </div>

                                <label><span class="required">*</span> Dirección</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('direccion', null, ['class'=>'form-control','placeholder' => "Ingresa la dirección de la sede"]) !!}
                                    </div>
                                </div>

                                <label><span class="required">*</span> Correo electrónico</label>

                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('email', null,['class'=>'form-control','placeholder' => "Ingresa el correo de la sede"]) !!}
                                    </div>
                                </div>

                                <label><span class="required">*</span> Teléfono</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('telefono', null,['class'=>'form-control','placeholder' => "Ingresa el teléfono de la sede"]) !!}
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

    @include('sedes.js')

@endsection 