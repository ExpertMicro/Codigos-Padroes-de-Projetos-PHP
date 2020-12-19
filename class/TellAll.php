<?php

// Classe com uma única responsabilidade

class TellAll {
  private $userAgent;

  public function __construct() {
    $this->userAgent=$_SERVER['HTTP_USER_AGENT'];
    echo $this->userAgent;
  }
}

?>