<?php

//1- Ler os dados das 4 pessoas
$pessoas = array();
for ($i=1; $i <=4 ; $i++) { 
    echo "\nPessoa " . $i . ":\n";
    $pessoa["nome"] = readline("Infome seu nome");
    $pessoa["idade"] = readline("Infome seu idade");
    $pessoa["cidadeNatal"] = readline("Infome sua cidade natal");
    $pessoa["profissao"] = readline("Infome sua profissao");

    //1.1 Adicionar a $pessoa em $pessoas    
}

array_push($pessoas, $pessoa);
//2 Encontrar a pessoa mais velha
$pessoaVelha = $pessoas[0];
foreach($pessoas as $p){
    if( $p ["idade"] > $pessoaVelha["idade"])
        $pessoaVelha = $p;
}

//3 Imrpimir os dados da pessoa
echo "Dadeos da pessoa mais velha:. \n";
echo "Nome: " . $pessoaVelha['nome'] ."\n";
echo "Idade: " . $pessoaVelha['idade'."\n"];
echo "cidade natal: " . $pessoaVelha['cidadeNatal'."\n"];
echo "Profissão: " . $pessoaVelha['profissao'."\n"];
