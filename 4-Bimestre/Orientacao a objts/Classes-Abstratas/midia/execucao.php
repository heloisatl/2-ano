<?php 

require_once("Modelo/CD.php");
require_once("Modelo/DVD.php");

$CD = new CD();
$CD->setNome("RHCP");
$CD->setPreco(5.50);
echo $CD . "\n";
//print_R($CD);

$dvd = new DVD();
$dvd->setNome("O Poderoso Chefão");
$dvd->setPreco(5.50);
echo $dvd . "\n";
