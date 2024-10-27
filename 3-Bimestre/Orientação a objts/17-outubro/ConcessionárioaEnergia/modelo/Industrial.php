<?php

require_once("IConsumidorEnergia.php");

class Industrial implements IConsumidorEnergia{
    //Atributo
    private $consumo;

    
    //Método
    public function getValorFatura() {
        if ($this->consumo > 100 && $this->consumo < 500) {
            $valor = $this->consumo * 1.80;
        } else if ($this->consumo >= 500) {
            $valor = $this->consumo * 2.30;
        }
        return $valor;
    }

    public function __toString() {
        return "O valor do consumo industrial é de R$: " . $this->getValorFatura() . "\n";
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
