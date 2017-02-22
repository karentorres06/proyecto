<?php

include_once('Persona.php');
include_once('../usuario/Usuario.php');
include_once('../usuario/UsuarioCollector.php');
include_once('../collector.php');

class PersonaCollector extends collector
{
  
  function showPersonas() {
    $rows = self::$db->getRows("SELECT * FROM persona");    
    $arrayPersona= array();        
    foreach ($rows as $c){  
      /*$id = $c{'id_usuario'};    
      $usuario = self::$db->getRows("SELECT * FROM usaurio WHERE id_usuario=$id");*/      
      $aux = new persona($c{'id_persona'},$c{'id_usuario'},$c{'cedula'},$c{'nombre'},$c{'apellidos'},$c{'edad'},$c{'telefono'},$c{'email'},$c{'direccion'});
          
      array_push($arrayPersona, $aux);
    }
    return $arrayPersona;        
  }
    
    function createPersona($usuario,$clave,$cedula,$nombre,$apellidos,$edad,$telefono,$email,$direccion) {
        $estado = 'A';
        $rol = 'C';
        $UsuarioCollectorObj = new UsuarioCollector();
        $UsuarioCollectorObj->createUsuario($usuario, $clave, $estado,$rol);
        $row = self::$db->getRows("SELECT * FROM usuario ORDER BY id_usuario DESC limit 1",null);
        $usuario = array_pop($row);
        $ID = $usuario{'id_usuario'};
        $rows = self::$db->insertRow("INSERT INTO persona (cedula, nombre,apellidos,edad, telefono, email,direccion,id_usuario) VALUES ('$cedula', '$nombre','$apellidos','$edad','$telefono','$email','$direccion','$ID')",null);
        
    }
    
    function updatePersona($id,$cedula,$nombre,$apellidos,$edad,$telefono,$email,$direccion) {
        $rows = self::$db->updateRow("UPDATE persona SET cedula='$cedula',nombre='$nombre',apellidos='$apellidos',edad='$edad',telefono='$telefono',email='$email',direccion='$direccion' WHERE id_persona='$id'",null);
        
    }
    
    function buscarEmail($email) {
    $rows = self::$db->getRows("SELECT * FROM persona WHERE email='$email'");               
    foreach ($rows as $c){  
      return 1;
    }
    return 0;          
  }     
    
     function deletePersona($id) {
         $rows = self::$db->deleteRow("DELETE FROM persona WHERE id_persona=$id",null);
   }
     function deletePersonaPorUsuario($id) {
         $rows = self::$db->deleteRow("DELETE FROM persona WHERE id_usuario=$id",null);
   }
    
    
    
 }
?>

