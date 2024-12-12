<?php

require_once 'IngressoVIP.php';

class IngressoCamarote extends IngressoVIP {
    protected $valorAdicionalCamarote;

    public function __construct($valor, $valorAdicional, $valorAdicionalCamarote) {
        parent::__construct($valor, $valorAdicional); 

        $this->valorAdicionalCamarote = $valorAdicionalCamarote;
    }

    public function getValorTotal() {
        return parent::getValorTotal() + $this->valorAdicionalCamarote; 
    }
}