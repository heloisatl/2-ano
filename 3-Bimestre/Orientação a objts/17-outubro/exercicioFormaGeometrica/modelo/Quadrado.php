<?php

require_once("IFormaGeometrica.php");

class Quadrado implements IformaGeometrica{
    //Atributos
    private $lado;

    //Métodos
    public function getArea(){
        $area = $this->lado * $this->lado;
        echo "A área do quadrado é:" . $area . "\n";
        return $area;
    }

    public function getDesenho(){
            
        echo "****************\n";
        echo "*              *\n";
        echo "*              *\n";
        echo "*              *\n";
        echo "*              *\n";
        echo "*              *\n";
        echo "*              *\n";
        echo "*              *\n";
        echo "*              *\n";
        echo "****************\n";


    }

    //Gets e Sets
    

    /**
     * Get the value of lado
     */
    public function getLado()
    {
        return $this->lado;
    }

    /**
     * Set the value of lado
     */
    public function setLado($lado): self
    {
        $this->lado = $lado;

        return $this;
    }
}