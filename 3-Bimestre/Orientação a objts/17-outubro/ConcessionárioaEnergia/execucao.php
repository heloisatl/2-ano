<?php

require_once("modelo/Comercial.php");
require_once("modelo/Industrial.php");
require_once("modelo/Residencial.php");

echo("Escolha se você quer calcular o valor da energia Residencial, Comercial ou Industrial \n1-Residencial-1\n2-Comercial-2\n3-Industrial-3\n");
$escolha = readline(" ");

if($escolha ==1){
    $energia = new Residencial();

}else if($escolha ==2){
    $energia = new Comercial();

}else if($escolha ==3){
    $energia = new Industrial();
    
}

$energia->SetConsumo(readline("Qual o seu consumo em kWh?")) . "\n";
$energia->getValorFatura();