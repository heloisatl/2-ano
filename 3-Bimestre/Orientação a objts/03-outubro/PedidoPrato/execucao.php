<?php 

require_once("modelo/Prato.php");
require_once("modelo/Pedido.php");

//percorrer array e econtrar o objeto comparando o atributo numero com o numero que o funcionario digitou, nao pegar pelo indice do array.
$Pratos = array(
    new Prato("1", "Camarão à milanesa", "110"),
    new Prato("2","Pizza Margherita", "80,00"),
    new Prato("3","Macarrão à Carbonara", "60,00"),
    new Prato("4","Bife à Parmegiana", "75,00"),
    new Prato("5","Risoto ao Funghi", "70,00"),
);

$pedidos = array();
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
            $valorGarcom = readline("Qual o nome do garçom? ");
            
            
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
                        //array_push($pedidos , $pr);
                        
                        
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

            case 2:
            
            foreach ($pedidos as $i => $ped) {
                print ($i + 1) . " Pedido\n" . $ped;
            }
            
            $indiceRemover = readline("qual você deseja remover?: ");
            $indiceRemover--;
    
            if ($indiceRemover >= 0 && $indiceRemover < count($pedidos)) {
                array_splice($pedidos , $indiceRemover, 1);
            }
            else {
                print "Esclha uma opção valida \n";
            }
    
            break;
            
        
        case 3:
            foreach ($pedidos as $i => $ped) {
                print "\n\nO cliente " . $ped->getNomeCliente() . ", foi atendido pelo garçom " . $ped->getNomeGarcom() . ", pediu um prato de " . $ped->getPrato()->getNome() . " no valor de R$ " . $ped->getPrato()->getValor() . "\n\n";
            }
            break;
    
        case 4: 
            $total = 0;
            foreach ($pedidos as $ped) {
                $total = $total + $ped->getPrato()->getValor();
            }
            print "\n\nO valor total dos pedidos foram de: R$ " . $total . "\n";
            break;
    
        
        case 0: 
            print "\nSaindo";
            break;
    
        default:
            print "\nEscolha uma opção válida";
            break;
    }
    
    } while ($op != 0);
