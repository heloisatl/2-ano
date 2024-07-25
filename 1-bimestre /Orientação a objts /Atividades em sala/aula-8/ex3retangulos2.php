<?php

class Retangulo{

    //Atributos
    public $base, $altura;

    //Construtor
    function __construct($a=0,$b=0){
        $this->altura =  $a;
        $this->base = $b;
    }

    //Métodos
    function area(){
        echo "O valor da área é " , $this->base * $this->altura . "\n";
        return;
    }
    function perimetro(){
        echo "O valor do perímetro é " , $this->base + $this->base + $this->altura + $this->altura . "\n";
        return;
    }
}
//Programa principal
for ($i=0; $i < 3; $i++) { 

    $retangulo = new Retangulo($altura, $base);
    $retangulo->base = readline("Informe a base: ");
    $retangulo->altura = readline("Informe a altura: ");
    $retangulo-> area();
    $retangulo-> perimetro();

}