<?php 

require_once("modelo/Animal.php");
require_once("modelo/Gato.php");
require_once("modelo/Cachorro.php");

$gato = new Gato();
$gato->Miar();
$gato->setNome("mimo");
$gato->setRaca("Siamês");
$gato->getDados();



$gato2 = new Gato();
$gato2->setNome("mingau");
$gato2->setRaca("Sphynx");
$gato->Miar();
$gato2->getDados();

$cachorro = new Cachorro();
$cachorro->setNome("Scotty");
$cachorro->setRaca("Viralata");
$cachorro->Latir();
$cachorro->getDados();


$cachorro2 = new Cachorro();
$cachorro2->setNome("Fiona");
$cachorro2->setRaca("Viralata");
$cachorro->Latir();
$cachorro2->getDados();


