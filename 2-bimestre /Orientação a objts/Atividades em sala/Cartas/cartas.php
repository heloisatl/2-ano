<?php

class Carta{
    private int $numero;
    private string $nome;

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
    public function __toString()
    {
        
    }
}

//Programa Principal
$qtdCartas = 0;
do{
    $qtdCartas = readline("Escolha um número de cartas para você adivinhar (mínimo de 7 cartas)");
}while($qtdCartas <7 || $qtdCartas>52);

$arrayCartas = array();
for ($i=0; $i <= $qtdCartas; $i++) { 
    $cartas = new Carta;
    $cartas->setNumero(rand(1,13));
    $cartas->setNome(rand(1,4));
    array_push($arrayCartas, $cartas);
}
print_r($cartas);

$indiceSorteado = array_rand($arrayCartas);
$cartaSorteada = $arrayCartas[$indiceSorteado];
  

foreach ($arrayCartas as $cartas) {
    print($cartas);
}

do {
    $adivinharCarta = readline("Qual é a carta sorteada?");
} while ($adivinharCarta != $indiceSorteado);