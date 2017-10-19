@extends('layouts.app')

@section('header')
    
    @include('dashboard.header')

@endsection

@section('content')

        <div class="container-fluid">
        
            <div class="block-header">
                <h2>Panel de Administración | Visualización</h2>
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
                            <h2>Visualización de Inscripciones &nbsp;</h2>
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

                            {!! Form::open(['route' => 'dashboard.procesar']) !!}

                                <label><span class="required">* </span>Ingrese El Bloque Horario a Visualizar</label>
                                <div class="form-group">
                                    <div class="form-line">

                                      {!! Form::select('id_bloque', $bloques, null,
                                          ['class' => 'form-control']) 
                                      !!} 

                                      @if ($errors->has('tipo'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('tipo') }}</strong>
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

    @include('dashboard.js')

@endsection 