<?php

class ConSQL implements IconnectInfo {
  //passando valores usando o operador de resolução de escopo
  private $server = IconnectInfo::HOST;
  private $currentDB = IconnectInfo::DBNAME;
  private $user = IconnectInfo::UNAME;
  private $pass = IconnectInfo::PW;
  
  public function testConnection()
  {
    $hookup = new mysqli($this->server, $this->user, $this->pass, $this->currentDB);

    if (mysqli_connect_error()) {
      die('bad mojo');
    }

    print "You're hooked up Ace! <br/>" . $hookup->host_info;
  }
}



?>