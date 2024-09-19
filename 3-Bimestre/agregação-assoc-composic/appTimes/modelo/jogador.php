<?php


require_once("time.php");

class Jogador
{
    private string $nome;
    private int $numero;

    private Time $time;


    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getTime(): Time
    {
        return $this->time;
    }

    public function setTime(Time $time): self
    {
        $this->time = $time;

        return $this;
    }
}
