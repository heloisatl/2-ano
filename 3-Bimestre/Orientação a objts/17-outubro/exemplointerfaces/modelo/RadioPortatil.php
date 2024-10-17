<?php
require_once("IRadio.php");

class RadioPortatil implements IRadio{
    //Atributos
    
    private $cor;
    private $marca;

    //Métodos
    public function mostrarHoras(){
        echo date("H:m:s") . "\n";
    }
    public function ligarRadio(){
        echo "Rádio portátil ligado \n";
    }

    public function desligarRadio(){
        echo "Rádio portátil desligado \n";
    }


    //Gets e Sets

    /**
     * Get the value of cor
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor($cor): self
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }
}