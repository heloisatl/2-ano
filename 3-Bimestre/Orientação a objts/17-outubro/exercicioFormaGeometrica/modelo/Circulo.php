<?php
require_once("IFormaGeometrica.php");

class Circulo implements IFormaGeometrica{

    //Atributos
    private $raio;

    //Métodos
    public function getArea(){
        $area = 3.14 * ($this->raio * $this->raio);
        
        echo "A área do círculo é:" . $area . "\n";
        return $area;
    }
    public function getDesenho(){

        echo "        ****        \n";
        echo "     **      **     \n";
        echo "   **          **   \n";
        echo "  *              *  \n";
        echo " *                * \n";
        echo " *                * \n";
        echo " *                * \n";
        echo "  *              *  \n";
        echo "   **          **   \n";
        echo "     **      **     \n";
        echo "        ****        \n";
        
                                                                                                                                            
    }


    //Gets e Sets

    /**
     * Get the value of raio
     */
    public function getRaio()
    {
        return $this->raio;
    }

    /**
     * Set the value of raio
     */
    public function setRaio($raio): self
    {
        $this->raio = $raio;

        return $this;
    }


}