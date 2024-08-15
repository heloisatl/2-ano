<?php

class Veiculo {
    private $capacidade;
    private $passagensVendidas = 0;

    public function __construct($capacidade) {
        $this->capacidade = $capacidade;
    }

    public function venderPassagem($quantidade) {
        if ($this->passagensVendidas + $quantidade <= $this->capacidade) {
            $this->passagensVendidas += $quantidade;
            return true;
        } else {
            return false;
        }
    }

    public function getCapacidade() {
        return $this->capacidade;
    }

    public function getPassagensVendidas() {
        return $this->passagensVendidas;
    }
}


function lerEntrada($prompt) {
    echo $prompt;
    return trim(fgets(STDIN));
}


$capacidade = (int) lerEntrada("Informe a capacidade do veículo: ");
$veiculo = new Veiculo($capacidade);

do {
    $quantidade = (int) lerEntrada("Quantas passagens você deseja comprar? (Digite 0 para sair): ");

    if ($quantidade == 0) {
        break;
    }

    if ($veiculo->venderPassagem($quantidade)) {
        echo "Passagens vendidas com sucesso!\n";
    } else {
        echo "Não foi possível vender as passagens. Capacidade máxima atingida.\n";
    }

} while (true);

echo "Encerrando o programa.\n";
?>
