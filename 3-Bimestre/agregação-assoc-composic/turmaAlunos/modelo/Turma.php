<?php

class Turma {
    private $nome;
    private $curso;
    private $alunos;

    

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso): self
    {
        $this->curso = $curso;

        return $this;
    }

    public function getAlunos()
    {
        return $this->alunos;
    }

    public function setAlunos($alunos): self
    {
        $this->alunos = $alunos;

        return $this;
    }
}