<?php
//Aula 04
 
$nome = "Glaucio";

function teste() {
    global $nome;
    echo $nome;
}

function teste2() {
    $nome = "joao";
    echo $nome." Agora no teste 2";
}

teste();
teste2();   




?>