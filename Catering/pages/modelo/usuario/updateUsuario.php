<?php
session_start();
?>
<?php
include_once("UsuarioCollector.php");
$usuario = $_SESSION['torres'];

$id_usuario = $_GET['id_usuario'];
$usuario = $_GET['usuario'];
$clave = $_GET['clave'];

$UsuarioCollectorObj = new UsuarioCollector();

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
    <a href="../index.html"><h2>MODIFICAR USUARIOS</h2></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Ingrese sus Datos</p>

    <?php echo "<form class='form-horizontal' method='post' action='save_updateUsuario.php?rol=$rol'>";?>  
                      <?php
                        echo "<div class='box-body'>
                                    <div class='form-group'>
                                        <label for='text' class='col-sm-2 control-label'>ID</label>
                                        <div class='col-sm-10'>
                                            <input type='text' class='form-control' id='inputEmail3' readonly='readonly' name='id_usuario' value='". $id_usuario ."'>
                                        </div>
                                    </div>
                                    
                                    <div class='form-group'>
                                        <label for='inputEmail3' class='col-sm-2 control-label'>Usuario</label>
                                        <div class='col-sm-10'>
                                            <input class='form-control' id='inputEmail3' type='text' name='usuario' value='". $usuario ."'>
                                        </div>
                                    </div>
                                    
                                    <div class='form-group'>
                                        <label for='text' class='col-sm-2 control-label'>Password</label>
                                        <div class='col-sm-10'>
                                            <input type='text' class='form-control' id='inputEmail3' name='clave' value='". $clave ."'>
                                        </div>
                                    </div>
                                    
                                    <div class='form-group'>
                                        <label class='col-sm-2 control-label'>Estado</label>
                                        <div class='col-sm-10'>
                                        <select class='form-control select2' style='width: 100%;' name='estado'>
                                            <option selected='selected'>A</option>
                                            <option>I</option>
                                        </select>
                                        </div>
                                    </div> 
                                    
                                    <div class='form-group'>
                                        <label class='col-sm-2 control-label'>Rol</label>
                                        <div class='col-sm-10'>
                                        <select class='form-control select2' style='width: 100%;' name='rol'>
                                            <option selected='selected'>Administrador</option>
                                            <option>Cliente</option>
                                        </select>
                                        </div>
                                    </div> 
             
                              </div>";
                       echo "<div class='box-footer'>
                                <a href='readUsuario.php?rol=$rol'><button type='button' class='btn btn-default'>CANCELAR
                                </button>
                                </a>
                                <a href='save_updateUsuario.php?id_usuario=". $id_usuario ." & rol=$rol'>
                                    <button type='submit' class='btn btn-info pull-right'>MODIFICAR</button>
                                </a>
                            </div>";
                    ?>
                </form>
  </div>
  <!-- /.form-box -->
</body>
</html>