<?php 

/*
  
  O uso da classe Client proporciona uma maneira de tornar a classe MobileSniffer mas útil. MobileSniffer não precisa iniciar a si mesmo, e usando uma instrução de retorno, qualquer classe que chamar MobileSniffer simplesmente obterá os dados.

*/

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