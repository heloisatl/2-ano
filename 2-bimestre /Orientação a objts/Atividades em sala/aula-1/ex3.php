<?php

$turmas = array();

function lerTurma() {
    $turma = array();

    
    echo "Informe o curso da turma: ";
    $turma['curso'] = readline();

    echo "Informe o ano da turma: ";
    $turma['ano'] = (readline());

    echo "Informe a quantidade de alunos na turma: ";
    $turma['qtdAlunos'] = (readline());

    return $turma;
}
for ($i = 0; $i < 4; $i++) {
    echo "\n";
    $turma = lerTurma();
    $turmas[] = $turma; 
}


$totalAlunos = 0;
foreach ($turmas as $turma) {
    $totalAlunos += $turma['qtdAlunos'];
}

echo "\nTotal de alunos em todas as turmas: " . $totalAlunos . "\n";
