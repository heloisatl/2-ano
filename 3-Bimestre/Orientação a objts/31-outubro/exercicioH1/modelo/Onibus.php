<?php 
require_once("Veiculo.php");

class Onibus extends Veiculo{
    private $qtdPassageiros;
    private $pesoMax;


    //Métodos:
    public function getDados(){
            
        $dados = "\nModelo: " . $this->modelo . " |  Velocidade Max: " . $this->velocidadeMax . " | Cor: " . $this->cor . " | Quantidade de passageiros: " . $this->qtdPassageiros . " | Peso máximo: " . $this->pesoMax . "\n";

        echo $dados;
    }

    

    /**
     * Get the value of qtdPassageiros
     */
    public function getQtdPassageiros()
    {
        return $this->qtdPassageiros;
    }

    /**
     * Set the value of qtdPassageiros
     */
    public function setQtdPassageiros($qtdPassageiros): self
    {
        $this->qtdPassageiros = $qtdPassageiros;

        return $this;
    }

    /**
     * Get the value of pesoMax
     */
    public function getPesoMax()
    {
        return $this->pesoMax;
    }

    /**
     * Set the value of pesoMax
     */
    public function setPesoMax($pesoMax): self
    {
        $this->pesoMax = $pesoMax;

        return $this;
    }
}