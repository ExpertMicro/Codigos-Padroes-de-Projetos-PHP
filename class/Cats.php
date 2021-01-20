<?php



class Cats extends FurryPets {
  function __construct()
  {
    echo "Cats ". $this->fourlegs() . "<br/>";
    echo $this->makeSound("Meow, purrr") . "<br/>";
    echo $this->ownsHouse() . "<br/>";
  }

  private function ownsHouse() {
    return "I'll just walk on this keyboard," . "<br/>";
  }
}


?>