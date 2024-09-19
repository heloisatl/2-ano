<?php

class Alunos {
    private $nome;
    private $idade;
    private $turma;

    

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    
    public function getTurma()
    {
        return $this->turma;
    }

    public function setTurma($turma): self
    {
        $this->turma = $turma;

        return $this;
    }
}