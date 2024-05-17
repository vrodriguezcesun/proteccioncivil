<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Boostrap interno-->
  <link rel="stylesheet" href="{{ asset('/css1/bootstrap.min.css')}}">
  <!-- Css Personal -->
  <link rel="stylesheet" href="{{ asset('/css1/style.css')}}">
  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('/css1/fonts/icomoon/style.css')}}">

</head>

<body>
 
    <aside class="sidebar">
      <div class="toggle">
        <a href="#" class="/ js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>
      </div>
      <div class="side-inner">

        <div class="profile">
          <img src="{{asset ('img/caliente.png') }}" class="img-fluid" style="width: 130px;" alt="logo">
          <h3 class="name">Proteccion Civil</h3>
          <span class="country">Departamento</span>
        </div>


        <div class="nav-menu">
          <ul>
            <li><a href="/"><span class="icon-notifications mr-3"></span>Principal</a></li>
            <li class="accordion">
              <a href="/#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsible">
                </i><span class="icon-home mr-3"></span>Manuales
              </a>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                <div class="mr">
                  <ul>
                    <li><a href="#">Acta</a></li>
                    <li><a href="#">Sport</a></li>
                    <li><a href="#">Health</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="accordion">
              <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsible">
                <span class="icon-search2 mr-3"></span>Explore
              </a>

              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne">
                <div class="mr">
                  <ul>
                    <li><a href="#">Interior</a></li>
                    <li><a href="#">Food</a></li>
                    <li><a href="#">Travel</a></li>
                  </ul>
                </div>
              </div>

            </li>
            <li><a href="/conocenos"><span class="icon-notifications mr-3"></span>Conocenos</a></li>
            <li><a href="#"><span class="icon-location-arrow mr-3"></span>Directorio</a></li>
            <li><a href="#"><span class="icon-pie-chart mr-3"></span>Stats</a></li>
            <li><a href="/login"><span class="icon-sign-out mr-3"></span>Login</a></li>
          </ul>
        </div>
      </div>

    </aside>
    <main>
      @yield('content')
    </main>


  <script src="{{ asset('/css1/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('/css1/js/popper.min.js') }}"></script>
  <script src="{{ asset('/css1/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/css1/js/main.js') }}"></script>
  <script>
    // Espera a que el DOM esté completamente cargado
    document.addEventListener("DOMContentLoaded", function() {
      // Agrega la clase 'show-sidebar' al body para mantener el sidebar abierto
      document.body.classList.add('show-sidebar');
    });
  </script>
</body>

</html>