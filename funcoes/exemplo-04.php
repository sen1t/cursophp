<?php
    function ola(){

        $argumentos = func_get_args();//O usuario defini a quantidade de parâmetros passados

        return $argumentos;
    }

    var_dump(ola("bomdia", "bota tarde"));
?>