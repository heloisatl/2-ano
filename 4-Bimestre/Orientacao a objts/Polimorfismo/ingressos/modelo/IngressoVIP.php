<?php

require_once 'Ingresso.php';

class IngressoVIP extends Ingresso {
    protected $valorAdicional;

    public function __construct($valor, $valorAdicional) {
        parent::__construct($valor);  
        
        $this->valorAdicional = $valorAdicional;
    }

    public function getValorTotal() {
        return $this->valor + $this->valorAdicional;
    }
}