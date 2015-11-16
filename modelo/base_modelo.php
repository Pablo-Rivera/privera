<?php
class BaseModelo {
  protected $db;

  function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=web2;charset=utf8', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
}
 ?>
