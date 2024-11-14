<?php 
require_once("Pedido.php");
require_once("Produto.php");


class Bebida extends Produto{

    //Atributos
    private $temperatura;
    private $tamanho;

    //Métodos

    

    public function listarPedido() {

        $escolha = 0;
        do {
            "** -------- MENU ------------**  " . "\n";
            " 1 -------- ADCIONAR ---------* " . "\n";
            " 2 -------- CANCELAR ----------* " . "\n";
            " 3 -------- LISTAR ------------* " . "\n";
            " 0 -------- SAIR --------------* " . "\n";

            $escolha = readline("De qual serviço você precisa? ");

            switch ($escolha) {
    
                case 1:
                    echo "\n" . "--- ADCIONAR --- " . "n";
            
                    $pedido = new Pedido();
                    $pedido->setNomeCliente(readline("Informe o nome do cliente: "));
                    $pedido->setNomeGarcom(readline("Informe o nome do garçom: "));
                    $pedido->setNomeCaixeiro(readline("Informe o nome do garçom: "));
            
                    $pedido = null;
                    while ($pedido == null) {
                        echo "\n" . " NOSSO MENU". "\n";
                        $menu();
                        
                    
                        $numero = readline("Informe o número do produto: ");
                        $pedido = retornaPrato($pratoArray, $numero);
                    }
            
                    $pedido->setPrato($prato);
                    array_push($pedidoArray, $pedido);
            
                    break;
            
                case 2:
                    print "LISTA PEDIDOS\n\n";
                    foreach ($pedidoArray as $i => $ped) {
                        echo ($i + 1) . "º Pedido" . "n" . $ped;
                    }
            
                    $indiceRemover = readline("Quem você gostaria de remover? (INFORME O NÚMERO): ");
                    $indiceRemover--;
            
                    if ($indiceRemover >= 0 && $indiceRemover < count($pedidoArray)) {
                        array_splice($pedidoArray, $indiceRemover, 1);
                    }
                    else {
                        echo "REMOÇÃO INVÁLIDA! \n";
                    }
            
                    break;
                
                case 3:
                    foreach ($pedidoArray as $i => $ped) {
                        echo "\n" . "O cliente " . $ped->getNomeCliente() . ", foi atendido pelo garçom " . $ped->getNomeGarcom() . ", pediu um prato de " . $ped->getPrato()->getNome() . " no valor de R$ " . $ped->getPrato()->getValor() . "\n";
                    }
                    break;
            
                case 4: 
                    $total = 0;
                    foreach ($pedidoArray as $ped) {
                        $total = $total + $ped->getPrato()->getValor();
                    }
                    echo "\n" . "\n" . "O valor total dos pedidos foram de: R$ " . $total . "\n";
                    break;
            
                
                case 0: 
                    echo "\n" . "O SERVIÇO SERÁ ENCERRADO...";
                    break;
            
                default:
                    echo "\n" . "OPÇÃO INVÁLIDA";

                }
        } while ($escolha != 0);
    }


    //Gets e Sets
    /**
     * Get the value of temperatura
     */
    public function getTemperatura()
    {
        return $this->temperatura;
    }

    /**
     * Set the value of temperatura
     */
    public function setTemperatura($temperatura): self
    {
        $this->temperatura = $temperatura;

        return $this;
    }

    /**
     * Get the value of tamanho
     */
    public function getTamanho()
    {
        return $this->tamanho;
    }

    /**
     * Set the value of tamanho
     */
    public function setTamanho($tamanho): self
    {
        $this->tamanho = $tamanho;

        return $this;
    }
}