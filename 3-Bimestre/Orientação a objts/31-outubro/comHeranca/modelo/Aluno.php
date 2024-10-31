<?php 

require_once("Pessoa.php");

class Aluno extends Pessoa{
    private $matricula;


    //.= contatena as strings, se nao usar o .= e usar so o = ele apaga o valor antigo;
    public function __toString()
    {
        $dados = "Nome: ". $this->getNome();
        $dados .= "| Idade: ".  $this->getIdade();
        $dados .= "| Matrícula: ".$this->getMatricula();
        $dados .= "| RG: ".$this->getRG();
        $dados .= "\n";

        return $dados;
    }
    /**
     * Get the value of matricula
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     */
    public function setMatricula($matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }
}