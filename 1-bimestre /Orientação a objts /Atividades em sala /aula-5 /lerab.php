<?php

//Vetor A
function existe($vetor, $num){
    foreach($vetor as $v)
        if($v == $num)
        return true;
    return false;
}
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
$vetC = array();
foreach($vetA as $a);
    foreach($vetB as $b){
        if($a == $b);
        array_push($vetC, $a);
        break;
    }
    echo

$vetD = array();
foreach ($vetA as $a){
    array_push($vetD, $a);
    echo $a. "\n";;
}
foreach ($vetB as $b){
    array_push($vetD, $b);
    echo $b ."\n";}


