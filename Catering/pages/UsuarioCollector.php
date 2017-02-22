<?php

include_once('modelo/usuario/Usuario.php');
include_once('modelo/collector.php');

class UsuarioCollector extends collector
{
  
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    ##echo "linea 1";
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new usuario($c{'id_usuario'},$c{'usuario'},$c{'clave'},$c{'fecha_registro'},$c{'estado'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
    
  function validarUsuario($usuario,$clave){
      $rows = self::$db->getRows("SELECT * FROM usuario WHERE usuario='$usuario' AND clave='$clave'");               
    foreach ($rows as $c){
      /*$aux = new usuario($c{'id_usuario'},$c{'usuario'},$c{'clave'},$c{'fecha_registro'},$c{'estado'});*/
      $aux = new Usuario();    
      $aux->setId_usuario($c{'id_usuario'});
      $aux->setUsuario($c{'usuario'}); 
      $aux->setClave($c{'clave'});       
      $aux->setFecha_registro($c{'fecha_registro'}); 
      $aux->setEstado($c{'estado'}); 
      return 1;
    }
    return 0;
  }    
    
    function createUsuario($usuario,$clave,$estado) {
        $rows = self::$db->insertRow("INSERT INTO usuario (usuario, clave, estado) VALUES ('$usuario', '$clave','$estado')",null);
        
    }
    
    function updateUsuario($id_usuario, $usuario, $clave, $estado) {
        $rows = self::$db->updateRow("UPDATE usuario SET usuario='$usuario',
clave='$clave', estado='$estado' WHERE id_usuario='$id_usuario'",null);
        
    }
    
     function deleteUsuario($id) {
         $rows = self::$db->deleteRow("DELETE FROM usuario WHERE id_usuario=$id",null);
         
   
   }
    
    function consultarRol($email){
      $rows = self::$db->getRows("SELECT * FROM usuario WHERE usuario='$email'");
    foreach ($rows as $c){
      $rol = $c{'rol'};    
      return $rol;
    }
    return 0;
  }  
    
    
    
  
 }
?>

