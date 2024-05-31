@extends('principal.siderprincipal')
@section('content')
<!DOCTYPE html>
<html lang="en">
    

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Capacitaciones</title>  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset ('css3/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css3/style.css') }}">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{ asset('css3/versions.css') }}">
       <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset ('css3/responsive.css')}}">
     <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset ('css3/custom.css')}}">
  
</head>
<body class="host_version"> 
	
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/capacitando.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2><strong>Protección Civil </strong> Capacitate</h2>
										<p class="lead">Capacitarte en protección civil no solo te prepara para enfrentar emergencias, 
                                            sino que también te convierte en un guardián de tu entorno de trabajo. </p>
											<a href="#" class="hover-btn-new"><span>Contactanos</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="#" class="hover-btn-new"><span>Leer Mas</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/alma.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">Manejo de Extintores <strong>Capacitate</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">Tu preparación en el uso de extintores te 
                                            convierte en un guardián de la seguridad, capaz de controlar situaciones de emergencia . </p>
											<!-- <a href="#" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="#" class="hover-btn-new"><span>Read More</span></a> -->
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider-03.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>Constancia</strong> Caliente</h2>
										<p class="lead" data-animation="animated fadeInLeft">Celebra este hito y sigue adelante 
                                            con la confianza de que cada paso que das te acerca más a tus metas. ¡Sigue así y continúa salvando vidas!</p>
											
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Acerca</h3>
                    <p class="lead">Nuestra misión es velar por la seguridad y el bienestar de todos. 
                        Nos capacitamos constantemente para estar preparados ante cualquier emergencia, porque sabemos que cada vida cuenta. </p>
                </div>
            </div><!-- end title -->
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>PRIMEROS AUXILIOS</h4>
                        <!-- <h2>Bienvenido a la capacitacion de Primeros Auxilios</h2> -->
                        <p>Capacitarte en primeros auxilios es un acto de verdadero heroísmo. Con estos conocimientos, puedes marcar la diferencia entre la vida y la muerte en situaciones críticas. Estar preparado te da la confianza para actuar rápidamente y con eficacia cuando alguien necesita ayuda. Invierte en tu capacitación y convierte cada segundo en una oportunidad para salvar vidas. 
                            ¡Tu habilidad en primeros auxilios es una herramienta poderosa para el bienestar de tu comunidad!</p>

                                                <!-- <a href="#" class="hover-btn-new orange"><span>Learn More</span></a> -->
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/primerosauxilios.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/busquedayrescate.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>BUSQUEDA Y RESCATE</h4>
                        <p>Capacitarte en búsqueda y rescate es más que adquirir habilidades; 
                es asumir el compromiso de ser un salvavidas en momentos de desesperación. Con esta capacitación, te conviertes en una pieza clave para encontrar y salvar a personas en situaciones extremas. Tu dedicación y valentía pueden devolver la esperanza a familias y comunidades enteras. ¡Entrénate, prepárate y sé la fuerza que marca la diferencia cuando más se necesita!</p>

                   <!--      <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum.</p> -->

<!--                         <a href="#" class="hover-btn-new orange"><span>Learn More</span></a> -->
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>MANEJO Y USO DE EXTINTORES</h4>
                        <!-- <h2>Bienvenido a la capacitacion de Primeros Auxilios</h2> -->
                        <p>Capacitarte en el manejo y uso de extintores es fundamental para proteger vidas y propiedades. Saber cómo actuar rápidamente ante un incendio puede evitar tragedias y minimizar daños. Tu preparación en el uso de extintores te convierte en un guardián de la seguridad, capaz de controlar situaciones de emergencia 
                            con eficacia y calma. ¡Aprende a usar un extintor y sé el primer paso hacia la prevención y protección en tu comunidad!</p>

                                                <!-- <a href="#" class="hover-btn-new orange"><span>Learn More</span></a> -->
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/extintores.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
            <div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/busquedayrescate.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>PROCEDIMIENTOS DE EVACUACION</h4>
                        <p>Capacitarte en procedimientos de evacuación es esencial para garantizar la seguridad de todos en situaciones de emergencia. Conocer y practicar estos procedimientos te prepara para guiar y proteger a otros, asegurando una salida ordenada y rápida. Tu conocimiento puede ser la diferencia entre el caos y la calma, salvando vidas y 
                            reduciendo riesgos. ¡Entrénate en evacuación y conviértete en un líder en momentos críticos, asegurando la seguridad de tu comunidad!</p>

                   <!--      <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum.</p> -->

<!--                         <a href="#" class="hover-btn-new orange"><span>Learn More</span></a> -->
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <!-- <section class="section lb page-section">
		<div class="container">
			 <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Our history</h3>
                    <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
                </div>
            </div><!-- end title -->
			
		</div>
	</section>

	<div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
					<p class="stat_count">5600</p>
					<h3>Capacitados</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
					<p class="stat_count">4</p>
					<h3>Cursos</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
					<p class="stat_count">700</p>
					<h3>Acompletados en el año</h3>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

  

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/testimonio.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Testimonio</h3>
                <p>"Mi nombre es Ana Martínez y quiero compartir cómo la capacitación en primeros auxilios me permitió salvar una vida. Un día, 
                    mientras caminaba por el casino, vi a un hombre desplomarse repentinamente. Al acercarme, me di cuenta de que no estaba respirando. Gracias a la formación que recibí en primeros auxilios, supe exactamente qué hacer. Comencé a realizar maniobras de reanimación cardiopulmonar (RCP) y, 
                    después de unos minutos que parecieron eternos, el hombre comenzó a respirar de nuevo justo cuando llegaba la ambulancia.. </p>
            </div><!-- end title -->

        
                  
                     
        </div><!-- end container -->
    </div><!-- end section -->


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Conocenos</h3>
                        </div>
                        <p>"Somos el equipo de Protección Civil del Hipódromo, 
                            comprometidos con tu seguridad y bienestar. Estamos aquí para proteger, prevenir y responder ante cualquier emergencia". 

                        </p>   
						<div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul><!-- end links -->
						</div>						
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<!-- <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Informacion Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Pricing</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div> -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Detalles de Contacto</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">octavio.mendez@caliente.com.mx</a></li>
                            <li><a href="#">www.caliente.com.mx</a></li>
                            <li>Blvd.Agua caliente 12027 Col Hipodromo Tijuana B.C.</li>
                            <li>+664 6337300 ext 12024</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2024 <a href="#">Caliente</a> Design By : <a href="">Victor Rodriguez</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="css3/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="css3/js/custom.js"></script>
	<script src="css3/js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>
@endsection
