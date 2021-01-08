<?php

//implementando uma classe abstrata

class OneTrickConcrete extends OneTrickAbstract {
  public function trick($whatever)
  {
    $this->storeHere = "Abstract property";
    return $whatever . $this->storeHere;
  }
}

?>