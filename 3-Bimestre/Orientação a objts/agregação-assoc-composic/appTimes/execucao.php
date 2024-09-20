<?php

require_once("modelo/time.php");
require_once("modelo/jogador.php");

/*Criar objeto TIME*/
$time = new Time();
$time->setNome("Grêmio");
$time->setCidade("Porto Alegre");


//Criar o objeto jogador
$suarez = new Jogador();
$suarez->setNome("Luis Suarez");
$suarez->setNumero(9);
$suarez->setTime($time);

$geromel = new Jogador();
$geromel->setNome("Pedro Geromel");
$geromel->setNumero(4);
$geromel->setTime($time);

$jogadores = array();
array_push($jogadores , $suarez);
array_push($jogadores , $geromel);
$time->setJogadores($jogadores);

print_r($time->getJogadores());

/*Imprimir o nome do time do jogador Suarez
echo $suarez->getTime()->getNome() . "\n";
$t = $suarez->getTime();
echo $t->getCidade() . "\n";
*/