<?php

class ImplementAlpha implements IMethodHolder {
  public function getInfo($info) {
    echo "This is NEWS! ".$info. "<br>";
  }

  public function sendInfo($info)
  {
    return $info;
  }

  public function calculate($firts, $second) {
    $calculate = $firts * $second;
    return $calculate;
  }

  public function useMethods() {
    $this->getInfo("The sky is falling...");
    echo $this->sendInfo("Vote for senator Snort!"). "<br/>";
    echo "You make $".$this->calculate(20,15) ." in your part-time job<br/>";
  }

}



?>