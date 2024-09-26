<?php

require_once('Funcionario.php');

class Departamento{
    private string $nomeD;
    private int $numeroSala;
    

    public function getNomeD(): string
    {
        return $this->nomeD;
    }

    public function setNomeD(string $nomeD): self
    {
        $this->nomeD = $nomeD;

        return $this;
    }

    public function getNumeroSala(): int
    {
        return $this->numeroSala;
    }

    public function setNumeroSala(int $numeroSala): self
    {
        $this->numeroSala = $numeroSala;

        return $this;
    }
}