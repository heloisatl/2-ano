<?php 

require_once("modelo/Prato.php");
require_once("modelo/Pedido.php");

$Pratos = array(
    new Prato("1", "Camarão à milanesa", "110.00"),
    new Prato("2", "Pizza Margherita", "80.00"),
    new Prato("3", "Macarrão à Carbonara", "60.00"),
    new Prato("4", "Bife à Parmegiana", "75.00"),
    new Prato("5", "Risoto ao Funghi", "70.00"),
);

$pedidos = [];

do {
    echo "\n\n------MENU------\n";
    echo "1- Cadastrar\n";
    echo "2- Cancelar\n";
    echo "3- Listar\n";
    echo "4- Total de Vendas\n"; 
    echo "0- Sair\n";

    $op = readline("Informe a opção: ");

    switch($op){
        case 1:
            
            $nomeCliente = readline("Qual o nome do cliente? ");
            $valorGarcom = readline("Qual o valor do garçom? ");
            
            
            $prato = null;
            while($prato == null) {
                echo "\nPratos: \n";
                foreach($Pratos as $pr) {
                    echo $pr->getNumero() . " - " . $pr->getNome() . " - R$ " . $pr->getValor() . "\n";
                }

                $numeroPrato = readline("Informe o número do prato (1 a 5): ");
                foreach($Pratos as $pr) {
                    if ($pr->getNumero() == $numeroPrato) {
                        $prato = $pr;
                        break;
                    }
                }
                if ($prato == null) {
                    echo "Prato não encontrado. Tente novamente.\n";
                }
            }

            
            $pedido = new Pedido();
            $pedido->setNomeCliente($nomeCliente);
            $pedido->setNomeGarcom($valorGarcom);
            $pedido->setPrato($prato);
            $pedidos[] = $pedido; 
            break;

        case 4: // Total de Vendas
            $totalVendas = 0;
            foreach($pedidos as $pedido) {
                $totalVendas += (float) $pedido->getPrato()->getValor(); 
            }
            echo "Total de Vendas: R$ " . number_format($totalVendas, 2, ',', '.') . "\n";
            break;

        case 0:
            echo "Saindo...\n";
            break;

        default:
            echo "Opção inválida. Tente novamente.\n";
            break;
    }
    
} while($op != 0);
