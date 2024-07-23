<?php

class Monitor {

    //Atributos
    public $cor;
    public $resolucao;
    public $marca;

    //Métodos
    function ligar(){
        echo "Computador ligado!\n";
    }
    function desligar(){
        echo "Computador desligado!\n";
    }
    function mostrarImagem(){
        echo "Computador mostrando imagem com a resolução ". $this->resolucao . " XX!\n";
    }
}
/*function ligar(){ 
    echo "Computador ligado!";
}
----Dentro de uma classe uma função vira MÉTODOS, fora da classe ela é FUNÇÃO---*/

//Programa principal
$monitor1 = new Monitor();
$monitor1 ->cor = "Preto";
$monitor1 ->resolucao ="1080x1920";
$monitor1 ->marca = "AOC";
$monitor1 ->ligar();
$monitor1 ->mostrarImagem();
$monitor1 ->desligar();


$monitor2 = new Monitor();
$monitor2 ->cor = "Vermelho";
$monitor2 ->resolucao ="1080x1920";
$monitor2 ->marca = "AOC";
$monitor2 ->ligar();
$monitor2 ->mostrarImagem();
$monitor2 ->desligar();
