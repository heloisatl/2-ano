<?php
class Carro {
    public $modelo;
    public $marca;
    public $anoFabricacao;
    public $velocidadeMax;

    
    public function __construct($modelo, $marca, $anoFabricacao, $velocidadeMax) {
        $this->modelo = readline("Qual o modelo do carro");
        $this->marca =  readline("Qual a marca do carro");
        $this->anoFabricacao =  readline("Qual o ano de fabricação do carro");
        $this->velocidadeMax =  readline("Qual a velocidade máxima do carro");
    }
}

function main() {
 
    $carro1 = new Carro("Modelo1", "Marca1", 2020, 180);
    $carro2 = new Carro("Modelo2", "Marca2", 2021, 220);
    $carro3 = new Carro("Modelo3", "Marca3", 2019, 150);


    $carros = [$carro1, $carro2, $carro3];

    $carroMaisRapido = $carros[0];
    $carroMaisLento = $carros[0];


    foreach ($carros as $carro) {
        if ($carro->velocidadeMax > $carroMaisRapido->velocidadeMax) {
            $carroMaisRapido = $carro;
        }
        if ($carro->velocidadeMax < $carroMaisLento->velocidadeMax) {
            $carroMaisLento = $carro;
        }
    }

    echo "O carro mais rápido é: {$carroMaisRapido->modelo}-{$carroMaisRapido->marca}, fabricado em {$carroMaisRapido->anoFabricacao}, com velocidade máxima de {$carroMaisRapido->velocidadeMax} km/h.\n";
    echo "O carro mais lento é: {$carroMaisLento->modelo}-{$carroMaisLento->marca}, fabricado em {$carroMaisLento->anoFabricacao}, com velocidade máxima de {$carroMaisLento->velocidadeMax} km/h.\n";
}


main();