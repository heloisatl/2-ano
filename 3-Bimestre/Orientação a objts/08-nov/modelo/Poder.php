<?php

class Poder {

    private string $descricao;
    private int $forca;

    //Métodos

    public function __construct($descricao, $forca)
    {
        $this->descricao = $descricao;
        $this->forca = $forca;
    }
    public function __toString()
    {
        $texto = $this->getDescricao() ." " . $this->getForca();
        return $texto;
    }

    public function getForcaTotal(int $forcaMago){
        $forcaTotal = $forcaMago * (1+ ($this->forca / 100));
        return $forcaTotal;
    }

    //Gets e Sets

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of forca
     */
    public function getForca(): int
    {
        return $this->forca;
    }

    /**
     * Set the value of forca
     */
    public function setForca(int $forca): self
    {
        $this->forca = $forca;

        return $this;
    }
}