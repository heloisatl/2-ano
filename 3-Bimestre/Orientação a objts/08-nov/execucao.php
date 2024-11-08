<?php 
require_once("modelo/Combatente.php");
require_once("modelo/Curandeiro.php");
require_once("modelo/Mago.php");
require_once("modelo/Poder.php");

$arrayMagos = array();
$arrayPoder = array(
    new Poder("Recupera Energia", 0),
    new Poder("Recupera Energia Super", 20),
    new Poder("Golpe Normal", 0),
    new Poder("Golpe Especial", 0)
);


$Curandeiro1 = new Curandeiro();
$Curandeiro1->setNome("Magnus");
$Curandeiro1->setForcaDeCura(100);
$Curandeiro1->setPoder($arrayPoder[0]); 

$Curandeiro2 = new Curandeiro();
$Curandeiro2->setNome("Papus");
$Curandeiro2->setForcaDeCura(30);
$Curandeiro2->setPoder($arrayPoder[1]); 

$Combatente = new Combatente();
$Combatente->setNome("Ariano");
$Combatente->setForcaDeAtaque(70);
$Combatente->setPoder($arrayPoder[2]);


$Combatente1 = new Combatente();
$Combatente1->setNome("Ariano");
$Combatente1->setForcaDeAtaque(70);
$Combatente1->setPoder($arrayPoder[2]);

array_push($arrayMagos, $Curandeiro1);
array_push($arrayMagos, $Curandeiro2);
array_push($arrayMagos, $Combatente);
array_push($arrayMagos, $Combatente1);  



foreach ($arrayMagos as $key => $objtMago) {
    echo $objtMago->lancarPoder();
}

