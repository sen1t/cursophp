<?php
            $calculo = array();

            array_push($calculo,1.25,"+",250,"+",285);


            for ($i=0; $i < count($calculo); $i++) { 
                if($calculo[$i] == "+"){
                    $calculo[$i] = 0; 
                }

                

            }


               sarray_sum($calculo);
                print_r($calculo);
?>