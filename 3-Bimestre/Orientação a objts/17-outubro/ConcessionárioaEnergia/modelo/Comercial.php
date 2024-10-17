<?php

require_once("IConsumidorEnergia.php");

class Comercial implements IConsumidorEnergia{
    //Atributo
    private $consumo;

    
    //Método
    public function getValorFatura(){
        if($this->consumo<100){
            $this->consumo = $this->consumo * 1.45;
        } else if($this->consumo>100){
            $this->consumo = $this->consumo * 1.60;
        }
        echo "O valor do consumo é de R$: " . $this->consumo . "\n";
        return $this->consumo;
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