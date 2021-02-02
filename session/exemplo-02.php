<?php
    require_once("config.php");

    session_unset();

    if(isset($_SESSION['nome'])){

        echo $_SESSION['nome'];

    }else{

        echo "Sessão nao iniciada";

    }

    session_destroy();
?>