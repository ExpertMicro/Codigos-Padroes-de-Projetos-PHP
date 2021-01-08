<?php
/* 

# Anotações do livro Padrões de Projetos em PHP - William Sanders **

<---  Capítulo 02 - Conceitos Básicos de POO --->

* Função construtora -> A função construtora em uma classe é iniciada automaticamente, assim que a classe for instanciada.

*Propriedade -> Uma variável que faça parte de uma classe é uma propriedade (variáveis e constantes).

*Métodos -> Referem-se a funções(operações sobre dados).

* Abstração -> Uma abstração denota as características essenciais de um obejto que distingue de todos os demais tipos de objetos e, desse modo, proporciona limites conceituais claramente definidos em relação à perspectiva de quem visualiza.
Abstração é a ferramenta principal para lidar com a complexidade.Quanto mais complexo for um problema, mais abstrações serão necessárias para solucioná-lo.

* Classe abstrata -> Uma classe abstrata é uma classe que contém pelo menos um método abstrato. Um método abstrato é um método declarado, mas não implementado.
  - Uma classe abstrata não pode ser instanciada; em vez disso, uma classe concreta (uma classe que pode instanciar) herda a interface de uma classe abstrata, bem como qualquer uma de suas propriedades concretas.



* Interface ->
  - A parte central de uma interface é composta de todas as assinaturas da classe, definidas pelas suas operações (funções). Uma assinatura consiste do nome e dos parâmetros de uma operação. As assinaturas também incluem o tipo de dado retornado, porém, em virtude da natureza da tipagem de dados em PHP, teremos que retornar a esse terceiro elemento de uma assinatura posteriormente, na seção "Indução de tipos: quase tipagem de dados".
  - Se considerarmos todas as assinaturas de um objeto, elas corresponderão à interface. Por exemplo, a classe OneTrick possui uma operação com uma assinatura composta pelo nome trick() e por um único parâmetro, $whatever.
  -Assim como a maioria das classes abstratas, as interfaces possuem métodos abstratos. Porém você não pode incluir métodos concretos ou variáveis em uma interface, assim como faria com as classes abstratas (como exceção à abstração, você incluir constantes concretas em uma interface, mas essa é uma característica singulas das interfaces do PHP).
  -Para cria uma interface, use a instrução interface. Como convenção geral, as interfaces começam com a letra I.
  -Embora seja possível incluir variáveis em interfaces, você podera incluir constantes. Pra usar constantes é necessário usar o operador de resolução de escopo (::). Este operador pode ser usado para permitir acesso a constantes, tanto em classes quanto por meio de uma implementação da interface. Exemplo:
        ~  $someVariable = InterfaceName::SOME_CONSTANT;



* Propriedade e métodos abstratos
  -Para escrever a funcção trick() como abstrata, inclua somente a interface:
    ~ abstract public function trick($whatever); ~
  -Se uma classe tiver pelo menos um método abstrato, ela será uma classe abstrata. No entato, uma classe abstrata também poderá ter métodos concretos.
  -Se você declarar um método abstrato em uma classe abstrata, será necessário implementá-lo em cada uma das classes filhas, que herdam da classe pai.
  -Uma classe que herda de outra classe é uma classe filha, e a classe abstrata (ou qualquer outra classe da qual outra classe herda) é a classe pai.


*/

?>
