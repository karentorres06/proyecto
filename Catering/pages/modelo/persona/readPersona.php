<?php
session_start();
?>
<?php
    $rol = $_GET['rol'];
?>
<?php
include_once("PersonaCollector.php");
include_once("../usuario/UsuarioCollector.php");
$usuario = $_SESSION['torres'];
$id =2;

$PersonaCollectorObj = new PersonaCollector();
$UsuarioCollectorObj = new usuarioCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Persona</title>
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
    
    
    <h1>PERSONA</h1>
    <?php
        $llamado = "readPersona";
        echo "<a href='createPersona.php?rol=$rol & llamado=$llamado'><button>CREAR</button></a>";
    ?>

    <table class="rwd-table">
        <tr>   
            <th>ID</th>
            <th>ID_Usuario</th>
            <th>Usuario</th>
            <th>Clave</th>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Direccion</th>
        </tr>
        <?php
            foreach ($PersonaCollectorObj->showPersonas() as $c){
            echo "<tr>";
            echo "<td>" . $c->getIDPersona() . "</td>";                 
            echo "<td>" . $c->getIdUsuario() . "</td>"; 
            $usuario = $UsuarioCollectorObj->showUsuarioPorID($c->getIdUsuario());
            echo "<td>" .$usuario->getUsuario()."</td>";     
            echo "<td>" .$usuario->getClave()."</td>";         
            echo "<td>" . $c->getCedula() . "</td>";                     
            echo "<td>" . $c->getNombre() . "</td>";   
            echo "<td>" . $c->getApellidos() . "</td>";
            echo "<td>" . $c->getEdad() . "</td>";
            echo "<td>" . $c->getTelefono() . "</td>";
            echo "<td>" . $c->getEmail() . "</td>";
            echo "<td>" . $c->getDireccion() . "</td>";
	   
        echo "<td><a href='updatePersona.php?
        cedula=". $c->getCedula() ." & usuario=". $usuario->getUsuario() ." & clave=". $usuario->getClave() ."& IdUsuario=". $c->getIdUsuario() ." & ID=". $c->getIDPersona() ." & nombre=". $c->getNombre() ." && rol=$rol & apellido=". $c->getApellidos() ." & edad=". $c->getEdad() ." & telefono=". $c->getTelefono() ." & direccion=". $c->getDireccion()." & rol=$rol'><button>Editar</button></a></td>";    
                
	    echo "<td><a href='deletePersona.php?ID=". $c->getIDPersona() ." & rol=$rol'><button>Eliminar</button></a></td>";

            echo "</tr>"; 
                
        }
  	    echo "<a href='../../admin.php?rol=$rol'><button>SALIR</button></a>";

        ?>

    </table>

   
 
</body>
</html>
