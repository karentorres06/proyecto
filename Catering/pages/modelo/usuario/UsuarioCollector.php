<?php

include_once('Usuario.php');
include_once('../collector.php');

class UsuarioCollector extends collector
{
  
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    ##echo "linea 1";
    $arrayUsuario= array();        
    foreach ($rows as $c){
      /*$aux = new usuario($c{'id_usuario'},$c{'usuario'},$c{'clave'},$c{'fecha_registro'},$c{'estado'});*/
      $aux = new Usuario();    
      $aux->setId_usuario($c{'id_usuario'});
      $aux->setUsuario($c{'usuario'}); 
      $aux->setClave($c{'clave'});       
      $aux->setFecha_registro($c{'fecha_registro'}); 
      $aux->setEstado($c{'estado'}); 
      $aux->setRol($c{'rol'});       
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
    
  function showUsuarioPorID($id) {
    $rows = self::$db->getRows("SELECT * FROM usuario WHERE id_usuario=$id");               
    foreach ($rows as $c){
      /*$aux = new usuario($c{'id_usuario'},$c{'usuario'},$c{'clave'},$c{'fecha_registro'},$c{'estado'});*/
      $aux = new Usuario();    
      $aux->setId_usuario($c{'id_usuario'});
      $aux->setUsuario($c{'usuario'}); 
      $aux->setClave($c{'clave'});       
      $aux->setFecha_registro($c{'fecha_registro'}); 
      $aux->setEstado($c{'estado'}); 
      $aux->setRol($c{'rol'});     
      return $aux;
    }
    return $aux;  
    //return $aux = new usuario($user[0],$user[1],$user[2],$user[3],$user[4]);        
  }    
    
  function showUsuarioPorEmail($email) {
    $rows = self::$db->getRows("SELECT * FROM usuario WHERE usuario='$email'");               
    foreach ($rows as $c){
      $aux = new Usuario();    
      $aux->setId_usuario($c{'id_usuario'});
      $aux->setUsuario($c{'usuario'}); 
      $aux->setClave($c{'clave'});       
      $aux->setFecha_registro($c{'fecha_registro'}); 
      $aux->setEstado($c{'estado'}); 
      $aux->setRol($c{'rol'});     
      return $aux;
    }
    return $aux;          
  } 
    
  function buscarEmail($email) {
    $rows = self::$db->getRows("SELECT * FROM usuario WHERE usuario='$email'");               
    foreach ($rows as $c){
      $aux = new Usuario();    
      $aux->setId_usuario($c{'id_usuario'});
      $aux->setUsuario($c{'usuario'}); 
      $aux->setClave($c{'clave'});       
      $aux->setFecha_registro($c{'fecha_registro'}); 
      $aux->setEstado($c{'estado'}); 
      $aux->setRol($c{'rol'});     
      return 1;
    }
    return 0;          
  }     
    
      
    
    function createUsuario($usuario,$clave,$estado,$rol) {
        $rows = self::$db->insertRow("INSERT INTO usuario (usuario, clave, estado, rol) VALUES ('$usuario', '$clave','$estado','$rol')",null);
        
    }
    
    function updateUsuario($id_usuario, $usuario, $clave, $estado, $rol) {
        $rows = self::$db->updateRow("UPDATE usuario SET usuario='$usuario',
clave='$clave', estado='$estado', rol='$rol' WHERE id_usuario='$id_usuario'",null);
        
    }
    
     function deleteUsuario($id) {
         $rows = self::$db->deleteRow("DELETE FROM usuario WHERE id_usuario=$id",null);
         
   
   }
    
    
  
 }
?>

