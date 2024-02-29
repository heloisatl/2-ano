<?php

    function area($r) {
        $area = 3.14 * $r * $r;
        return $area;
    }
    function circunf ($r) {
        return 2 * 3.14 * $raio;
    }
//Programa principal
    for(i=0; $i<3; $i++){


        $raio = readline("Informe o raio do círculo (cm): ");
        $area = area($raio);
        $circunf = $circunf($raio);
        printf("Um círculo de raio %dcm tem área de %dcm e circunferência de %dcm.\n" , $raio , $area , $circunf);

    }
