<?php 

require_once("Veiculo.php");

class Caminhao extends Veiculo{
    private $qtdCarga;
    private $altura;


    public function getDados(){
        
        $dados = "Modelo: " . $this->modelo . " |  Velocidade Max: " . $this->velocidadeMax . " | Cor: " . $this->cor . " | Quantidade de carga: " . $this->qtdCarga ." | Altura: " . $this->altura . "\n";

        echo $dados;
    }


    /**
     * Get the value of qtdCarga
     */
    public function getQtdCarga()
    {
        return $this->qtdCarga;
    }

    /**
     * Set the value of qtdCarga
     */
    public function setQtdCarga($qtdCarga): self
    {
        $this->qtdCarga = $qtdCarga;

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