<?php
    session_start();
    include_once("PedidoCollector.php");
    $ID = $_POST['ID'];
    $pedido_reserva = $_POST['pedido_reserva'];
    $fecha = $_POST['fecha'];
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
        <link href="../estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
        <?php
        $estado2 = substr("$estado",0,1);
        $pedido = substr("$pedido_reserva",0,1);
        $PedidoCollectorObj->updatePedido($ID,$pedido,$estado2);
         $mensaje = "EL PEDIDO SE MODIFICO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readPedido.php?rol=$rol'>";
        ?>
       
  
    </body>
</html>