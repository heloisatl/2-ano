<?php 

require_once("modelo/Aluno.php");
require_once("modelo/Professor.php");


//Aluno
$aluno = new  Aluno();
$aluno->setMatricula(20233051014);
$aluno->setNome("Helo");
$aluno->setIdade(16);
$aluno->setRg(910921802409);
echo $aluno->getNomeIdade();
echo $aluno;

//Professor

$professor = new Professor();
$professor->setIdade(34);
$professor->setNome("Daniel");
$professor->setRg(23923490);
$professor->setSalario(3366);

echo $professor;