<?php
function soma(int ...$valores){// defini os valores esperados, e espera um array como parâmetro
    return array_sum($valores);
}

echo soma(2,2);
echo "<br>";
echo soma(38,2);
echo "<br>";
echo soma(300,200);
echo "<br>";
echo soma(1.5,2.1);
?>