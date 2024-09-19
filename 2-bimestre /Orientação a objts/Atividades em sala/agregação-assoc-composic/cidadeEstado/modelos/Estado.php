<?php 

class Estado{
    private $nome;
    private $sigla;

    

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getSigla()
    {
        return $this->sigla;
    }

    public function setSigla($sigla): self
    {
        $this->sigla = $sigla;

        return $this;
    }
}