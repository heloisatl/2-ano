<?php

    function primo($num){
        for ($i = 2; $i <= sqrt($num); $i++){
            if ($num % $i == 0) {
                return false;
            }
        }
        return $num >= 2;
    }

    do {
        echo "Digite um número: ";
        $input = readline();
        if ($input < '2') {
            break;
        }
        $num = ($input);
        echo primo($num) ? "$num é primo.\n" : "$num não é primo.\n";
    } while (true);
