<?php

require_once 'Produto.php';

class Balde extends Produto {
    private $cap;

    public function __construct($desc, $unidadeMedida, $cap) {
        parent::__construct($desc, $unidadeMedida); 
        $this->cap = $cap;
    }

    public function getDados(): string {
        return parent::getDados() . ", capacidade: " . $this->cap;
    }
}