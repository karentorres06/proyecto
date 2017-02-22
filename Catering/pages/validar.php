<?php
session_start();
?>
<?php
require('modelo/usuario/Usuario.php');
require('UsuarioCollector.php');
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <?php
        $usuarioCollector = new UsuarioCollector();
		$email = $_POST['usuario'];
		$clave = $_POST['password'];
        $usuario = $usuarioCollector->validarUsuario($email,$clave);
        if ($usuarioCollector->validarUsuario($email,$clave)){
            $_SESSION['torres']= $email;
            $rol = $usuarioCollector->consultarRol($email);
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=admin.php?rol=$rol'>";
        }
        else{
             $mensaje = "EL USUARIO NO SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=login.php'>";
        }
	   ?>
            
    </head>
    <body>
	
    </body>
</html>
