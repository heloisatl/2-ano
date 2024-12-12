<?php

class Midia {
    protected $desc;
    protected $preco;

    public function __construct($desc, $preco) {
        $this->desc = $desc;
        $this->preco = $preco;
    }

    public function getDados(): string {
        return "Descrição: " . $this->desc . " | Preço: R$ " . number_format($this->preco, 2, ",", ".");
    }

    public function getTipo() {
        return "tipo não especificado";
    }
}