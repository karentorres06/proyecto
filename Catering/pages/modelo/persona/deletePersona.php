<?php
session_start();
include_once("PersonaCollector.php");
$id = $_GET['ID'];
$personaCollectorObj = new PersonaCollector();
?>
<?php
    $rol = $_GET['rol'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CATERING | PERSONA</title>
        <link href="estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
        <?php
        $personaCollectorObj->deletePersona($id);
        $mensaje = "LA PERSONA SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readPersona.php?rol=$rol'>";
        ?>
    </body>
</html>
