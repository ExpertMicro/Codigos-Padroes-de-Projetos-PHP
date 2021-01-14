<?php

class UseProducts {
  public function __construct()
  {
    $appleSauce = new FruitStore();
    $orangeJuice = new CitrusStore();
    $this->doInterface($appleSauce);
    $this->doInterface($orangeJuice);
  }

  //IProduct induz o tipo em doInterface()
  function doInterface(IProduct $product) {
    echo $product->apples();
    echo $product->oranges();
  }
}

//$worker = new UseProducts();
//echo $worker;

//O que você vera na tela são diferentes implementações da interface IProduct. O traço fundamental a ser observado é que no método doInterface(), a indução de tipo para IProduct faz com que ambas as classes que implementam a interface IProduct sejam reconhecidas. Em outras palavras em vez de reconhencer uma como instância de FruitStore e outra como instância de CitrusStore, ela reconhece a interface IProduct comum a ambas.


?>