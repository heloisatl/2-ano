<?php

require_once("modelo/Alunos.php");require_once("modelo/Turma.php");

$turma = new Turma();
$turma->setNome(readline("Qual o nome da sua turma"));