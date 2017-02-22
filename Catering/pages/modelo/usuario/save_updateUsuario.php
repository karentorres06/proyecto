<?php
session_start();
include_once("UsuarioCollector.php");

$id_usuario = $_POST['id_usuario'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$estado = $_POST['estado'];
$roll = $_POST['rol'];
$usuarioCollectorObj = new UsuarioCollector();
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
        $roll0 = substr ("$roll", 0,1);
        if($usuarioCollectorObj->buscarEmail($usuario)){
            $mensaje = "ERROR EL USUARIO YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=updateUsuario.php?id_usuario=$id_usuario & usuario=$usuario & clave=$clave & rol=$rol'>";
        }
        else{
            $usuarioCollectorObj->updateUsuario($id_usuario, $usuario, $clave, $estado,$roll0);
            $mensaje = "EL USUARIO SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readUsuario.php?rol=$rol'>";
        }
        ?>
    </body>
</html>