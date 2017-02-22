<?php
    session_start();
?>
<?php
    include_once("PedidoCollector.php");
    include_once("../usuario/UsuarioCollector.php");
    $PedidoCollectorObj = new PedidoCollector();
    $UsuarioCollectorObj = new UsuarioCollector();
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
    <a href="#"><h2>REGISTRO DE PEDIDOS</h2></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Ingrese Datos</p>

    <?php echo "<form action='savePedido.php?rol=$rol' method='post'>";?>  
      <div class="form-group">
                <label>RESARVADO</label>
                <select class="form-control select2" style="width: 100%;" name="pedido_reserva">
                  <option selected="selected">SI</option>
                  <option>NO</option>
                </select>
        </div> 
        <div class="form-group">
                <label>ESTADO</label>
                <select class="form-control select2" style="width: 100%;" name="estado">
                  <option selected="selected">Activo</option>
                  <option>Inactivo</option>
                </select>
        </div>
      <div class='box-footer'>
            <?php echo "<a href='readPedido.php?rol=$rol'><button type='button' class='btn btn-default'>CANCELAR</button></a>";?>
            <?php echo "<a href='savePedido.php?rol=$rol'><button type='submit' class='btn btn-info pull-right'>REGISTRAR</button></a>";?>
          
            
          
            </a>
        </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
</body>
</html>
