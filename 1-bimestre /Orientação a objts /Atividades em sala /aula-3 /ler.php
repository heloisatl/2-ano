<?php

$num = 0;
    lendo($num);

    function lendo($num){
        $num = readline ("Digite um número: ");
        if ( $num % 2 == 0){
            print ("Verdadeiro\n");
        }
        else {
            print ("Falso\n");
        }
        while($num != 0){
        lendo($num);
    }
    }

