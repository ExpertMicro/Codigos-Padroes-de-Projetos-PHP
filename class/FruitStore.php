<?php

class FruitStore implements IProduct {

  public function apples() {
    return "FruitStore sez--we have apples. <br/>";
  }

  public function oranges() {
    return "FruitStore sez--we have no citrus fruit. <br/>";
  }
}


?>