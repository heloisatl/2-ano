<?php
class Calculadora {
    private $numA;
    private $numB;

    public function __construct($a, $b) {
        $this->numA = $a;
        $this->numB = $b;
    }

    public function somar() {
        return $this->numA + $this->numB;
    }
    
    public function subtrair() {
        return $this->numA - $this->numB;
    }

    public function multiplicar() {
        return $this->numA * $this->numB;
    }

   
    public function dividir() {
        if ($this->numB != 0) {
            return intdiv($this->numA, $this->numB);
            return "Divisão por zero não permitida";
        }
    }

  
    public function resto() {
        if ($this->numB != 0) {
            return $this->numA % $this->numB;
        } else {
            return "Divisão por zero não permitida";
        }
    }
}

$numA = 10; 
$numB = 8; 

$calculadora = new Calculadora($numA, $numB);


echo "Soma: " . $calculadora->somar() . "<br>";
echo "Subtração: " . $calculadora->subtrair() . "<br>";
echo "Multiplicação: " . $calculadora->multiplicar() . "<br>";
echo "Divisão: " . $calculadora->dividir() . "<br>";
echo "Resto: " . $calculadora->resto() . "<br>";
?>
