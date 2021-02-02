<?php
        require_once("config.php");

        echo session_save_path();

        var_dump(session_status());


        switch(session_status()){
                case PHP_SESSION_DISABLED:
                    echo "desabvDADad";
                    case PHP_SESSION_NONE:
                        echo "NNNN";
                        case PHP_SESSION_ACTIVE:
                            echo "AAAA";
                                
        }
?>