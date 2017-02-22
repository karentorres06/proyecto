<?php
session_start();
?>
<?php
    $rol = $_GET['rol'];
?>
<?php
include_once("UsuarioCollector.php");
$usuario = $_SESSION['torres'];
$id =2;

$DemoCollectorObj = new UsuarioCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Usuario</title>
    <link rel="stylesheet" href="../../../css/estilotabla.css">
          
</head>
<body>
    <header>
        <h1>Administrador</h1>
        <div class="usuario">
        <?php
	    echo "<p>Hola " . $_SESSION['torres'] . "</p>";
		    
        ?>
        </div>
     </header>
    
    
    <h1>USUARIO</h1>
    <?php
        echo "<a href='createUsuario.php?rol=$rol'><button>CREAR</button></a>";
    ?>
    <table class="rwd-table">
        <tr>    
            <th>Id_usuario</th>
            <th>Usuario</th>
            <th>Clave</th>
            <th>Fecha_registro</th>
            <th>Rol</th>
            <th>Estado</th>
        </tr>
        <?php
            foreach ($DemoCollectorObj->showUsuarios() as $c){
            echo "<tr>";
            echo "<td>" . $c->getId_usuario() . "</td>";         
	    echo "<td>" . $c->getUsuario() . "</td>";   
	    echo "<td>" . $c->getClave() . "</td>";
	    echo "<td>" . $c->getFecha_registro() . "</td>";  
         echo "<td>" . $c->getRol() . "</td>";          
        echo "<td>" . $c->getEstado() . "</td>";        
        echo "<td><a href='updateUsuario.php?id_usuario=". $c->getId_usuario() ." & usuario=". $c->getUsuario() ." & clave=". $c->getClave() . " & rol=$rol'><button>Editar</button></a></td>";    
	    echo "<td><a href='deleteUsuario.php?ID=". $c->getId_usuario() ."& rol=$rol'><button>Eliminar</button></a></td>";

            echo "</tr>"; 
                
        }
  	    echo "<a href='../../admin.php?rol=$rol'><button>SALIR</button></a>";

        ?>

    </table>

   
 
</body>
</html>
