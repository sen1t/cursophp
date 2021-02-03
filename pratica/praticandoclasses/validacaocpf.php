<?php
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
    public function validar()
    {
       $cpf = $this -> getNumero();
       if(empty($cpf)) {
        return $cpf." Não É válido!";
    }
 
    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    
    if (strlen($cpf) != 11) {
        return $cpf." Não É válido, pois tem mais ou menos caracteres";
    }
    
    else if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' || 
        $cpf == '44444444444' || 
        $cpf == '55555555555' || 
        $cpf == '66666666666' || 
        $cpf == '77777777777' || 
        $cpf == '88888888888' || 
        $cpf == '99999999999') {
        return $cpf." Não É válido!";

     } else {   
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return $cpf."Não É válido!";
            }
        }
 
        return $cpf." É válido!";
    }

        return $cpf." É válido!";
    }
}


$doc = new CPF();

$doc -> setNumero("002883918538");

print($doc -> validar());



?>