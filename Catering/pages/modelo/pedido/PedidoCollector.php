<?php

include_once('Pedido.php');
include_once('../collector.php');
include_once('../usuario/UsuarioCollector.php');

class PedidoCollector extends collector
{
  
  function showPedidos() {
    $usuarioCollector = new UsuarioCollector();
    $email = $_SESSION['torres'];  
    $usuario = $usuarioCollector->showUsuarioPorEmail($email);
    $arrayPedido= array();   
    if($usuario->getRol() == 'A'){
        $rows = self::$db->getRows("SELECT * FROM pedido");                
        foreach ($rows as $c){
            $aux = new pedido($c{'id_pedido'},$c{'id_usuario'},$c{'pedido_reserva'},$c{'fecha'},$c{'estado'});
            array_push($arrayPedido, $aux);
        }
    }
    else{
        $id_usuario = $usuario->getId_usuario();
        $rows = self::$db->getRows("SELECT * FROM pedido WHERE id_usuario=$id_usuario");                
        foreach ($rows as $c){
            $aux = new pedido($c{'id_pedido'},$c{'id_usuario'},$c{'pedido_reserva'},$c{'fecha'},$c{'estado'});
            array_push($arrayPedido, $aux);
        }
    }  
    
    return $arrayPedido;        
  }
    
    function createPedido($id_usuario, $pedido_reserva,$estado) {
        $rows = self::$db->insertRow("INSERT INTO pedido (id_usuario,pedido_reserva,estado) VALUES ('$id_usuario', '$pedido_reserva','A')",null);
        
    }
    
    function updatePedido($id_pedido,$pedido_reserva,$estado2) {
        $rows = self::$db->updateRow("UPDATE pedido SET pedido_reserva='$pedido_reserva', estado='$estado2' WHERE id_pedido=$id_pedido", null);
        
    }
    
     function deletePedido($id) {
         $rows = self::$db->deleteRow("DELETE FROM pedido WHERE id_pedido=$id",null);
         
   
   }
    
    function deletePedidoPorUsuario($id) {
         $rows = self::$db->deleteRow("DELETE FROM pedido WHERE id_usuario=$id",null);
         
   
   }
    
    function consultarIdUsuario($email){
      $rows = self::$db->getRows("SELECT * FROM usuario WHERE usuario='$email'");
    foreach ($rows as $c){
      $idUsuario = $c{'id_usuario'};    
      return $idUsuario;
    }
    return 0;
  }  
    
    
  
 }
?>

