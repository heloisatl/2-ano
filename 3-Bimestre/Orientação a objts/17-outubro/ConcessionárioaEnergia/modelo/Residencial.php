<?php

require_once("IConsumidorEnergia.php");

class Residencial implements IConsumidorEnergia{
    //Atributo
    private $consumo;

    
    //Método

    public function getValorFatura(){
        $consumo = $this->consumo * 1.05;
        
        return $consumo;
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