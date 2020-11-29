<?php
//Aula 06

/**
 * Demonstração no navegador da diferença entre " " e ' ' 
 */

$nome = "Hcode";
$nome2 = 'treinamento';

var_dump($nome);
var_dump($nome2);

echo "<br/>";
echo "ABC $nome";
echo "<br/>";
echo 'ABC $nome2';
echo "<br/>";




//EXEMPLO 2

$name = "joao beneguel";

//transforma a string em MAIUSCULA
echo strtoupper($name);

echo "<br/>";

//transforma a string em minuscula
echo strtolower($name);

echo "<br/>";

//transforma as iniciais dos nomes em MAIUSCULAS
echo ucwords($name);
echo "<br/>";



//EXEMPLO 3

$empresa = "Hcode";

//Substitui a string de uma variavel: srt_replace(conteudo,novo_conteudo,variavel)
$empresa = str_replace("o", "0", $empresa);

echo $empresa;
echo "<br/>";





//EXEMPLO 4

$frase = "a repetição é a mãe da retenção.";
$palavra = "mãe";

//Verifica se a string existe e retorna o indice da mesma (posição)
$q = strpos($frase, $palavra);

//substr retorna o conteudo a partir da posição escolhida ate um ponto de parada
$texto = substr($frase, 0, $q);

//aqui abaixo o ponto de parada foi somado a quantidade de letras na var $palavra
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($q);
echo "<br/>";
var_dump($texto);

echo "<br/>";
var_dump($texto2);



?>