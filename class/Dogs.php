<?php


class Dogs extends FurryPets {

  function __construct()
  {
    echo "Dogs". $this->fourlegs(). "<br/>";
    echo $this->makeSound("Woof, woof") . "<br/>";
  }

  private function guardHouse() {
    return "Grrrr" . "<br/>";
  }
}


?>