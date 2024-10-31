<?php 
require_once("Pessoa.php");

//Classe
class Professor extends Pessoa{
    private $salario;
    

    //Métodos

    //.= contatena as strings, se nao usar o .= e usar so o = ele apaga o valor antigo;
    public function __toString()
    {
        $dados = "Nome: ". $this->getNome();
        $dados .= "| Idade: ".  $this->getIdade();
        $dados .= "| Matrícula: ".$this->getSalario();
        $dados .= "| RG: ".$this->getRG();
        $dados .= "\n";

        return $dados;
    }

    //Gets e Sets
    /**
     * Get the value of salario
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario($salario): self
    {
        $this->salario = $salario;

        return $this;
    }
}