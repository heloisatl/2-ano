<?php

require_once "modelo/CD.php";
require_once "modelo/DVD.php";

$midias = [];

for ($i = 0; $i < 5; $i++) {

    $tipo = readline("informe o tipo da mídia (CD/DVD): ");
    $desc = readline("informe a descrição: ");
    $preco = (readline("informe o preço pago: "));
    echo "\n\n";

    if (strtoupper($tipo) == "CD") {
        $midias[] = new CD($desc, $preco);
    } elseif (strtoupper($tipo) == "DVD") {
        $midias[] = new DVD($desc, $preco);
    } else {
        echo "Tipo invalido.\n";
        
    }
}

echo "\n============ Dados das mídias cadastradas ============\n";
foreach ($midias as $m) {
    echo $m->getDados() . " | tipo: " . $m->getTipo() . "\n";
}
