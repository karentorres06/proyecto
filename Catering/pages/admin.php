<?php
  session_start();
?>
<?php
    $rol = $_GET['rol'];
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
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="../js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
      
    <!-- Cargando iconos -->
    <link href='../css/font-awesome.min.css' rel='stylesheet' type='text/css'> 
    
    
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
					    <a class="navbar-brand" href="index.html"><i class="glyphicon glyphicon-cutlery" aria-hidden="true"></i><span>C</span>atering</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							
                            <li class="hidden">
                                <a href="#page-top"></a>
                            </li>
                            <?php
		                      if (isset($_SESSION['torres'])){
                            ?>
                            <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <?php
                                    echo "Hola " .$_SESSION['torres']
                                ?><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="../pages/logout.php">Salir</a></li>
                                </ul>
                            </li>
                        <?php
                          }else{    
                        ?>
                             <li ><a href="../pages/login.php">Ingresar</a></li>
                                 </li>
                             <?php
                          } 
                        ?>
        				
         				</ul>
					</div><!-- /navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
    <div class="col-md-12 ">
        
                                <?php
                                if($rol == 'A'){
                                    echo "<h1>Tablas de la base de datos</h1>
                                        <h2>KAREN</h2>
                                <a class='btnDatos' href='modelo/usuario/readUsuario.php?rol=$rol'><button>USUARIOS</button></a>
                                <a href='modelo/persona/readPersona.php?rol=$rol'><button>PERSONAS</button></a>
                                <a href='modelo/pedido/readPedido.php?rol=$rol'><button>PEDIDOS</button></a>";
                                }
                                else{
                                    echo "<h1>SUS PEDIDOS</h1>
                                    <a href='modelo/pedido/readPedido.php?rol=$rol'><button>PEDIDOS</button></a>";
                                }
                                ?>
	

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
		<script src="../js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>
