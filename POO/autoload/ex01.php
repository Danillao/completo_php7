<?php
//Aula autoload

//Autoload
function __autoload($nomeClasse) {
    
    require_once("$nomeClasse.php");
    
}


//MAIN
$carro = new DelRey();

$carro->acelerar(100);











?>