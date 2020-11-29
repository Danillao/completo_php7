<?php
//Aula 02

/**
 *  seguir padrao camel case para nome das variaveis (regras para criação de variaveis)
 *  evitar nomear com numeros no inicio ou nomes que NÃO sejam euto explicativos
 *  nao tenha medo de criar variaveis com nomes longos 
 *  evitar caracteres especiais(o unico indicado é o _ ) ou nomes Reservados ($this por exemplo) 
 */

$nome = "Danillo ";
$sobrenome = "Lima Andrade";
$nomeCompleto = $nome.$sobrenome;

// unset() destroi o conteudo armazenado numa variavel, ela deixa de existir, limpa da memoria 
//unset($nomeCompleto);

//isset() verifica se a variavel testada possui algum conteudo e retorna true ou false;
if (isset($nomeCompleto)) {
    echo $nomeCompleto;
    echo "<br>";
}

//----------------------------------------------------------------------------------------------
//tipos basicos de variaveis: String, int, float e boolean;
$nome2 = "Hcode";
$site = "www.hcode.com.br";
$ano = 1990;
$salario = 5.500;
$bloqueado = false;

//tipos compostos: array e objeto
$frutas = [
    "abacaxi",
    "laranja",
    "uva"
];

$nascimento = new DateTime();


echo "<pre>";
    print_r($frutas);
echo "</pre>";

var_dump($nascimento);



$arquivo = fopen("variaveis.php", "r");
echo "<br>";
var_dump($arquivo);









