<?php
session_start();
include_once("UsuarioCollector.php");
include_once("../persona/PersonaCollector.php");
include_once("../pedido/PedidoCollector.php");

$id = $_GET['ID'];


$usuarioCollectorObj = new UsuarioCollector();
$personaCollectorObj = new PersonaCollector();
$pedidoCollectorObj = new PedidoCollector();
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
        $pedidoCollectorObj->deletePedidoPorUsuario($id);
        $personaCollectorObj->deletePersonaPorUsuario($id);
        $usuarioCollectorObj->deleteUsuario($id);
        $mensaje = "EL USUARIO SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readUsuario.php?rol=$rol'>";
        ?>
    </body>
</html>
