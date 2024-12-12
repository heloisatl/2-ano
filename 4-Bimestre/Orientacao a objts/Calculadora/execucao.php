<?php
require_once("modelo/Divisao.php");
require_once("modelo/Multiplicacao.php");
require_once("modelo/Resto.php");
require_once("modelo/Soma.php");
require_once("modelo/Subtracao.php");
require_once("modelo/Calculadora.php");

$escolha = 0;
while(true){


    $numA = readline("Informe o primeiro número (Ou pressione 0 para sair): \n");
    $numB = readline("Informe o segundo número(Ou pressione 0 para sair): \n");


    if ($numA == 0 && $numB == 0) {
        break;
    }

    echo "______MENU______\n";
    echo "1-----Soma-----1\n";
    echo "2---Subtração---2\n";
    echo "3----Divisao----3\n";
    echo "4--Multiplicação--4\n";
    echo "5-----Resto-----5\n";

    $escolha = readline("Escolha uma das opções acima: \n");



    switch ($escolha) {
        case 1:
            $calc = new Soma($numA, $numB);
            break;
        case 2:
            $calc = new Subtracao($numA, $numB);
            break;
        case 3:
            $calc = new Divisao($numA, $numB);
            break;
        case 4:
            $calc = new Multiplicacao($numA, $numB);
            break;
        case 5:
            $calc = new Resto($numA, $numB);
            break;

        default:
            echo "Escolha um número válido!!!!\n";
    }

    $re = $calc->calcular();
    echo "O resultado é: " . $re . "\n\n";
} 
