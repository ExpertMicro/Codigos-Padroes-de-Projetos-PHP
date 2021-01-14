<?php

class CitrusStore implements IProduct {

  public function apples() {
    return "CitrusStore sez--we do not sell apples. <br/>";
  }

  public function oranges() {
    return "Citrus sez--we have citrus fruit. <br/>";
  }
}


?>