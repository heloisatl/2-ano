<?php

function primosss($num) {
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
    $entrada = readline("digite um número");
$entrada = []; 

$primos = [];

foreach ($entrada as $numero) {
    if (primosss($numero)) {
        $primos[] = $numero;
    }
}

echo "Números primos: ";
foreach ($primos as $primo) {
    echo $primo . " ";
}

?>
