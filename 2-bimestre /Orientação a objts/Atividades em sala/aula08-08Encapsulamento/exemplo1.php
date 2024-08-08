<?php

class Liquidificador
{

    //Atributos         No encapsulamento, todos os atributos são privados 
    private $cor;
    private $marca;
    private $voltagem;
    private $capacidade;

    //Construitor
    /*public function __construct()
    {
        $this->cor = $cor;
    }*/

    //Métodos
    public function ligar()
    {
        echo "LIGADO\n";
        $this->girarMotor();
    }

    public function desligar()
    {
        echo "DESLIGADO\n";
        $this->pararMotor();
    }

    public function inverter()
    {
        echo "Motor Invertido\n";
    }

    private function girarMotor()
    {
        echo "Motor Girando\n";
    }

    private function pararMotor()
    {
        echo "Motor Parado\n";
    }

    //GET E SET

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

    /**
     * Get the value of voltagem
     */
    public function getVoltagem()
    {
        return $this->voltagem;
    }

    /**
     * Set the value of voltagem
     */
    public function setVoltagem($voltagem): self
    {
        $this->voltagem = $voltagem;

        return $this;
    }

    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }
} //Fim da classe liquidficador

//Programa Pirncipal
$liq = new Liquidificador("Vermelho");
$liq->ligar();
$liq->desligar();
echo "A cor do liquidificador é: " . $liq->getCor() . ".\n";
$liq->setMarca("Britania");
print_r($liq);
