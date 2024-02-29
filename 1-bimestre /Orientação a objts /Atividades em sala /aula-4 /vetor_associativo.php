<?php

$assoc = array("nome" => "Helo" , "idade" => 15, "profissão" => "rg");
$assoc2 = array("nome" => "alguem" , "idade" => 13, "profissão" => "nenhuma");

$pessoas = array($assoc , $assoc2);
print_r ($pessoas);

echo $pessoas[0] ["profissão]"] . \n

foreach($assoc as $c => $dado) {
    echo $dado . "\n";
}
/*$assoc ["altura"] . = 1.70;
echo $assoc["idade"] . "\n";
echo $assoc["altura"] . "\n";
*/
