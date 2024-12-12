<?php

require_once 'modelo/Ingresso.php';
require_once 'modelo/IngressoVIP.php';
require_once 'modelo/IngressoCamarote.php';

$ingresso = new Ingresso(50.00);  
echo "Valor do ingresso: R$ " . $ingresso->getValorTotal() . "\n";


$ingressoVIP = new IngressoVIP(50.00, 30.00);  //valor do ingresso + valor adicional do VIP

echo "Valor do ingresso VIP: R$ " . $ingressoVIP->getValorTotal() . "\n";


$ingressoCamarote = new IngressoCamarote(50.00, 30.00, 20.00);  // valor do ingresso + valor adicional do VIP + adicional do camarote
echo "Valor do Ingresso do camarote: R$ " . $ingressoCamarote->getValorTotal() . "\n";
