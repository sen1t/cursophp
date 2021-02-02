<?php

class Pessoa{

    public $nome;//Atributo publico

    public function falar(){ //Método, Função dentro de uma classe!

        return "O meu nome é ".$this->nome;

    }

}

$gabriel = new Pessoa();//Cria um objeto dentro da classe pessoa
$gabriel -> nome = "Gabriel Siqueira";//instancia a classe!
echo $gabriel -> falar();//Chama a função

?>