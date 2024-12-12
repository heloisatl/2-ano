<?php

class Produto {
    protected $desc;
    protected $unidadeDeMedida;

    public function __construct($desc, $unidadeDeMedida) {
        $this->desc = $desc;
        $this->unidadeDeMedida = $unidadeDeMedida;
    }

    public function getDados(): string {
        return "descrição:" . $this->desc . ", unidade de medida: " . $this->unidadeDeMedida;
    }
}