<?php 

// Habilita relatório de erros do arquivo php.ini
ini_set("display_errors", "1");
ERROR_REPORTING(E_ALL);

class Client {
  private $mobSniff;

  public function __construct()
  {
    $this->mobSniff = new MobileSniffer();
    echo "Device = ". $this->mobSniff->findDevice() . "<br/>";
    echo "Browser = ". $this->mobSniff->findBrowser() . "<br/>";
  }
}

?>