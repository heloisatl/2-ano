<?php

require_once("IConsumidorEnergia.php");

class Residencial implements IConsumidorEnergia{
    //Atributo
    private $consumo;

    
    //Método

    public function getValorFatura() {
        $valor = $this->consumo * 1.50;
        return $valor;
    }

    public function __toString() {
        return "O valor do consumo residencial é de R$: " . $this->getValorFatura() . "\n";
    }

    //Gets e Sets


    /**
     * Get the value of consumo
     */
    public function getConsumo()
    {
        return $this->consumo;
    }

    /**
     * Set the value of consumo
     */
    public function setConsumo($consumo): self
    {
        $this->consumo = $consumo;

        return $this;
    }
}
