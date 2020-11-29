<?php
//AULA 08
$idade = 0;

$idadeCriança = 12;
$idadeAdulto = 18;
$idadeVelho = 65;

if ($idade >= $idadeVelho) {
    echo "VELHINHO";
} else if($idade < $idadeVelho && $idade >= $idadeAdulto) {
    echo "ADULTINHO";
}else {
    echo "CRIANCINHA";
}

echo "<br>";

//OPERADOR TERNARIO EX:

echo($idade < $idadeAdulto) ? "Menor de idade" : "Maior de idade";

?>