<?php

//Vetor A

$vetA = array();
echo"Informe os elementos de A: \n";
for ($i=0; $i < 5; $i++) { 
    $num = readline ("Informe um número: "); 
    array_push($vetA, $num);
}
$vetB = array();
echo"Informe os elementos de B: \n";
for ($i=0; $i < 5; $i++) { 
    $num = readline ("Informe um número: "); 
    array_push($vetB, $num);
}

$vetD = array();
foreach ($vetA as $a){
    array_push($vetD, $a);
    echo $a. "\n";;
}
foreach ($vetB as $b){
    array_push($vetD, $b);
    echo $b ."\n";}

