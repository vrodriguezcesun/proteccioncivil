<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Capacitaciones</span>
                </li>
                <li class="submenu">
                    <a href="{{url('/home')}}"><i class='bx bxs-dashboard'></i></i> <span> Dashboard</span> <span class=""></span></a>
                    <ul style="display: none;">
                        <li><a class="" href="/home">Dashboard</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    @can('usuario.index')
                    <a href="#"><i class='bx bxs-user'></i></i> <span> Administración</span> <span class="menu-arrow"></span></a>
                    @endcan
                    <ul style="display: none;">
                        <li class="submenu">
                            <a href="#"><span> Usuarios de Sistema </span> <span class="menu-arrow"></span></a>
                            <ul style="display: active;">
                                <li class="">
                                    <a class="{{$pagina == 'usuarios' ? 'active' : ''}}" href="{{ url('usuarios') }}">
                                        <i class="bi bi-circle"></i><span>Usuarios</span>
                                    </a>
                                </li>
                                @can('usuario.create')
                                <li>
                                    <a class="{{$pagina == 'create'? 'active' : ''}}" href="{{url('usuarios/create')}}">
                                        <i class="bi bi-circle"></i><span>Crear Usuarios</span>
                                    </a>
                                </li>
                                @endcan
                              <!-- 
                                <li>
                                    <a class="{{$pagina == 'edit'? 'active' : ''}}" href="{{url('usuarios/edit')}}">
                                        <i class="bi bi-circle"></i><span>Editar Usuarios</span>
                                    </a>
                                </li>
                               -->
                            </ul>
                        </li>
                        
                        <li class="submenu">
                            <a href="#"><span> Empleados </span> <span class="menu-arrow"></span></a>
                            <ul style="display: active;">
                            <li class="">
                                    <a class="{{$pagina == 'empleados.dashboard' ? 'active' : ''}}" href="{{url('empleados/dashboard')}}">
                                        <i class="bi bi-circle"></i><span>DashBoard</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a class="{{$pagina == 'empleados' ? 'active' : ''}}" href="{{url('empleados')}}">
                                        <i class="bi bi-circle"></i><span>Empleados</span>
                                    </a>
                                </li>
                           
                                <li>
                                    <a class="{{$pagina == 'empleados.create' ? 'active' : ''}}"" href="{{url('empleados/create')}}">
                                        <i class="bi bi-circle"></i><span>Crear Empleados</span>
                                    </a>
                                </li>
                              
                                <li>
                                <a class="{{$pagina == 'empleados.edit' ? 'active' : ''}}"" href="{{url('empleados/edit')}}">
                                        <i class="bi bi-circle"></i><span>Editar Empleados</span>
                                    </a>
                                </li>
                               
                           
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span> Puestos </span> <span class="menu-arrow"></span></a>
                            <ul style="display: active;">
                           
                                <li class="">
                                    <a class="{{$pagina == 'puestos' ? 'active' : ''}}" href="{{url('puestos')}}">
                                        <i class="bi bi-circle"></i><span>Puestos</span>
                                    </a>
                                </li>
                           
                                <li>
                                    <a class="{{$pagina == 'puestos.create' ? 'active' : ''}}"" href="{{url('puestos/create')}}">
                                        <i class="bi bi-circle"></i><span>Crear Puesto</span>
                                    </a>
                                </li>
                              
                                <li>
                                <a class="#" href="#}">
                                        <i class="bi bi-circle"></i><span>Editar Puesto</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#"><span> Salas </span> <span class="menu-arrow"></span></a>
                            <ul style="display: active;">
                           
                                <li class="">
                                    <a class="{{$pagina == 'salas' ? 'active' : ''}}" href="{{url('salas')}}">
                                        <i class="bi bi-circle"></i><span>Salas</span>
                                    </a>
                                </li>
                           
                                <li>
                                    <a class="{{$pagina == 'salas.create' ? 'active' : ''}}" href="{{url('salas/create')}}">
                                        <i class="bi bi-circle"></i><span>Crear Sala</span>
                                    </a>
                                </li>
                              
                                <li>
                                <a class="{{$pagina == 'salas.edit' ? 'active' : ''}}" href="{{url('salas/edit')}}">
                                        <i class="bi bi-circle"></i><span>Editar Sala</span>
                                    </a>
                                </li>
                            </ul>
                        </li>






                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class='bx bx-clinic'></i><span> Primeros Auxilios </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li class="">
                            <a class="{{$pagina == 'registro' ? 'active' : ''}}" href="{{url ('primerosauxilios/registrarse')}}">
                                <i class="bi bi-circle"></i><span>Registrarse</span>
                            </a>
                        </li>
                        <li class="">
                            <a class="{{$pagina == 'introduccion' ? 'active' : ''}}" href="{{url ('primerosauxilios/introduccion')}}">
                                <i class="bi bi-circle"></i><span>Introduccion</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{$pagina == 'plan' ? 'active' : ''}}" href="{{url ('primerosauxilios/plan')}}">
                                <i class="bi bi-circle"></i><span>Plan de Estudio</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="#"><span> Revision General </span> <span class="menu-arrow"></span></a>
                            <ul style="display: active;">
                                <li>
                                    <a class="{{$pagina == 'evaluacion' ? 'active' : ''}}" href="{{url('primerosauxilios/revisiongeneral/evaluacion')}}">
                                        <i class="bi bi-circle"></i><span>Evaluacion General</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{$pagina == 'tecnicas' ? 'active' : ''}}" href="{{url ('primerosauxilios/revisiongeneral/tecnicas')}}">
                                        <i class="bi bi-circle"></i><span>Tecnicas ABC</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{$pagina == 'estado' ? 'active' : ''}}" href="{{url ('primerosauxilios/revisiongeneral/estadodeconciencia')}}">
                                        <i class="bi bi-circle"></i><span>Estado de Conciencia</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{$pagina == 'respiracion' ? 'active' : ''}}" href="{{url ('primerosauxilios/revisiongeneral/respiracion')}}">
                                        <i class="bi bi-circle"></i><span>Respiracion</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{$pagina == 'circulacion' ? 'active' : ''}}" href="{{url ('primerosauxilios/revisiongeneral/circulacion')}}">
                                        <i class="bi bi-circle"></i><span>Circulacion</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{$pagina == 'oxigeno' ? 'active' : ''}}" href="{{url ('primerosauxilios/revisiongeneral/oxigenacion')}}">
                                        <i class="bi bi-circle"></i><span>Oxigeno en el Cuerpo</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span> RCP </span> <span class="menu-arrow"></span></a>
                            <ul style="display: active;">
                                <li>
                                    <a class="{{$pagina == 'compresiones' ? 'active' : ''}}" href="{{url('primerosauxilios/revisiongeneral/evaluacion')}}">
                                        <i class="bi bi-circle"></i><span>Compresiones y Respiraciones</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{$pagina == 'tips' ? 'active' : ''}}" href="{{url ('primerosauxilios/revisiongeneral/tecnicas')}}">
                                        <i class="bi bi-circle"></i><span>Tips Respiratorios</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span> Atragamiento </span> <span class="menu-arrow"></span></a>
                            <ul style="display: active;">
                                <li>
                                    <a class="{{$pagina == 'compresiones' ? 'active' : ''}}" href="{{url('primerosauxilios/revisiongeneral/evaluacion')}}">
                                        <i class="bi bi-circle"></i><span>Maniobra de Hemlich</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{$pagina == 'tips' ? 'active' : ''}}" href="{{url ('primerosauxilios/revisiongeneral/tecnicas')}}">
                                        <i class="bi bi-circle"></i><span>Maniobras en Adultos</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span> Intoxicacion </span> <span class="menu-arrow"></span></a>
                            <ul style="display: active;">
                                <li>
                                    <a class="{{$pagina == 'compresiones' ? 'active' : ''}}" href="{{url('primerosauxilios/revisiongeneral/evaluacion')}}">
                                        <i class="bi bi-circle"></i><span>Intoxicacion con quimicos</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span> Hemorragias </span> <span class="menu-arrow"></span></a>
                            <ul style="display: active;">
                                <li>
                                    <a class="{{$pagina == 'compresiones' ? 'active' : ''}}" href="{{url('primerosauxilios/revisiongeneral/evaluacion')}}">
                                        <i class="bi bi-circle"></i><span>Tipos de Hemorragias</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{$pagina == 'compresiones' ? 'active' : ''}}" href="{{url('primerosauxilios/revisiongeneral/evaluacion')}}">
                                        <i class="bi bi-circle"></i><span>Tecnicas de Contension</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{$pagina == 'compresiones' ? 'active' : ''}}" href="{{url('primerosauxilios/revisiongeneral/evaluacion')}}">
                                        <i class="bi bi-circle"></i><span>Video de Contension</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{$pagina == 'compresiones' ? 'active' : ''}}" href="{{url('primerosauxilios/revisiongeneral/evaluacion')}}">
                                        <i class="bi bi-circle"></i><span>Amputaciones</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span> Golpes en la cabeza </span> <span class="menu-arrow"></span></a>
                            <ul style="display: active;">
                                <li>
                                    <a class="{{$pagina == 'compresiones' ? 'active' : ''}}" href="{{url('primerosauxilios/revisiongeneral/evaluacion')}}">
                                        <i class="bi bi-circle"></i><span>Golpes</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span> Quemaduras</span> <span class="menu-arrow"></span></a>
                            <ul style="display: active;">
                                <li>
                                    <a class="{{$pagina == 'compresiones' ? 'active' : ''}}" href="{{url('primerosauxilios/revisiongeneral/evaluacion')}}">
                                        <i class="bi bi-circle"></i><span>Tipos de Quemaduras</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span> Fracturas </span> <span class="menu-arrow"></span></a>
                            <ul style="display: active;">
                                <li>
                                    <a class="{{$pagina == 'compresiones' ? 'active' : ''}}" href="{{url('primerosauxilios/revisiongeneral/evaluacion')}}">
                                        <i class="bi bi-circle"></i><span>?Quehacer en caso?</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span> Convulsiones </span> <span class="menu-arrow"></span></a>
                            <ul style="display: active;">
                                <li>
                                    <a class="{{$pagina == 'compresiones' ? 'active' : ''}}" href="{{url('primerosauxilios/revisiongeneral/evaluacion')}}">
                                        <i class="bi bi-circle"></i><span>Que hacer en un caso?</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-object-group"></i> <span> Busqueda y Rescate</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li class="">
                            <a class="{{$pagina == 'introduccion' ? 'active' : ''}}" href="{{url ('primerosauxilios/introduccion')}}">
                                <i class="bi bi-circle"></i><span>Introduccion</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{$pagina == 'plan' ? 'active' : ''}}" href="{{url ('primerosauxilios/plan')}}">
                                <i class="bi bi-circle"></i><span>Plan de Estudio</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="#"><span> Golpes en la cabeza </span> <span class="menu-arrow"></span></a>
                            <ul style="display: active;">
                                <li>
                                    <a class="{{$pagina == 'compresiones' ? 'active' : ''}}" href="{{url('primerosauxilios/revisiongeneral/evaluacion')}}">
                                        <i class="bi bi-circle"></i><span>Golpes</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span> Quemaduras</span> <span class="menu-arrow"></span></a>
                            <ul style="display: active;">
                                <li>
                                    <a class="{{$pagina == 'compresiones' ? 'active' : ''}}" href="{{url('primerosauxilios/revisiongeneral/evaluacion')}}">
                                        <i class="bi bi-circle"></i><span>Tipos de Quemaduras</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span> Fracturas </span> <span class="menu-arrow"></span></a>
                            <ul style="display: active;">
                                <li>
                                    <a class="{{$pagina == 'compresiones' ? 'active' : ''}}" href="{{url('primerosauxilios/revisiongeneral/evaluacion')}}">
                                        <i class="bi bi-circle"></i><span>?Quehacer en caso?</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span> Convulsiones </span> <span class="menu-arrow"></span></a>
                            <ul style="display: active;">
                                <li>
                                    <a class="{{$pagina == 'compresiones' ? 'active' : ''}}" href="{{url('primerosauxilios/revisiongeneral/evaluacion')}}">
                                        <i class="bi bi-circle"></i><span>Que hacer en un caso?</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
