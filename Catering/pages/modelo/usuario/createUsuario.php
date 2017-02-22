<?php
session_start();
?>
<?php
include_once("UsuarioCollector.php");

$usuario = $_SESSION['torres'];
$DemoCollectorObj = new UsuarioCollector();
?>
<?php
    $rol = $_GET['rol'];
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Usuario </title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
          
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><h2>REGISTRO DE USUARIOS</h2></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Ingrese sus Datos</p>

    <?php echo "<form action='saveUsuario.php?rol=$rol' method='post'>";?>  
        <div class="box-body">
      <div class="form-group has-feedback">
        <input type="email" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="clave" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div> 
      <div class="form-group">
                <label>Estado</label>
                <select class="form-control select2" style="width: 100%;" name="estado">
                  <option selected="selected">Activo</option>
                  <option>Inactivo</option>
                </select>
              </div>  
      <div class="form-group">
                <label>Rol</label>
                <select class="form-control select2" style="width: 100%;" name="rol">
                  <option selected="selected">Administrador</option>
                  <option>Cliente</option>
                </select>
              </div> 
        <div class='box-footer'>
            <?php echo "<a href='readUsuario.php?rol=$rol'><button type='button' class='btn btn-default'>CANCELAR</button></a>";?>
            <?php echo "<a href='saveUsuario.php?rol=$rol'><button type='submit' class='btn btn-info pull-right'>REGISTRAR</button></a>";?>
        </div>
        </div>
    </form>
  </div>

  <!-- /.form-box -->
</div>
</body>
</html>
