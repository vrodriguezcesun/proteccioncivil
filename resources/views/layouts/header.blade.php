 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

     <div class="d-flex align-items-center justify-content-between">
         <a href="#" class="logo d-flex align-items-center">
             <img src="{{asset('img/Caliente.png')}}" alt="">
             <span class="d-none d-lg-block"></span>
         </a>
         <!-- Boton de Cierre de Sidebar -->
         <i class="bi bi-list toggle-sidebar-btn"></i>
     </div><!-- End Logo -->

     <nav class="header-nav ms-auto">

         <ul class="nav-item dropdown pe-3">
             <!-- Authentication Links -->
             @guest

             @else
             <li class="nav-item dropdown">
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     {{ Auth::user()->name }}
                 </a>

               <!--   <div class="dropdown-menu dropdown-menu-right">
                     <a href="#" class="dropdown-item has-icon">
                         <i class="far fa-user"></i> Perfil
                     </a>
                     <div class="dropdown-menu dropdown-menu-end"></div>
                     <a id="logoutButton" href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                         <i class="fas fa-sign-out-alt"></i> Salir
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                         @csrf
                     </form>
                 </div> -->



                 <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                 <a href="#" class="dropdown-item has-icon">
                         <i class="far fa-user"></i> Perfil
                     </a>
                     <a id="logoutButton" class="dropdown-item" href="{{ route('logout') }}">
                     <i class="fas fa-sign-out-alt"></i>
                    {{ __('Salir') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                 </div>
             </li>
             @endguest
         </ul>
         </ul>
     </nav><!-- End Icons Navigation -->

 </header><!-- End Header -->
