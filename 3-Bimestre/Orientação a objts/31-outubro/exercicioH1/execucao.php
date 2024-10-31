<?php 
/*
        $this->modelo = readline("Qual o modelo do carro?");
        $this->velocidadeMax = readline("Qual a velocidade máxima  do carro?");*/

require_once("modelo/CarroPasseio.php");
require_once("modelo/Caminhao.php");
require_once("modelo/Onibus.php");


$cp = new CarroPasseio();
$cp->setModelo("\n".readline("Qual o modelo do carro?"));
$cp->setVelocidadeMax(readline("Qual a velocidade máxima do veículo?"));
$cp->setCor(readline("Qual a cor do veículo?"));
$cp->setQtdPassageiros(readline("Qual a quantidade de passageiros?"));
$cp->getDados();


$c = new Caminhao;
$c->setModelo(readline("Qual o modelo do carro?"));
$c->setVelocidadeMax(readline("Qual a velocidade máxima do veículo?"));
$c->setCor(readline("Qual a cor do veículo?"));
$c->setQtdCarga(readline("Qual a carga?"));
$c->setAltura(readline("Qual a altura do veículo?"));
$c->getDados();

$bus = new Onibus();
$bus->setModelo(readline("Qual o modelo do carro?"));
$bus->setVelocidadeMax(readline("Qual a velocidade máxima do veículo
"));
$bus->setCor(readline("Qual a cor do veículo?"));
$bus->setQtdPassageiros(readline("Qual a quantidade de passageiros?"));
$bus->setPesoMax(readline("Qual o peso máximo?"));
$bus->getDados();
