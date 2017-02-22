<?php
session_start();
include_once("PedidoCollector.php");

	$pedido_reserva = $_POST['pedido_reserva'];
	$estado = $_POST['estado'];
    $PedidoCollectorObj = new PedidoCollector();
?>
<?php
    $rol = $_GET['rol'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
  
        <?php
        $pedido_reserva2 = substr ("$pedido_reserva", 0,1);
        $estado2 = substr ("$estado", 0,1);
        $email = $_SESSION['torres'];
        $ID_Usuario = $PedidoCollectorObj->consultarIdUsuario($email);
        $PedidoCollectorObj->createPedido($ID_Usuario,$pedido_reserva2,$estado2);
        $mensaje = "EL PEDIDO SE INGRESO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readPedido.php?rol=$rol'>";
        ?>
  
    </body>
</html>
