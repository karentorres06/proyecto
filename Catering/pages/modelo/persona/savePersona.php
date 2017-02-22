<?php
session_start();
include_once("PersonaCollector.php");
include_once("../usuario/UsuarioCollector.php");

$cedula = $_POST['cedula'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellido'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$email = $_POST['usuario'];
$direccion = $_POST['direccion'];

$personaCollectorObj = new PersonaCollector();
?>
<?php
    $rol = $_GET['rol'];
    $llamado = $_GET['llamado'];
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
        if($llamado == "readPersona"){
             $personaCollectorObj->createPersona($usuario,$clave,$cedula,$nombre,$apellidos,$edad,$telefono,$email,$direccion);
            $mensaje = "LA PERSONA SE INGRESO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readPersona.php?rol=$rol'>";
        }
        else{
            if($personaCollectorObj->buscarEmail($usuario)){
                $mensaje = "ERROR EL USUARIO YA SE ENCUENTRA REGISTRADO";
                print "<script>alert('$mensaje')</script>";
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=nuevaPersona.php'>";
            }
            else{
                 $personaCollectorObj->createPersona($usuario,$clave,$cedula,$nombre,$apellidos,$edad,$telefono,$email,$direccion);
                $mensaje = "REGISTRO EXITOSO, POR FAVOR INICIE SESION";
                print "<script>alert('$mensaje')</script>";
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
            }
        }
        ?>
    </body>
</html>
