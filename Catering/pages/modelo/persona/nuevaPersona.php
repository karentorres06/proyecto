<?php
session_start();
?>
<?php
include_once("PersonaCollector.php");
$personaCollectorObj = new PersonaCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>CATERING | PERSONA </title>
    <script src="../../../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
          
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../index.html"><h2>REGISTRO DE USUARIO</h2></a>
  </div>

  <div class="login-box-body">
    <p class="login-box-msg">Ingrese sus Datos</p>

    <?php echo "<form action='savePersona.php?rol=C & llamado='nuevaPersona' ' method='post'>";?>  
      <div class="form-group has-feedback">
        <input type="email" name="usuario" class="form-control" placeholder="Email" required="required">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
        
      <div class="form-group has-feedback">
        <input type="text" name="nombre" class="form-control" placeholder="Nombres" required="required">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>    
        
      <div class="form-group has-feedback">
        <input type="text" name="apellido" class="form-control" placeholder="Apellidos" required="required">
        <span class="glyphicon glyphicon-user form-control-feedback" ></span>
      </div> 
        
        <div class="form-group has-feedback">
        <input type="text" name="edad" class="form-control" placeholder="Edad" required="required">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div> 
        <div class="form-group has-feedback">
        <input type="text" name="cedula" class="form-control" placeholder="Cedula" required="required">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div> 
        
     <div class="form-group has-feedback">
        <input type="text" name="telefono" class="form-control" placeholder="Telefono" required="required">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>     
        
        <div class="form-group has-feedback">
        <input type="text" name="direccion" class="form-control" placeholder="Direccion" required="required">
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div> 
      <div class="form-group has-feedback">
        <input type="password" name="clave" class="form-control" placeholder="Password" required="required">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password" required="required">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
  
        <div class='box-footer'>
            <?php echo "<a href='../../../index.php'><button type='button' class='btn btn-default'>CANCELAR</button></a>";?>
            <?php echo "<a href='../../admin.php?rol=C'><button type='submit' class='btn btn-info pull-right'>REGISTRAR</button></a>";?>
        </div>

    </form>
  </div>
  <!-- /.form-box -->
</div>
</body>
</html>
