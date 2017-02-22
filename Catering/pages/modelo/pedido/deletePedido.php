<?php
    session_start();
    include_once("PedidoCollector.php");
    $id = $_GET['ID'];
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
        $PedidoCollectorObj->deletePedido($id);
        $mensaje = "EL PEDIDO SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readPedido.php?rol=$rol'>";
        ?>
  
    </body>
</html>
