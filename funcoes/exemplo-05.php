<?php
$a= 10;//esse valor é global

function trocaValor(&$a){ //Parâmetro por referência |O que acontece na função fica na função!|
    $a += 50; //este valor é de escopo da variavel
    return $a;
}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;
?>