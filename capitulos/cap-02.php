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


* Indução de tipos: quase tipagem de dados
  -Um dos elementos estruturais importantes da abstração em POO e em padrões de projeto é a tipagem de dados usada em uma interface, em vez de usá-la em uma implementação. Isso significa que a referência ao dado é feita por meio da classe pai, tipicamente uma interface ou uma classe abstrata (nesse contexto interface é usada para referenciar tanto uma interface quanto uma classe abstrata).
  -A indução de tipo deve conter o nome de uma classe ou de uma interface. Ao trabalhar com padrões de projeto, uma classe abstrata ou interface é preferível porque ela não acoplará o tipo de uma implementação, somente a estrutura.
  -Em termos práticos, no que concerne ao desenvolvimento, reforçar os tipos de dados garante que qualquer objeto (classe) usado em conjunto com um dado método, no qual tenha sido usado código de indução de tipos, terá determinada interface. Além do mais, se uma interface (seja uma classe abstrata ou uma interface) for usada na indução de tipos, o acoplamento será muito mais fraco; estará ligado à interface, e não a uma implementação específica.
  -Não é possível usar tipos escalares, como string ou int para indução de tipo, mas você podera usar arrays, interfaces e classes.

  * Encapsulamento
  -Encapsulamento corresponde ao processo de compartimentar os elementos de uma abstração, os quais constituem sua estrutura e seu comportamento, o encapsulamento serve para separa a interface contratual de uma abstração de sua implementação.
  -Em PHP, o termo visibilidade refere-se ao acesso ás propriedades de uma classe (o termo acesso é usasdo em outras linguagens). Assim como em outras linguagens de POO, o PHP usa três tipos de visibilidade: privada(private), protegida(protected) e pública(public). As visibilidades são maneiras pelas quais os programas pder ser encapsulados e acessados.
  
  *Visibilidade Privada
    -A maneira mais fácil de encapsular um elemento de programa é torná-lo privado(private). Isso significa que a propriedade poderá ser acessada somente de dentro da mesma classe; ela será visível somente aos elementos da mesma classe.


  *Visibilidade Protegida
    -A visibilidade protegida(protected) permite acesso tanto à mesma classe quanto à classes filhas. Você pode incorporar a visibilidade protegida tanto em métodos abstratos quanto concretos.


  *Visibilidade Pública
    -O acesso a um objeto encapsulado é feito pro meio da visibilidade pública(public). Para ser útil, ao menos alguns dos métodos de uma classe devem ser visíveis, mesmo que seja somente a função construtora. É evidente que todos os métodos construtores são públicos.


  *Getters e setters
    -Para preservar o encapsulamento, ao mesmo tempo em que se provê acessibilidade, os projetos com POO sugerem o uso de getters e setters. Em geral, o uso de getters e setters deve ser feito de modo criterioso; o excesso pode violar o encapsulamento.


  *Herança
    -A herançã, em seu nível mais básico, é um conceito simples. Uma classe que estende outra classe terá todas as propriedades e métodos de outra classe. Isso permite aos desenvolvedores criar novas classes que estendam a funcionalidade de outras classes.

*/

?>
