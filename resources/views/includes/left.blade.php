            
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ asset("images/user.png") }}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >{!! Auth::user()->nombre !!} {!! Auth::user()->apellido_paterno !!} {!! Auth::user()->apellido_materno !!}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Perfil</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i></a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i></a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i></a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="/logout"><i class="material-icons">input</i>Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Navegación Principal</li>
                  
                     <li class="active">

                        <a href="{{url('validacion')}}" class="menu-toggle">
                            <i class="material-icons">check_circle</i>
                            <span>PASO 1: Validación</span>
                        </a>
                 
                    </li>


                     <li>

                        <a href="{{url('inscripciones')}}" class="menu-toggle">
                            <i class="material-icons">create</i>
                            <span>PASO 2: Inscripciones a Talleres</span>
                        </a>
                        
                    </li>
                    
                    <li>
                        <a href="{{url('home')}}">
                            <i class="material-icons">add_box</i>
                            <span>Consultar Talleres Inscritos</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('listas')}}">
                            <i class="material-icons">insert_drive_file</i>
                            <span>Consultar Listado Inscritos</span>
                        </a>
                    </li>


                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">settings</i>
                            <span>Mantenedores</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/actividades">Actividades</a>
                            </li>
                            <li>
                                <a href="/eventos">Eventos</a>
                            </li>
                            <li>
                                <a href="/horarios">Horarios</a>
                            </li>
                            <li>
                                <a href="/sedes">Sedes</a>
                            </li>
                            <li>
                                <a href="/alumnos">Alumnos</a>
                            </li>
                        </ul>
                    </li>

           
                    <li class="header">DASHBOARD</li>
                    <li>
                        <a href="/dashboard/1">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Primer Bloque</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/2">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Segundo Bloque</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/3">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Tercer Bloque</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="javascript:void(0);">Puertas Abiertas USM 2018
                </div>
                <div class="version">
                    <b>Version: </b> 1.6
                </div>
            </div>
            <!-- #Footer -->