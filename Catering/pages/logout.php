<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ingreso</title>
        <link href="estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
	<?php

        if (isset($_SESSION['torres'])){
                session_destroy();
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../index.php'>";
        }else{
               
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=admin.php'>";

        }

	?>

    </body>
</html>

