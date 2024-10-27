<?php

require_once("IConsumidorEnergia.php");

class Comercial implements IConsumidorEnergia{
    //Atributo
    private $consumo;

    
    //Método
    public function getValorFatura() {
        if ($this->consumo < 100) {
            $valor = $this->consumo * 1.45;
        } else {
            $valor = $this->consumo * 1.60;
        }
        return $valor;
    }

    public function __toString() {
        return "O valor do consumo comercial é de R$: " . $this->getValorFatura() . "\n";
    }

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
