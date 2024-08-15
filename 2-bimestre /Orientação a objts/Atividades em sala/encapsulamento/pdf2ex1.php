<?php
class Cidade {
  private $nome;
  private $populacao;
  private $area;

  public function __construct($nome, $populacao, $area) {
    $this->nome = $nome;
    $this->populacao = $populacao;
    $this->area = $area;
  }

  public function getNome() {
    return $this->nome;
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function getPopulacao() {
    return $this->populacao;
  }

  public function aumentarPopulacao($aumento) {
    $this->populacao += $aumento;
  }

  public function getArea() {
    return $this->area;
  }

  public function expandirArea($aumento) {
    $this->area += $aumento;
  }

  public function reduzirArea($reducao) {
    if ($this->area - $reducao >= 0) {
      $this->area -= $reducao;
    } else {
      echo "Não é possível reduzir a área para um valor negativo.";
    }
  }

  public function __toString() {
    return "Cidade: {$this->nome}, População: {$this->populacao}, Área: {$this->area} km²";
  }
}


$cidade1 = new Cidade("São Paulo", 1234567, 1500);
echo $cidade1 . "<br>";

$cidade1->aumentarPopulacao(10000);
echo $cidade1 . "<br>"; 
$cidade1->expandirArea(500);
echo $cidade1 . "<br>"; 

$cidade1->reduzirArea(200);
echo $cidade1 . "<br>";

$cidade1->setNome("São Paulo Capital");
echo $cidade1 . "<br>"; 