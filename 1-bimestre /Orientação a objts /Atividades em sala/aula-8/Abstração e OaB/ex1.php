<?php

class Animal{

    //Atributos
    public $qtdPatas, $pele;

    //Construtor
    function __construct($qtdPatas, $pele)
    {
        $this->qtdPatas = $qtdPatas;
        $this->pele = $pele;
        echo "Este animal possui " . $qtdPatas . "patas e a pele é " . $pele . "\n";
    }

    //Métodos
    function emitirSons(){

    }

    function locomocao(){
        
    }
}