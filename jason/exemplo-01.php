<?php
    $pessoas = array();

    array_push($pessoas, array(
        'nome' => 'Joao',    
        'idade' => '20'

    ));

    array_push($pessoas, array(
        'nome' => 'perdo',    
        'idade' => '26'

    ));

    echo json_encode($pessoas);
?>