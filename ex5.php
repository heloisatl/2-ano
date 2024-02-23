<?php

$num1= readline("informe o primeiro número:");
$num2 = readline("Informe o segundo número:");

for ($i=$num1; $i <= $num2; $i++) { 
    //verificar se o i é divisível por 5
    if($i % 5 == 0){
        printf("%d\n", $i);
    }    
}
