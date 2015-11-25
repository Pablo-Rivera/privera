<?php
class MailModelo{

  function enviarMail(){
    $para      = $_POST['email'];
    $titulo    = "Peticion de: " . $_POST['nombre'];
    $mensaje   = $_POST['comentario'];
    $cabeceras = 'From: '.$_POST['email'] . phpversion();

    if (mail($para, $titulo, $mensaje, $cabeceras))
      return "success";
    else {
      return "error";
    }

  }
}
 ?>
