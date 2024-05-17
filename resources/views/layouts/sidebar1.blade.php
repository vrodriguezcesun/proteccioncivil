<aside class="sidebar" id="sidebar">
    <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            <li class="menu-title">
                <a class="nav-link" href="/home">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item" {{ request()->is('primerosauxilios*') ? 'active' : '' }}>
                <a href="/home" <i class="la la-dashboard"></i> <span> Primeros Auxilios</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li class="">
                        <a class="{{$pagina == 'introduccion' ? 'active' : ''}}" href="{{url('primerosauxilios/introduccion')}}">
                            <i class="bi bi-circle"></i><span>Introduccion</span>
                        </a>
                    </li>
                    <li>
                        <a class="{{$pagina == 'plan' ? 'active' : ''}}" href="{{url ('plan')}}">
                            <i class="bi bi-circle"></i><span>Plan de Estudio</span>
                        </a>
                    </li>
                    <li>
                        <a href="#revisionSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle mr ">Revisión General</a>
                        <ul class="collapse" id="revisionSubmenu">
                            <li>
                                <a class="{{$pagina == 'evaluacion' ? 'active' : ''}}" href="{{url('evaluacion')}}">
                                    <i class="bi bi-circle"></i><span>Evaluacion General</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{$pagina == 'tecnicas' ? 'active' : ''}}" href="{{url ('tecnicas')}}">
                                    <i class="bi bi-circle"></i><span>Tecinas ABC</span>
                                </a>
                            </li>
                            <li>
                                <a href="/estadodeconciencia">Estado de Conciencia</a>
                            </li>
                            <li>
                                <a href="/respiracion">Respiración</a>
                            </li>
                            <li>
                                <a href="/circulacion">Circulación</a>
                            </li>
                            <li>
                                <a href="/oxigeno">Oxígeno en el Cuerpo</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#revisionSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle mr">RCP</a>
                        <ul class="collapse" id="revisionSubmenu1">
                            <li>
                                <a href="/compresionesyrespiraciones">Compresiones y Respiraciones</a>
                            </li>
                            <li>
                                <a href="/tipsrespiratorios">Tips Respiratorios</a>
                            </li>
                        </ul>
                    </li>
                    <li>

                        <a href="#revisionSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle mr">Atragamiento</a>
                        <ul class="collapse" id="revisionSubmenu2">
                            <li>
                                <a href="/maniobradehemlich">Maniobra de Hemlich</a>
                            </li>
                            <li>
                                <a href="/maniobrasenadultos">Maniobras en Adultos</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#revisionSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle mr">Intoxicacion</a>
                        <ul class="collapse submenu" id="revisionSubmenu3">
                            <li>
                                <a href="/intoxicacion">Intoxicacion con quimicos</a>
                            </li>

                        </ul>
                    </li>
                    <li>

                    </li>
                    <li>

                        <a href="#revisionSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle mr">Hemorragias</a>
                        <ul class="collapse submenu" id="revisionSubmenu4">
                            <li>
                                <a href="/tiposdehemorragias">Tipos de Hemorragias</a>
                            </li>
                            <li>
                                <a href="/tecnicasdehemorragias">Tecnicas de Hemorragias</a>
                            </li>
                            <li>
                                <a href="/videodehemorragias">Video de Hemorragia</a>
                            </li>
                            <li>
                                <a href="/amputaciones">Amputaciones</a>
                            </li>

                        </ul>
                        </a>
                    </li>
                    <li>
                        <a href="#revisionSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle mr">Golpes en la Cabeza</a>
                        <ul class="collapse submenu" id="revisionSubmenu5">
                            <li>
                                <a href="/golpesenlacabeza">Golpes en Cabeza</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#revisionSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle mr">Quemaduras</a>
                        <ul class="collapse  submenu" id="revisionSubmenu6">
                            <li>
                                <a href="/tipodequemaduras">Tipos de Quemaduras</a>
                            </li>

                        </ul>
                    </li>
            </li>
 
    </ul>
    </li><!-- End Components Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class='bx bx-file-find'></i><span>Busqueda y Rescate</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="forms-elements.html">
                    <i class="bi bi-circle"></i><span>Form Elements</span>
                </a>
            </li>
            <li>
                <a href="forms-layouts.html">
                    <i class="bi bi-circle"></i><span>Form Layouts</span>
                </a>
            </li>
            <li>
                <a href="forms-editors.html">
                    <i class="bi bi-circle"></i><span>Form Editors</span>
                </a>
            </li>
            <li>
                <a href="forms-validation.html">
                    <i class="bi bi-circle"></i><span>Form Validation</span>
                </a>
            </li>
        </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-layout-text-window-reverse"></i><span>Manejo de Extintores</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="tables-general.html">
                    <i class="bi bi-circle"></i><span>General Tables</span>
                </a>
            </li>
            <li>
                <a href="tables-data.html">
                    <i class="bi bi-circle"></i><span>Data Tables</span>
                </a>
            </li>
        </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="charts-chartjs.html">
                    <i class="bi bi-circle"></i><span>Chart.js</span>
                </a>
            </li>
            <li>
                <a href="charts-apexcharts.html">
                    <i class="bi bi-circle"></i><span>ApexCharts</span>
                </a>
            </li>
            <li>
                <a href="charts-echarts.html">
                    <i class="bi bi-circle"></i><span>ECharts</span>
                </a>
            </li>
        </ul>
    </li><!-- End Charts Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="icons-bootstrap.html">
                    <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                </a>
            </li>
            <li>
                <a href="icons-remix.html">
                    <i class="bi bi-circle"></i><span>Remix Icons</span>
                </a>
            </li>
            <li>
                <a href="icons-boxicons.html">
                    <i class="bi bi-circle"></i><span>Boxicons</span>
                </a>
            </li>
        </ul>
    </li><!-- End Icons Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
            <i class="bi bi-person"></i>
            <span>Profile</span>
        </a>
    </li><!-- End Profile Page Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
            <i class="bi bi-envelope"></i>
            <span>Contact</span>
        </a>
    </li><!-- End Contact Page Nav -->

    </ul>
    <!-- Agrega jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Agrega un evento de clic a los enlaces con el atributo data-toggle="collapse"
            $('[data-toggle="collapse"]').click(function(e) {
                e.preventDefault(); // Evita que el navegador siga el enlace
                var submenuId = $(this).attr('href');
                $(submenuId).toggleClass('show');
                return false;
            });

            // Evita que se cierre el submenu al hacer clic en un enlace dentro de él
            $('.collapse').find('a').click(function(e) {
                e.stopPropagation(); // Evita la propagación del clic
            });
        });


        /*  $(document).ready(function() {
           
             $('[data-toggle="collapse"]').click(function(e) {
              
                 var submenuId = $(this).attr('href');
        
                 $(submenuId).toggleClass('show');
         
                 e.stopPropagation();
                 return false;
             });
         }); */
    </script>
   </div>
</aside><!-- End Sidebar-->