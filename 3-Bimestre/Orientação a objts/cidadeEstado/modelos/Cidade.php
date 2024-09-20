<?php

class Cidade {
    private $nome;
    private $qtdHabitantes;
    private $altitude;
    private $estado;

    
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getQtdHabitantes()
    {
        return $this->qtdHabitantes;
    }

    public function setQtdHabitantes($qtdHabitantes): self
    {
        $this->qtdHabitantes = $qtdHabitantes;

        return $this;
    }

    public function getAltitude()
    {
        return $this->altitude;
    }

    public function setAltitude($altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}