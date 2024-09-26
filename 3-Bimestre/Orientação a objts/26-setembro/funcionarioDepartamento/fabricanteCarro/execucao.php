<?php
require_once("modelo/Carro.php");
require_once("modelo/Fabricante.php");

$fabricantes = array(
    new Fabricante("Volkswagem", "VW"),
    new Fabricante("Chevrolet", "GM"),
    new Fabricante("Fiat", "F"),
    new Fabricante("Renault", "RN"),
);

$carros = [];

do {
    echo "---MENU---\n";
    echo "1---Cadastrar Carro---\n";
    echo "2---Excluir Carro---\n";
    echo "3---Listar Carros---\n";
    echo "0---Sair---\n";
    $escolha = readline("Escolha uma opção: ");

    switch ($escolha) {
        case '1':
            $modelo = readline("Insira o modelo do carro: ");
            $anoFabricacao = readline("Insira o ano de fabricação: ");
            echo "Escolha o fabricante:\n";
            foreach ($fabricantes as $index => $fabricante) {
                echo "[$index] " . $fabricante->getNome() . " (" . $fabricante->getSigla() . ")\n";
            }
            $indiceFabricante = (int)readline("Selecione o índice do fabricante: ");
            if (isset($fabricantes[$indiceFabricante])) {
                $carros[] = new Carro($modelo, $anoFabricacao, $fabricantes[$indiceFabricante]);
                echo "Carro cadastrado com sucesso!\n";
            } else {
                echo "Fabricante inválido!\n";
            }
            break;
        
        case '2':
            if (empty($carros)) {
                echo "Não há carros cadastrados.\n";
                break;
            }
            echo "Selecione o índice do carro a ser excluído:\n";
            foreach ($carros as $index => $carro) {
                echo "[$index] " . $carro . "\n";
            }
            $indiceCarro = (int)readline("Índice do carro: ");
            if (isset($carros[$indiceCarro])) {
                //"isset" Determina se uma variável é considerada definida, isto é, está declarada e é diferente de null.
                //isset() retornará false ao verificar uma variável que foi atribuída com o valor null. Note também que um caractere nulo ("\0") não é equivalente à constante null do PHP.
                $carros = array_merge(
                    /*array_merge(array ...$arrays): array
                    Combina os elementos de dois ou mais arrays de forma que os elementos de um são colocados no final do array anterior. Retorna o array resultante da fusão.*/
                    array_slice($carros, 0, $indiceCarro),
                    array_slice($carros, $indiceCarro + 1)
                );
                echo "Carro excluído com sucesso!\n";
            } else {
                echo "Carro inválido!\n";
            }
            break;

        case '3':
            if (empty($carros)) {
                echo "Não há carros cadastrados.\n";
            } else {
                echo "Carros cadastrados:\n";
                foreach ($carros as $carro) {
                    echo $carro . "\n";
                }
            }
            break;

        case '0':
            echo "Saindo...\n";
            break;

        default:
            echo "Insira uma opção válida.\n";
            break;
    }

} while ($escolha != '0');
