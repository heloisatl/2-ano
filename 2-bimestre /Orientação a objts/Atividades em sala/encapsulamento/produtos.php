<?php

class Produto{
    private string $descricao;
    private string $unidadeMedida;
    private int $quantidade;
    private float $valorUnitario;
    private float $valorTotal;

    public function getvalorTotal():float{

        return $this->quantidade * $this->valorUnitario;
    }


    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getUnidadeMedida(): string
    {
        return $this->unidadeMedida;
    }


    public function setUnidadeMedida(string $unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }


    public function getQuantidade(): int
    {
        return $this->quantidade;
    }


    public function setQuantidade(int $quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }


    public function getValorUnitario(): float
    {
        return $this->valorUnitario;
    }


    public function setValorUnitario(float $valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }

    public function getMessage(){
        echo "Produto " . $this->getDescricao() . " (" .  $this->getUnidadeMedida() . ")  |  " . $this->getQuantidade() . " X " . $this->getValorUnitario() . " = " . $this->getvalorTotal() . "\n\n\n";
    }
}//Fim da classe Produto

//Programa Principal

$prod1 = new Produto();
$prod1->setDescricao(readline("\nFale a descrição do produto:\n "));
$prod1->setUnidadeMedida(readline("\nQual a unidade de medida?\n "));
$prod1->setQuantidade(readline("\nQual a quantidade? \n"));
$prod1->setValorUnitario(readline("\nQual o valor unitário?\n"));
$prod1->getMessage();



$prod2 = new Produto();
$prod2->setDescricao(readline("\nFale a descrição do produto2:\n "));
$prod2->setUnidadeMedida(readline("\nQual a unidade de medida?\n"));
$prod2->setQuantidade(readline("\nQual a quantidade?\n"));
$prod2->setValorUnitario(readline("\nQual o valor unitário?\n"));
$prod2->getMessage();


$prod3 = new Produto();
$prod3->setDescricao(readline("\nFale a descrição do produto3: \n"));
$prod3->setUnidadeMedida(readline("\nQual a unidade de medida?\n"));
$prod3->setQuantidade(readline("\nQual a quantidade?\n"));
$prod3->setValorUnitario(readline("\nQual o valor unitário?\n"));
$prod3->getMessage();


if($prod1->getValorTotal()> $prod2->getValorTotal()){
    if($prod1->getValorTotal()>$prod3->getValorTotal()){
        echo "\nVenda com maior valor total do produto1: " . $prod1->getDescricao() . " ". $prod1->getUnidadeMedida() . "\n\n\n";
    }
    else{
        if($prod2->getValorTotal()>$prod3->getValorTotal()){
            echo "\nVenda com maior valor total do produto2: " . $prod2->getDescricao() . " ". $prod2->getUnidadeMedida() . "\n\n\n";
        }
        else{
            echo "\nVenda com maior valor total do produto3: " . $prod3->getDescricao() . " ". $prod3->getUnidadeMedida() . "\n\n\n";
        }
    }
}




