<?php 
require_once("Veiculo.php");

class CarroPasseio extends Veiculo{
    private $qtdPassageiros;

    

    //Métodos:
    public function getDados(){
        
        $dados = "Modelo: " . $this->modelo . " |  Velocidade Max: " . $this->velocidadeMax . " | Cor: " . $this->cor . " | Quantidade de passageiros: " . $this->qtdPassageiros . "\n";

        echo $dados;
    }

    public function __toString()
    {
        
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
}