<?php

require_once("modelo/RadioPortatil.php");
require_once("modelo/RadioRelogio.php");
//nao precisa require_once da interface, pq ela NÃO é classe

$tipo = readline("Defina se você tem um rádio portátil ou um rádio relógio." . "\n" . "Rádio Portátil: RP           " . "\n" . " Rádio Relógio: RR         ");
//$tipo = "RR";
//$tipo ="RP";

$radio = null;


if($tipo == "RP"){
    $radio = new RadioPortatil();
    $radio->setCor("Preto");
    $radio->setMarca("Livstar");
}else if($tipo == "RR"){
    $radio = new RadioRelogio();
    $radio->setCorTela("Vermelho");
}else{
    echo "Valor inválido";
}

$radio->ligarRadio();
$radio->desligarRadio();

if($radio instanceof IRelogio){
    $radio->mostrarHoras();
}
