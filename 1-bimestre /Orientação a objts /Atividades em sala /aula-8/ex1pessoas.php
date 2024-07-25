<?php

class Pessoa{
    public $nome, $endereco, $cidade, $UF, $altura;



    function falarOla(){
        echo "Olá mundo, sou eu " . $this->nome . "\n";
    }
    function falarEndereco(){
        echo "Moro em " . $this->endereco . " " . $this->cidade . "/" . $this->UF. "!\n";
    }
    function falarAltura(){
        echo "tenho " . $this->altura . " metros!\n";
    }
}

$pessoa1 = new Pessoa($nome);
$pessoa1->nome = readline("Informe o nome: ");
$pessoa1->endereco = readline("Informe o endereço: ");
$pessoa1->cidade = readline("Informe a sua cidade: ");
$pessoa1->UF = readline("Informe o seu UF: ");
$pessoa1->altura = readline("Informe a sua altura em metros: ");
$pessoa1->falarOla();
$pessoa1->falarEndereco();
$pessoa1->falarAltura();