<?php
  $json = '[
  {
    "nome": "Joao",
    "idade": "20"
  },
  {
    "nome": "perdo",
    "idade": "26"
  }
]';

    $Data = json_decode($json, TRUE);

    var_dump($Data);

?>