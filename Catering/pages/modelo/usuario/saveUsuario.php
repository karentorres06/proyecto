<?php
session_start();
include_once("UsuarioCollector.php");
include_once("Usuario.php");
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$estado = $_POST['estado'];
    $rol = $_POST['rol'];


$UsuarioCollectorObj = new UsuarioCollector();
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
        $roll = substr ("$rol", 0,1);
        $estado2 = substr ("$estado", 0,1);
        if($UsuarioCollectorObj->buscarEmail($usuario)){
            $mensaje = "ERROR EL USUARIO YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=createUsuario.php?rol=$rol'>";
        }
        else{
        $UsuarioCollectorObj->createUsuario($usuario, $clave, $estado2, $roll);
        $mensaje = "EL USUARIO SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readUsuario.php?rol=$rol'>";
        }
        ?>
  
    </body>
</html>
