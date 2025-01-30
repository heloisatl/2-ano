<?php

require_once ("modelo/ClientePF.php");
require_once ("modelo/ClientePJ.php");
require_once ("util/Conexao.php");
require_once ("dao/ClienteDAO.php");

$opcao = 0;

do {
    echo "\n--CADASTRO DE CLIENTES--\n";
    echo "1- Cadastrar cliente PF\n";
    echo "2- Cadastrar cliente PJ\n";
    echo "3- Listar Clientes\n";
    echo "4- Buscar Clientes\n";
    echo "5- Excluir Clientes\n";
    echo "0- Sair\n";

    $opcao = readline("Escolha a opção que deseja: ");

    switch ($opcao) {
        case 1:
            // Criar o objeto a ser persistido
            $cliente = new ClientePF();
            $cliente->setNome(readline("Informe o nome: "));
            $cliente->setNomeSocial(readline("Informe o nome social: "));
            $cliente->setCpf(readline("Informe o CPF: "));
            $cliente->setEmail(readline("Informe o email: "));

            // Chamar o método do DAO para persistir o objeto
            $clienteDAO = new ClienteDAO();
            $clienteDAO->inserirCliente($cliente);

            echo "Cliente PF cadastrado com sucesso!\n";
            break;

        case 2:
            $cliente = new ClientePJ();
            $cliente->setNomeSocial(readline("Informe o nome social: "));
            $cliente->setRazaoSocial(readline("Informe a razão social: "));
            $cliente->setCnpj(readline("Informe o CNPJ: "));
            $cliente->setEmail(readline("Informe o email: "));

            // Chamar o método do DAO para persistir o objeto
            $clienteDAO = new ClienteDAO();
            $clienteDAO->inserirCliente($cliente);

            echo "Cliente PJ cadastrado com sucesso!\n\n\n";
            break;

        case 3:
            // buscar os onjetos do banco de ddados
            $clienteDAO = new ClienteDAO();
            $clientes = $clienteDAO->listarClientes();

            // exibir os dados dos objetos
            foreach($clientes as $c){
                    printf("%d- %s | %s | %s | %s | %s\n", 
                    $c->getId(), $c->getTipo(), $c->getNomeSocial(),
                    $c->getIdentificacao(), $c->getNroDoc(), $c->getEmail()); 
                
            }
         
            break;

        case 4:

            $id = readline("Informe o id do cliente que deseja buscar: ");
            $clienteDAO = new ClienteDAO();
            $cliente = $clienteDAO->buscarPorId($id);

            if ($cliente != null){
                echo $cliente;

            } else {
                echo "Cliente não encontrado!\n";
            }
            break;
            

        case 5:
            //EXCLUSAO PELO ID OD CLIENTE
            //1-Listar os clientes
            $clienteDAO= new ClienteDAO();

            $clientes = $clienteDAO->listarClientes();
            foreach($clientes as $c)
                echo $c;

                //2- Solicitar ao usuario para informar o Id
                $id= readline("Informe o ID do cliente a ser excluído: ");
                
                //2.1 - Validar se o cliente existe
                $cliente = $clienteDAO->buscarPorId($id);

                if($cliente !=null){

                    //3-Chamar o clienteDAO para remover da base de dados
                    $clienteDAO->excluirPorId($id);

                    //4-Informar que o cliente foi excluído
                    echo "Cliente excluído com sucesso!!\n";
                } else
                    echo "Cliente não encontrado!\n";
                break;
            
            /*$id = readline("Informe o ID do cliente");

            $cienteDAO = new ClienteDAO();
            $clienteDAO->excluirCliente($id);

            echo "Cliente excluído com sucesso!\n";*/

        case 0:
            echo "\nPrograma encerrado!!\n";
            break;

        default:
            echo "\nOpção inválida\n";
            break;            
    }  

} while ($opcao != 0);
