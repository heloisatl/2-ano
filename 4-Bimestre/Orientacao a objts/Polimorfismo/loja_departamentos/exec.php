<?php

require_once 'modelo/Produto.php';
require_once 'modelo/Livro.php';
require_once 'modelo/Computador.php';
require_once 'modelo/Balde.php';



$l= new Livro("harry potter", "aa", "JK rowling");
$c = new Computador("computador dell", "aa", "I7", "16GB");
$b = new Balde("balde de plástico", "aa", "10L");
$p = new Produto("produto genérico", "aa");

echo $l->getDados() . "\n\n";
echo $c->getDados() . "\n\n";
echo $b->getDados() . "\n\n";
echo $p->getDados() . "\n";
