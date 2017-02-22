<?php
session_start();
?>
<?php
    include_once("PedidoCollector.php");
    $pedido = $_SESSION['torres'];
    $ID = $_GET['ID'];
    $pedido_reserva = $_GET['pedido_reserva'];
    $fecha = $_GET['fecha'];
    $estado = $_GET['estado'];
    $PedidoCollectorObj = new PedidoCollector();
?>
<?php
    $rol = $_GET['rol'];
?>


<html>
<head>
	<meta charset="utf-8">
	<title>Pedido</title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
          
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../index.html"><h2>MODIFICAR PEDIDOS</h2></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Ingrese los Datos</p>

    <?php echo "<form class='form-horizontal' method='post' action='save_updatePedido.php?rol=$rol'>";?>
                      <?php
                        echo "<div class='box-body'>
                                    <div class='form-group'>
                                        <label for='text' class='col-sm-2 control-label'>ID</label>
                                        <div class='col-sm-10'>
                                            <input type='text' class='form-control' readonly='readonly' id='inputEmail3' name='ID' value='". $ID ."'>
                                        </div>
                                    </div>
                                    
                                    <div class='form-group'>
                                        <label class='col-sm-2 control-label'>Estado</label>
                                        <div class='col-sm-10'>
                                        <select class='form-control select2' style='width: 100%;' name='pedido_reserva'>
                                            <option selected='selected'>SI</option>
                                            <option>NO</option>
                                        </select>
                                        </div>
                                    </div> 
                            
                                    <div class='form-group'>
                                        <label for='inputEmail3' class='col-sm-2 control-label'>Fecha</label>
                                        <div class='col-sm-10'>
                                            <input class='form-control' id='inputEmail3' type='text' readonly='readonly' name='fecha' value='". $fecha ."'>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <label class='col-sm-2 control-label'>Estado</label>
                                        <div class='col-sm-10'>
                                        <select class='form-control select2' style='width: 100%;' name='estado'>
                                            <option selected='selected'>Activo</option>
                                            <option>Inactivo</option>
                                        </select>
                                        </div>
                                    </div> 
                                    
                              </div>";
                       echo "<div class='box-footer'>
                                <a href='readPedido.php?rol=$rol'><button type='button' class='btn btn-default'>CANCELAR
                                </button>
                                </a>
                                <a href='save_updatePedido.php?ID=". $ID ."'>
                                    <button type='submit' class='btn btn-info pull-right'>MODIFICAR</button>
                                </a>
                            </div>";
                    ?>
                </form>
  </div>
  <!-- /.form-box -->
</div>
</body>
</html>