<?php

function soma(int ...$valores) {

    return array_sum($valores);
}

echo "<br>";
echo var_dump(soma(2, 2)); 

echo "<br>";
echo soma(6, 9, 19, 88.90); 

echo "<br>";
echo soma(1, 6, 22, 88.90, 99, 100.2); 