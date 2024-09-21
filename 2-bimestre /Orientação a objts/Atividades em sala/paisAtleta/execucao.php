<?php

require_once("modelo/Atleta.php");
require_once("modelo/Pais.php");

$pais1 = new Pais;
$pais1->setNome("Brasil");
$pais1->setContinente("Amds");

$pais2 = new Pais;
$pais2->setNome("Paraguai");
$pais2->setContinente("Amds");

$arrayAtletas = array();

$atleta = new Atleta;
$atleta->setEsporte("volei");
$atleta->setNome("João");
$atleta->setPais($pais2);
$atleta->setIdade(12);
array_push($arrayAtletas, $atleta);

$atleta = new Atleta;
$atleta->setEsporte("volei");
$atleta->setNome("JOAM");
$atleta->setPais($pais1);
$atleta->setIdade(12);
array_push($arrayAtletas, $atleta);

$atleta = new Atleta;
$atleta->setEsporte("volei");
$atleta->setNome("JOtinha");
$atleta->setPais($pais2);
$atleta->setIdade(12);
array_push($arrayAtletas, $atleta);

$atleta = new Atleta;
$atleta->setEsporte("volei");
$atleta->setNome("Jao");
$atleta->setPais($pais1);
$atleta->setIdade(12);
array_push($arrayAtletas, $atleta);
//print_r($arrayAtletas);

foreach ($arrayAtletas as $atleta) { 
    $Pais = $atleta->getPais();  
    print($atleta->getNome() . " é atleta do " . $Pais->getNome() . ", continente " . $Pais->getContinente() . ", possui " . $atleta->getIdade() . " anos e atua no esporte " . $atleta->getEsporte() . "\n");
}


