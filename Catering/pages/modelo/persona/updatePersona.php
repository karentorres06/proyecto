<?php
session_start();
?>
<?php
include_once("PersonaCollector.php");
$usuario = $_SESSION['torres'];

$cedula = $_GET['cedula'];
$ID = $_GET['ID'];
$usuario = $_GET['usuario'];
$clave = $_GET['clave'];
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellido'];
$edad = $_GET['edad'];
$telefono = $_GET['telefono'];
$direccion = $_GET['direccion'];
$PersonaCollectorObj = new PersonaCollector();
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
    <a href="../index.html"><h2>MODIFICAR PERSONAS</h2></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Ingrese sus Datos</p>

     <?php echo "<form class='form-horizontal' method='post' action='save_updatePersona.php?rol=$rol'>";?>  
                      <?php
                        echo "<div class='box-body'>
                                    <div class='form-group'>
                                        <label for='text' class='col-sm-2 control-label'>ID</label>
                                        <div class='col-sm-10'>
                                            <input type='text' class='form-control' id='inputEmail3' readonly='readonly' name='ID' value='". $ID ."'>
                                        </div>
                                    </div>
                                <div class='box-body'>
                                    <div class='form-group'>
                                        <label for='text' class='col-sm-2 control-label'>Usuario</label>
                                        <div class='col-sm-10'>
                                            <input type='text' class='form-control' id='inputEmail3' readonly='readonly'
                                            name='usuario' value='". $usuario ."'>
                                        </div>
                                    </div> 
                                    
                                <div class='box-body'>
                                    <div class='form-group'>
                                        <label for='text' class='col-sm-2 control-label'>Clave</label>
                                        <div class='col-sm-10'>
                                            <input type='text' class='form-control' id='inputEmail3' readonly='readonly' name='clave' value='". $clave ."'>
                                        </div>
                                    </div>    
                        
                                <div class='box-body'>
                                    <div class='form-group'>
                                        <label for='text' class='col-sm-2 control-label'>Cedula</label>
                                        <div class='col-sm-10'>
                                            <input type='text' class='form-control' id='inputEmail3' name='cedula' value='". $cedula ."'>
                                        </div>
                                    </div>
                                    
                                    <div class='form-group'>
                                        <label for='inputEmail3' class='col-sm-2 control-label'>Nombre</label>
                                        <div class='col-sm-10'>
                                            <input class='form-control' id='inputEmail3' type='text' name='nombre' value='". $nombre ."'>
                                        </div>
                                    </div>
                                    
                                    <div class='form-group'>
                                        <label for='text' class='col-sm-2 control-label'>Apellidos</label>
                                        <div class='col-sm-10'>
                                            <input type='text' class='form-control' id='inputEmail3' name='apellidos' value='". $apellidos ."'>
                                        </div>
                                    </div>
                                    
                                     <div class='form-group'>
                                        <label for='inputEmail3' class='col-sm-2 control-label'>Edad</label>
                                        <div class='col-sm-10'>
                                            <input class='form-control' id='inputEmail3' type='text' name='edad' value='". $edad ."'>
                                        </div>
                                    </div>
                                     <div class='form-group'>
                                        <label for='inputEmail3' class='col-sm-2 control-label'>Telefono</label>
                                        <div class='col-sm-10'>
                                            <input class='form-control' id='inputEmail3' type='text' name='telefono' value='". $telefono ."'>
                                        </div>
                                    </div>
                                    
                                     <div class='form-group'>
                                        <label for='inputEmail3' class='col-sm-2 control-label'>Direccion</label>
                                        <div class='col-sm-10'>
                                            <input class='form-control' id='inputEmail3' type='text' name='direccion' value='". $direccion ."'>
                                        </div>
                                    </div>
                                    
                                    
                              </div>";
                       echo "<div class='box-footer'>
                                <a href='readPersona.php?rol=$rol'><button type='button' class='btn btn-default'>CANCELAR
                                </button>
                                </a>
                                <a href='save_updatePersona.php?cedula=". $cedula ." & rol=$rol'>
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