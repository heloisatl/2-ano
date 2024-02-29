<?php

function imprimeVetor($vet){
  foreach($vet as $f)
       echo $f . "|";
    echo "\n";
}  
$f1 = array ("Mclaren", "Willians", "Rbr" , "Ferrari" , "Minardi");
$times = array ("Grêmio", "Palmeiras", "Inter", "SP", "Bahia");
$frutas = array ("Maçã", "Uva", "Laranja", "Limão", "Abacate");
$alunos = array("Guilherme", "Petrus", "Rebeca", "Maria", "Felipe");

imprimeVetor($fi);
imprimeVetor($times);
imprimeVetor($frutas);
imprimeVetor($alunos);
