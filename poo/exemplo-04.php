
<?php
        //METÓDO MÁGICO
    
    class Endereco{
         
         private $logradouro;
         private $numero;
         private $cidade;

        public function __construct($a, $b,$c){

             $this -> logradouro = $a;
             $this -> numero = $b;
             $this -> cidade = $c;
             
        }

        public function __destruct(){
            var_dump("Destruir");
        }

        public function __ToString(){
            return $this -> logradouro.", ". $this -> numero ." - ". $this -> cidade;
        }   
    }

 
 $meuEndereco = new Endereco("Rua b", 21, "Aracaju"); //Chama o metódo construct
 var_dump($meuEndereco);
 unset($meuEndereco);
 echo $meuEndereco;
?>