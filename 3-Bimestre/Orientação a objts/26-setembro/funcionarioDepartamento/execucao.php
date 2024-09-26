<?php

require_once("modelos/Departamento.php");
require_once("modelos/Funcionario.php");

//Programa Principal.

$arrayfuncionario = array();

for ($i=1; $i <= 5 ; $i++) { 
    $funcionario = new Funcionario();
    $funcionario->setNome(readline("Qual o nome do ". $i . "° funcionário?\n" ));
    $funcionario->setCargo(readline("Qual o cargo do " . $i . "° funcionário?\n"));
    $funcionario->setSalario(readline("Qual o salário do " . $i . "° funcionário?\n"));

    $departamento = new Departamento();
    $departamento->setNomeD(readline("Qual o nome do departamento?\n"));
    $departamento->setNumeroSala(readline("Qual o número da sala do departamento?\n"));

    $funcionario->setDepto($departamento);
    array_push($arrayfuncionario, $funcionario);
    
    print_r($arrayfuncionario);
}
foreach ($arrayfuncionario as $f) {
    echo "O nome do funcionário é: " . $f->getNome() . "\nO cargo dele é: " . $f->getCargo() ."\nO salário do funcionário é: " . $f->getSalario() . "\nO nome do departamento dele é: ". $f->getDepto()->getNomeD() ."\nO número da sala é:" .$f->getDepto()->getNumeroSala() . "\n\n\n";
}
