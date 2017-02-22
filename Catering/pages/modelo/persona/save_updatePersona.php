<?php
session_start();
include_once("PersonaCollector.php");

$ID = $_POST['ID'];
$cedula = $_POST['cedula'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$personaCollectorObj = new PersonaCollector();
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
            $personaCollectorObj->updatePersona($ID,$cedula,$nombre,$apellidos,$edad,$telefono,$usuario,$direccion);
            $mensaje = "LA PERSONA SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readPersona.php?rol=$rol'>";   
        ?>
        
    </body>
</html>