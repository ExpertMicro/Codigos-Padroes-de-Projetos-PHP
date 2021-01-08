<?php
require_once("config.php");

// Para rodar o programa localmente -> php -S localhost:8000

//$tellAll = new TellAll();
//$trigger = new Client();

//$doIt = new OneTrick();
//$dataNow = $doIt->trick("This is perfect.");
//echo $dataNow;

//$worker = new OneTrickConcrete();
//echo $worker->trick("From an abstract origin...");

//$worker = new ImplementAlpha();
//$worker->useMethods();

$useConstant = new ConSQL();
$useConstant->testConnection();

?>