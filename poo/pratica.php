<?php
class produtos{

    private $nome;
    private $valor;
    private $descricao;

    public function getNome(){
        return $this -> nome;
    }

    public function setNome($nome){
        $this -> nome = $nome;
    }

    public function getValor():float{
        return $this -> valor;
    }

    public function setValor($valor){
        $this -> valor = $valor;
    }

    public function getDescricao(){
        return $this -> descricao;
    }

    public function setDescricao($descricao){
        $this -> descricao = $descricao;
    }

    public function exibi(){
        return array(
            "nome" => $this -> getNome(),
            "valor" => $this -> getValor(),
            "descrição" => $this -> getDescricao()
        );
    }    
}


$overpass = "olá pessoas";
$lavanda = new produtos();
$lavanda -> setNome($overpass);
$lavanda -> setValor("5.98");
$lavanda -> setDescricao("Produto de ótima qualidade");

print_r($lavanda -> exibi());
?>