<?php
require_once("IFormaGeometrica.php");

class Retangulo implements IformaGeometrica{

    //Atributos
    private $base;
    private $altura;

    //Métodos
    public function getArea(){
        $area = $this->base * $this->altura;
        echo "A área do retângulo é:" . $area . "\n";
        return $area;
    }
    public function getDesenho(){
        
        echo "********************\n";
        echo "*                  *\n";
        echo "*                  *\n";
        echo "*                  *\n";
        echo "*                  *\n";
        echo "*                  *\n";
        echo "*                  *\n";
        echo "*                  *\n";
        echo "*                  *\n";
        echo "********************\n";
        
        

    }


    //Gets e Sets

    /**
     * Get the value of base
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set the value of base
     */
    public function setBase($base): self
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}
/*
┌───────────────────────────────────┐
│                                   │
│                                   │
│                                   │
│                                   │
└───────────────────────────────────┘ */