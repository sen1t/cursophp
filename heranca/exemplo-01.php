<?php
//Conceito de herança

class Documento{
    
    private $numero;

    public function getNumero()
    {
        return $this -> numero;
    }

    
    public function setNumero($n)
    {
        $this -> numero = $n;
    }
}

class CPF extends Documento{
     public function validar():bool
     {
        $numeroCPF = $this -> getNumero();
        //validação CPF
         return True;
     }
}

$doc = new CPF();

$doc -> setNumero("111111111-11");

var_dump($doc -> validar());
echo "<br>";
echo $doc -> getNumero();
?>