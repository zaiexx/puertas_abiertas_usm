@extends('layouts.app')

@section('header')
    
    @include('sedes.header')

@endsection

@section('content')

        <div class="container-fluid">
        
            <div class="block-header">
                <h2>Panel de Administración | Alumnos</h2>
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
                            <h2>Sistema de Ingreso de Alumnos &nbsp;</h2>
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

                            {!! Form::open(['route' => 'alumnos.store']) !!}

                                <label><span class="required">*</span>Nombres</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('nombres', null, ['class'=>'form-control', 'placeholder' => "Ingresa nombres del alumno"])!!}
                                    </div>
                                </div>


                                <label><span class="required">*</span>Apellido Paterno</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('apellido_paterno', null, ['class'=>'form-control', 'placeholder' => "Ingresa apellido paterno del alumno"])!!}
                                    </div>
                                </div>


                                <label><span class="required">*</span>Apellido Materno</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('apellido_materno', null, ['class'=>'form-control', 'placeholder' => "Ingresa apellido materno del alumno"])!!}
                                    </div>
                                </div>


                                <label><span class="required">*</span> Rut</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('rut', null, ['class'=>'form-control','placeholder' => "Ingresa el rut del alumno"]) !!}
                                    </div>
                                </div>

                                <label><span class="required">*</span> Dígito Verificador</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('dv_rut', null, ['class'=>'form-control','placeholder' => "Ingresa el dígito verificador del rut"]) !!}
                                    </div>
                                </div>


                                <label><span class="required">*</span> Fecha de Nacimiento</label>
                   
                                <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                        <div class="form-line">
                                            {!! Form::text('fecha_nacimiento', null,['class'=>'form-control date', 'placeholder'=>'Ex: 30/07/2016']) !!}
                                        </div>
                                </div>

                                
                                <label><span class="required">*</span> Género</label>

                                <div class="form-group">
                                    <div class="form-line">    
                                            {!! Form::radio('genero', 'Masculino', true, ['class' => 'with-gap radio-inline','id'=>'ig_radio']) !!} 
                                             <label for="ig_radio">Masculino</label>
                                      
                                            {!! Form::radio('genero', 'Femenino', true, ['class' => 'with-gap radio-inline','id'=>'ig_femenino']) !!}                                            
                                            <label for="ig_femenino">Femenino</label>
                                
                                    </div>              
                                </div>

                                
                                <label><span class="required">*</span> Correo electrónico</label>

                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('email', null,['class'=>'form-control','placeholder' => "Ingresa el correo del alumno"]) !!}
                                    </div>
                                </div>

                                <label><span class="required">*</span> Celular</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('celular', null,['class'=>'form-control','placeholder' => "Ingresa el celular del alumno"]) !!}
                                    </div>
                                </div>



                                <label><span class="required">*</span> Teléfono</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('telefono', null,['class'=>'form-control','placeholder' => "Ingresa el teléfono de la sede"]) !!}
                                    </div>
                                </div>

                                <label><span class="required">*</span> Región</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('region', null,['class'=>'form-control','placeholder' => "Ingresa el teléfono de la sede"]) !!}
                                    </div>
                                </div>
                                
                                <label><span class="required">*</span> Comuna</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('comuna', null,['class'=>'form-control','placeholder' => "Ingresa el teléfono de la sede"]) !!}
                                    </div>
                                </div>
                                
                                <label><span class="required">*</span> Dirección</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('direccion', null,['class'=>'form-control','placeholder' => "Ingresa el teléfono de la sede"]) !!}
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