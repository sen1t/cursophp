<?php
function soma(float ...$valores):float {// defini os valores esperados, e espera um array como parâmetro
    return array_sum($valores);//soma todos os valores de um array
}

echo var_dump(soma(2,2));//a funcão var_dump retorna os valores e o tipo de dado da variavel
echo "<br>";
echo soma(38,2);
echo "<br>";
echo soma(300,200);
echo "<br>";
echo soma(1.5,2.1);
?>