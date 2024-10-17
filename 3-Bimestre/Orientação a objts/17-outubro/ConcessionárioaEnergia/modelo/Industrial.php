<?php

require_once("IConsumidorEnergia.php");

class Industrial implements IConsumidorEnergia{
    //Atributo
    private $consumo;

    
    //Método
    public function getValorFatura(){
        if($this->consumo>100 && $this->consumo<500 ){
            $this->consumo = $this->consumo * 1.80;
        } else if($this->consumo>500){
            $this->consumo = $this->consumo * 2.30;
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