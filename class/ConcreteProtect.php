<?php

class ConcreteProtect extends ProtectVis {
  function __construct()
  {
    $this->countMoney();
  }

  protected function countMoney()
  {
    $this->wage = "Your hourly wage is $";
    echo $this->wage . $this->setHourly(36);
  }
}


?>