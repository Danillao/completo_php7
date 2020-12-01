<?php

$a = 10;
$b = 10;

//passagem de parametro por valor
function trocaValor($a) { 
   
    $a += 50;

    return $a;
}

//passagem de parametro por referencia
function trocaValor2(&$b) { 
   
    $b += 50;

    return $b;
}

echo "<br> $a";

echo trocaValor($a);

var_dump($a);


echo "<br> $b";

echo trocaValor2($b);

var_dump($b);




