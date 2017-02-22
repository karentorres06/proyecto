<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>CATERING</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Catering, Reserva Comida, Almuerzos Online, Menu Diario, Mi Restaurant" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
      
    <!-- Cargando iconos -->
    <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'> 
    
    
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					    <a class="navbar-brand" href="index.php"><i class="glyphicon glyphicon-cutlery" aria-hidden="true"></i><span>C</span>atering</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="hvr-bounce-to-bottom active"><a href="index.php">Inicio</a></li>
							<li class="hvr-bounce-to-bottom"><a href="pages/qsomos.php">Quienes Somos</a></li>
							<li class="hvr-bounce-to-bottom"><a href="pages/menu.php">Menú Semanal</a></li>
							<li class="hvr-bounce-to-bottom"><a href="pages/hAtencion.php">Horarios de Atención</a></li>
							<li class="hvr-bounce-to-bottom"><a href="pages/contact.php">Contactenos</a></li>
                            <?php
		                      if (isset($_SESSION['torres'])){ ?>
                                    <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <?php
                                        echo "Hola " .$_SESSION['torres']
                                    ?>
                                    <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="pages/admin.php">Administrar</a></li>
                                        <li><a href="pages/logout.php">Salir</a></li>
                                    </ul>
                                </li>
                            <?php
                                }else{    
                            ?>
                             <li ><a href="pages/login.php">Ingresar</a></li>
                             <?php
                          } 
                        ?>
        				
         				</ul>
					</div><!-- /navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner">
			<!-- Slider-starts-Here -->
				<script src="js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: false,
				        nav: false,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
    </div>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-info">
							<div class="baner-inf">
								<h1>Fácil y Rápido</h1>
								<p>Has tu reserva</p>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-info1">
							<div class="baner-inf">
								<h1>Promoción del Día</h1>
								<p>Descubre nuestras promociones</p>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-info2">
							<div class="baner-inf">
								<h1>Menú Semanal</h1>
								<p>Escoge entre nuestros exquisitos platos</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
<!-- //banner -->
<!-- news -->
	<div class="news">
		<div class="container">
			<h3>SESIÓN MENÚ SEMANAL</h3>
			<p class="eum">El placer esta en el gusto </p>
			<div class="news-grids">
				<div class="col-md-6 news-grid">
					<div class="col-xs-4 news-grid-left">
						<p><span>Lunes</span></p>
					</div>
					<div class="col-xs-8 news-grid-right">
						<h1>Mariscos</h1>
                        <a href="menu.html"><img src="images/mariscos.svg" alt=" " class="img-responsive" /></a>
						<div class="more">
							<a href="pages/menu.html">Leer mas..</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 news-grid">
					<div class="col-xs-4 news-grid-left">
						<p><span>Martes</span></p>
					</div>
					<div class="col-xs-8 news-grid-right">
						<h1>Frutas</h1>
						
                            <a href="menu.html"><img src="images/frut.svg" alt=" " class="img-responsive" /></a>
                        <div class="more">
							<a href="pages/menu.html">Leer mas..</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="news-grids">
				<div class="col-md-6 news-grid">
					<div class="col-xs-4 news-grid-left">
						<p><span>Miércoles</span></p>
					</div>
					<div class="col-xs-8 news-grid-right">
						<h1>Parrilladas</h1>
                        <a href="menu.html"><img src="images/parrillada.svg" alt=" " class="img-responsive" /></a>
						<div class="more">
							<a href="pages/menu.html">Leer mas..</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 news-grid">
					<div class="col-xs-4 news-grid-left">
						<p><span>Jueves</span></p>
					</div>
					<div class="col-xs-8 news-grid-right">
						<h1>Ensaladas</h1>
                        <a href="menu.html"><img src="images/ensal.svg" alt=" " class="img-responsive" /></a>
						<div class="more">
							<a href="pages/menu.html">Leer mas..</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				</div>
				<div class="news-grids">
        <div class="col-md-6 news-grid">
					<div class="col-xs-4 news-grid-left">
						<p><span>Viernes</span></p>
					</div>
					<div class="col-xs-8 news-grid-right">
						<h1>Bebidas</h1>
                        <a href="menu.html"><img src="images/bebidas.svg" alt=" " class="img-responsive" /></a>
						<div class="more">
							<a href="pages/menu.html">Leer mas..</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 news-grid">
					<div class="col-xs-4 news-grid-left">
						<p><span>Sábado</span></p>
					</div>
					<div class="col-xs-8 news-grid-right">
						<h1>Piqueos</h1>
                        <a href="menu.html"><img src="images/espec.svg" alt=" " class="img-responsive" /></a>
						<div class="more">
							<a href="pages/menu.html">leer mas..</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>	
			<div class="news-grids">
				<div class="col-md-6 news-grid">
					<div class="col-xs-4 news-grid-left">
						<p><span>Domingo</span></p>
					</div>
					<div class="col-xs-8 news-grid-right">
						<h1>Postres</h1>
                        <a href="menu.html"><img src="images/postre.svg" alt=" " class="img-responsive" /></a>
						<div class="more">
							<a href="pages/menu.html">Leer mas..</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //news -->
<!-- customer -->
	<div class="customer">
		<div class="container">
			<h3>Cliente dice..</h3>
			<div class="customer-grids">
				<ul id="flexiselDemo1">			
					<li>
						<div class="customer-grid">
							<p> Altamente recomendable por servicio, muy profesional, instalaciones y por la calidad de los productos son muy frescos. El precio es adecuado. </p>
							<h4>Walter Castillo</h4>
						</div>
					</li>
					<li>
						<div class="customer-grid">
							<p>Muy agradable sitio de comida tradicional, muy bien preparada, mariscos muy frescos y las parrilladas en su punto, estupendas verduras y postres.</p>
							<h4>Vladimir Mera</h4>
						</div>
					</li>
					<li>
						<div class="customer-grid">
							<p> Buena comida,muy atentos. Seguiremos repitiendo! La verdad que te quedas muy satisfecho con la comida y el servicio.La página nos da respuestas inmediatas.</p>
							<h4>Mercedes Torres</h4>
						</div>
					</li>
				</ul>
				<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:3
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>
		</div>
	</div>
<!-- //customer -->
<!--- footer --->
	   <footer class="piedepagina p-y-1" role="contentinfo">
        <div class="container">
            <p>2016 © Catering Todos los derechos reservados</p>
            <ul class="redes-sociales">
                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"> </i>  </a></li>
                <li><a href="https://www.twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                <li><a href="https://plus.google.com/collections/featured"><i class="fa fa-google++" aria-hidden="true"></i> </a></li>
            </ul>

        </div>

    </footer>
<!--- //footer --->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>
