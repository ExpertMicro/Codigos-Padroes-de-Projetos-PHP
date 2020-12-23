<?php

// Essa classe tem como objetivo mostra a composição de uma assinatura ou seja o método trick().

ini_set("display_errors", "1");
ERROR_REPORTING(E_ALL);

class OneTrick {
  private $storeHere;
  public function trick($whatever) {
    $this->storeHere=$whatever;
    return $this->storeHere;
  }
}

//$doIt = new OneTrick();
//$dataNow = $doIt->trick("This is perfect.");
//echo $dataNow;

?>