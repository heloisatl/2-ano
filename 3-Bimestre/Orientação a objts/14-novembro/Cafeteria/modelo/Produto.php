<?php 
require_once("Pedido.php");
require_once("Comida.php");


class Produto extends Pedido{

    //Atributos
    private Comida $comida;
    private Bebida $bebida;
    private float $valor;
    private string $nome;


    //Gets e Sets
    /**
     * Get the value of comida
     */
    public function getComida(): Comida
    {
        return $this->comida;
    }

    /**
     * Set the value of comida
     */
    public function setComida(Comida $comida): self
    {
        $this->comida = $comida;

        return $this;
    }

    /**
     * Get the value of bebida
     */
    public function getBebida(): Bebida
    {
        return $this->bebida;
    }

    /**
     * Set the value of bebida
     */
    public function setBebida(Bebida $bebida): self
    {
        $this->bebida = $bebida;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}