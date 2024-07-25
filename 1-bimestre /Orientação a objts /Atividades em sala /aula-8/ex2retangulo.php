<?php

class Retangulo{
    public $base, $altura;


    function area(){
        echo "O valor da área é " , $this->base * $this->altura . "\n";
    }
    function perimetro(){
        echo "O valor do perímetro é " , $this->base + $this->base + $this->altura + $this->altura . "\n";
    }
}

$retangulo1 = new Retangulo();
$retangulo1->base = readline("Informe a base: ");
$retangulo1->altura = readline("Informe a altura: ");
$retangulo1-> area();
$retangulo1-> perimetro();

$retangulo2 = new Retangulo();
$retangulo2->base = readline("Informe a base: ");
$retangulo2->altura = readline("Informe a altura: ");
$retangulo2-> area();
$retangulo2-> perimetro();

$retangulo3 = new Retangulo();
$retangulo3->base = readline("Informe a base: ");
$retangulo3->altura = readline("Informe a altura: ");
$retangulo3-> area();
$retangulo3-> perimetro();