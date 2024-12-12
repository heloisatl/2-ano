<?php

require_once 'Produto.php';

class Computador extends Produto {
    private $processador;
    private $memoria;

    public function __construct($desc, $unidadeMedida, $processador, $memoria) {
        parent::__construct($desc, $unidadeMedida); 
        $this->processador = $processador;
        $this->memoria = $memoria;
    }

    public function getDados(): string {
        return parent::getDados() . ", Processador: " . $this->processador . ", Memória: " . $this->memoria;
    }
}