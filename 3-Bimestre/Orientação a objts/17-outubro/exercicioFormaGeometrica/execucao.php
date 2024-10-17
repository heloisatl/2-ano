<?php

require_once("modelo/IFormaGeometrica.php");
require_once("modelo/Circulo.php");
require_once("modelo/Quadrado.php");
require_once("modelo/Retangulo.php");


echo("Escolha se você quer desenhar um Círculo, um Retângulo ou um Quadrado. \n1-Círulo-1\n2-Retângulo-2\n3-Quadrado-3\n");
$escolha = readline(" ");

$forma = null;
if($escolha ==1){
    $forma = new Circulo;
    $forma->setRaio(readline("Qual o raio do cícrulo?"));
} else if($escolha ==2){
    $forma = new Retangulo();
    $forma->setAltura(readline("Qual a altura do retângulo?\n"));
    $forma->setBase(readline("Qual a base do retângulo?\n"));
} else if($escolha ==3){
    $forma = new Quadrado();
    $forma->setLado(readline("Qual o lado do quadrado?\n"));
}else{
    echo"Valor inválido!!!!!";
    exit;
}

$forma->getDesenho(). "\n";
$forma->getArea(). "\n";

