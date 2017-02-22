<?php
    session_start();
?>
<?php
include_once("PedidoCollector.php");
$PedidoCollectorObj = new PedidoCollector();
?>
<?php
    $rol = $_GET['rol'];
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Pedido</title>
    <link rel="stylesheet" href="../../../css/estilotabla.css">
          
</head>
<body>
    <header>
        <h1>Administrador</h1>
        <div class="pedido">
        <?php
	    echo "<p>Hola " . $_SESSION['torres'] . "</p>";
		    
        ?>
        </div>
     </header>
    
    
    <h1>PEDIDO</h1>
    <?php
        echo "<a href='createPedido.php?rol=$rol'><button>CREAR</button></a>";
    ?>

    <table class="rwd-table">
        <tr> 
            <th>Id_pedido</th>
            <th>Id_usuario</th>
            <th>Pedido_reserva</th>
            <th>Fecha</th>
            <th>Estado</th>
        </tr>
        <?php
            foreach ($PedidoCollectorObj->showPedidos() as $c){
            echo "<tr>";
        echo "<td>" . $c->getId_pedido() . "</td>";                       
	    echo "<td>" . $c->getId_usuario() . "</td>";   
	    echo "<td>" . $c->getPedido_reserva() . "</td>";
        echo "<td>" . $c->getFecha() . "</td>"; 
        echo "<td>" . $c->getEstado() . "</td>";         
        echo "<td><a href='updatePedido.php?ID=". $c->getId_pedido() ." & Id_usuario=". $c->getId_usuario() ." & pedido_reserva=".  $c->getPedido_reserva() . " & estado=". $c->getEstado() . " & rol=$rol & fecha=". $c->getFecha() ." '><button>Editar</button></a></td>";    
	    echo "<td><a href='deletePedido.php?ID=". $c->getId_pedido() ." & rol=$rol'><button>Eliminar</button></a></td>";

            echo "</tr>"; 
                
        }
echo "<a href='../../admin.php?rol=$rol'><button>SALIR</button></a>";
        ?>

    </table>

   
 
</body>
</html>
