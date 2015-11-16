<?php

abstract class ApiBase{

  protected $method = '';
  protected $endpoint = '';
  protected $args = array();

  function __construct($request){
    header("Content-Type: application/json");
    $this->args = explode('/', rtrim($request, '/')); // tarea/123 [tarea,123]
    $this->endpoint = array_shift($this->args); //Saca el primer elemento y lo retorna
    $this->method = $_SERVER['REQUEST_METHOD'];
  }
  private function _response($data, $status = 200) {
      header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
      return json_encode($data);
  }

  public function processAPI() {
      if (method_exists($this, $this->endpoint)) {
          return $this->_response($this->{$this->endpoint}($this->args));
      }
      return $this->_response("No Endpoint: $this->endpoint", 404);
  }

  private function _requestStatus($code){
    $status = array(
      200 => "OK",
      404 => "Not found",
      500 => "Internal Server Error"
    );
    return ($status[$code])? $status[$code] : $status[500];
  }

}

 ?>
