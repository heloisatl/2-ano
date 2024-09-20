<?php

require_once ("modelos/Cidade.php");
require_once ("modelos/Estado.php");

//Criar estado
$sc = new Estado();
$sc->setNome("Santa Catarina");
$sc->setSigla("SC");

$pr = new Estado();
$pr->setNome("Paraná");
$pr->setSigla("PR");
//print_r($estado);

//Criar  cidade
$arraycidade = array();
$cidade = new Cidade();
$cidade->setNome("Florianópolis");$cidade->setQtdHabitantes(80000);$cidade->setAltitude(80234);$cidade->setEstado($sc);
array_push($arraycidade, $cidade);

$cidade = new Cidade();
$cidade->setNome("Blumenau");$cidade->setQtdHabitantes(80000);$cidade->setAltitude(80234);$cidade->setEstado($sc);
array_push($arraycidade, $cidade);

$cidade = new Cidade();
$cidade->setNome("Foz do Iguaçu");$cidade->setQtdHabitantes(80000);$cidade->setAltitude(80234);$cidade->setEstado($pr);
array_push($arraycidade, $cidade);

$cidade = new Cidade();
$cidade->setNome("Casvavel");$cidade->setQtdHabitantes(8);$cidade->setAltitude(20);$cidade->setEstado($pr);
array_push($arraycidade, $cidade);

//print_r($arraycidade);

echo "\n\n";
foreach ($arraycidade as $cidade) {
    echo "A cidade de " . $cidade->getNome() . ", localizada no estado de " . $cidade->getEstado()->getNome() . "-" . $cidade->getEstado()->getSigla() . " possui " . $cidade->getQtdHabitantes() . " habitantes e uma altitude de " . $cidade->getAltitude(). " metros." ."\n";
}

echo "\n\n";

//print_r($cidade);




