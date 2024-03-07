<?php

$vetor = array();
$media = 0;
    
    for ($i=0; $i <10 ; $i++) { 
        $num = readline("Informe um número ");
        array_push($vetor, $num);
        $media = $vetor[$i] + $media;   
    }

$media = $media / count($vetor);
    echo "A média é" . $media . "\n";

    //ou

$numeros = array();

for ($i=0; $i <=10 ; $i++) { 
    $num = readline("Informe um número [" . $i . "]: ");
    array_push($numeros, $num);    
}
$soma = 0;
foreach($numeros as $num)
    $soma += $num;
$media = $soma / count ($numeros);
echo "A méida dos elementos do vetor é: " . $media . "\n";
