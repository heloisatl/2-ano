<?php 
require_once("Calculadora.php");

class Subtracao extends Calculadora{
    //Atributos

    //Métodos
    public function calcular(){
        return $this->numA - $this->numB;
    }
}