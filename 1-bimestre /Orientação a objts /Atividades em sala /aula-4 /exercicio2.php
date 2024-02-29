<?php

$pessoa = array ("nome" => "Manuel de Medeiros" , "Endereço" => "Rua das Acácias" , "Cidade" => "Foz do Iguaçu" , "UF" => "PR");
$pessoa1 = array ("nome" => "Juliana de Amaral" , "Endereço" => "Rua dos Pinheiros" , "Cidade" => "Florianópolis" , "UF" => "SC");
$pessoa2 = array ("nome" => "Rodrigo Baidek" , "Endereço" => "Rua Dom Pedro |" , "Cidade" => "Petrópolis" , "UF" => "RJ");
$pessoa3 = array ("nome" => "Fabíola da Silva" , "Endereço" => "Rua Chile" , "Cidade" => "Guarulhos" , "UF" => "SP");

$pessoas = array($pessoa, $pessoa1, $pessoa2, $pessoa3);

foreach($pessoas as $p){

    /*echo $p["nome"] . "|" . $p["Endereço"] . "|" . $p["Cidade"] . "|" . $p["UF"] . "\n";
    */
    foreach($p as $dado){
        echo $dado . "|";
    }
    echo "\n";

    
}
