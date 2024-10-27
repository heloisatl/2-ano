<?php

require_once("modelo/Residencial.php");
require_once("modelo/Comercial.php");
require_once("modelo/Industrial.php");

echo "Escolha o tipo de consumo para calcular o valor da energia:\n1 - Residencial\n2 - Comercial\n3 - Industrial\n";
$escolha = readline("Digite a opção: ");

switch ($escolha) {
    case 1:
        $energia = new Residencial();
        break;
    case 2:
        $energia = new Comercial();
        break;
    case 3:
        $energia = new Industrial();
        break;
    default:
        echo "Opção inválida.\n";
    }

$energia->SetConsumo(readline("Qual o seu consumo em kWh?")) . "\n";
$energia->getValorFatura();

echo $energia->__toString() . "\n";
