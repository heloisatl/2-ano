<?php

class Carta
{
    private int $numero;
    private string $nome;
    private int $pontos;


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
    public function getPontos(): int
    {
        return $this->pontos;
    }

    public function setPontos(int $pontos): self
    {
        $this->pontos = $pontos;

        return $this;
    }

    public function perderPontos()
    {
        $this->pontos -= 10;
    }
    public function ganharPontos()
    {
        $this->pontos += 10;;
    }
    public function __tostring()
    {

        return "Carta " . $this->nome . " de número " . $this->numero . "\n";
    }
    public function __construct()
    {
        $this->pontos = 100;
    }
}

//Programa Principal

do{
    print "\n         ▀ ▀ ▀ Menu ▀ ▀ ▀          \n";
    print " 1 ▀▄▀▄▀▄     Jogar       ▀▄▀▄▀▄▀▄▀▄ 1\n";
    print " 0 ▀▄▀▄▀▄▀▄    Sair         ▀▄▀▄▀▄▀▄ 0\n";

    $escolha= readline("Escolha uma opção: \n");

    switch($escolha){
        case 0: 
            echo "\n   ▀▄▀▄    OBRIGADO POR JOGAR    ▀▄▀▄";
            break;
        case 1:
            do {
                $qtdCartas = 0;
                $qtdCartas = readline("Escolha um número de cartas para você adivinhar (mínimo de 7 cartas)");
            } while ($qtdCartas < 7 || $qtdCartas > 52);
    
            //Criar o baralho.
            $arrayBaralho = array();
            $arrayCartasSorteadas = array();
            $naipes = ["Copas", "Espadas", "Ouros", "Paus"];
            
            for ($i = 0; $i < $qtdCartas; $i++) {
                $cartas = new Carta;
                $cartas->setNumero(rand(1, 13));
                $cartas->setNome($naipes[rand(0, 3)]);
                array_push($arrayBaralho, $cartas);
            }
            //Sorteando a carta do baralho.
            $indiceSorteado = array_rand($arrayBaralho);
            $cartaSorteada = $arrayBaralho[$indiceSorteado];
            array_push($arrayCartasSorteadas, $cartaSorteada);

            //Imprimindo as cartas
            foreach ($arrayBaralho as $indice => $cartas) {
                echo $indice +1 . "  -  " . $cartas;
            }


        do {
            $adivinharCarta = readline("Qual é a carta sorteada? (Digite o índice)");
            if ($adivinharCarta == $indiceSorteado) {

                echo "PARABÉNS VOCÊ ACERTOUUUUUU!!!!!!!!!!!!!!!!!!!";
                $cartaSorteada->ganharPontos();
                echo   $cartaSorteada->getPontos() . " pontos\n";

            } else {
                echo "\nVocê errouuuuuu, tente de novo.\n";
                $cartaSorteada->perderPontos();
                echo  $cartaSorteada->getPontos() . " pontos\n";
                $continuar = readline("\nDesistir da partida?--1\nDica--2\nContinuar--3");
                switch($continuar){
                    case 1:
                    
                        echo "\nA resposta era a " . $cartaSorteada. "   ▀▄▀▄    OBRIGADO POR JOGAR    ▀▄▀▄";
                        exit;
                    case 2:
                        if($cartas->getNumero() > 5){
                            echo "A carta sorteada é maior que 5\n";
                        }
                        else{
                            echo "A carta sorteada é menor que 5\n";
                        }
                }
                
            }
            
        } while ($adivinharCarta != $indiceSorteado);
        break;


        default:
        echo "Opção inválida.";
    }

}while($escolha != 0);
