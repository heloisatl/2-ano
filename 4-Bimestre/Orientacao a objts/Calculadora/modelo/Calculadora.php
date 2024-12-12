<?php 

abstract class Calculadora{
    //Atributos 
    protected $numA;
    protected $numB;


    //Metodos
    /*public function __toString()
    {
        return $this->numA . $this->numB;
    }*/

     public function __construct(int $numA, int $numB) {
        $this->numA = $numA;
        $this->numB = $numB;
    }

    abstract public function calcular();

    /**
     * Get the value of numA
     */
    public function getNumA()
    {
        return $this->numA;
    }

    /**
     * Set the value of numA
     */
    public function setNumA($numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    /**
     * Get the value of numB
     */
    public function getNumB()
    {
        return $this->numB;
    }

    /**
     * Set the value of numB
     */
    public function setNumB($numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}
