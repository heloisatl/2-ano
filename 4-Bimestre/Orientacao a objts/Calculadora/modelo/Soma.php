<?php 
require_once("Calculadora.php");

class Soma extends Calculadora{
    //Atributos 

    //Métodos
    public function calcular(){
        return $this->numA + $this->numB;
    }
}