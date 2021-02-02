<?php

class carro{
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){
        return $this -> modelo;
    }

    
    public function setModelo($modelo){
        $this -> modelo = $modelo;
    }

    public function getMotor():float{
        return $this -> motor;
    }

    public function setMotor($motor){
        $this -> motor = $motor;

    }

    public function getAno():int{
        return $this -> ano;
    }

    public function setAno($ano){
        $this -> ano = $ano;

    }

    public function exibir(){
        return array(
            "modelo" => $this -> getModelo(),
            "motor"  => $this -> getMotor(),
            "ano"    => $this -> getAno()  
        );
    }//fim do metodo exibir
}//fim da classe 

$gol = new Carro();
$gol -> setModelo("Gol GTI");
$gol -> setAno("1992");
$gol -> setMotor("2.1");

var_dump($gol-> exibir());


?>