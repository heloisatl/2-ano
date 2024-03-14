<?php

/*function primo($num){
    for ($i = 2; $i <= sqrt($num); $i++){
        if ($num % $i == 0) {
            return false;
        }
    }
    return $num >= 2;
}

$aux = array(); 

do {
    $resp = readline("Digite um número: ");
    $num = intval($resp); 

    if ($num < 2) {
        break;
    }
    
    if (primo($num)) {
        array_push($aux, $num);
    } else {
        echo "$num não é primo.\n";
    }
} while (true);

    echo $aux; 
*/


function primo($num){
    for ($i = 2; $i <= sqrt($num); $i++){
        if ($num % $i == 0) {
            return false;
        }
    }
    return $num >= 2;
}

$aux = array(); 

do {
    $resp = readline("Digite um número: ");
    $num = intval($resp); 

    if ($num < 2) {
        break;
    }
    
    if (primo($num)) {
        array_push($aux, $num);
    } else {
        echo "$num não é primo.\n";
    }
} while (true);

echo "Números primos: ";
echo implode(", ", $aux);
echo ("\n");
