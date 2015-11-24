<?php
require_once 'base_modelo.php';

class LoginModelo extends BaseModelo{

  function getPassword($email){
    $consulta = $this->db->prepare("SELECT password FROM usuario WHERE email=?");
    $consulta->execute(array($email));
    return $consulta->fetch();
  }

}
?>
