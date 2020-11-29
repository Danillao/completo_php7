<?php
//Aula 05

//EXEMPLO 1
/**
 * Operador de atribuição  =
 *    "      "  String     .
 *    "      "    "        .=
 */

$nome = "Curso";

echo "<br>";
$nome .= " Completo";

echo $nome;
echo "<br>";
echo $nome." de php7 <br/>";


//EXEMPLO 2
/**
 * Operador de atribuição com soma +=
 *  "       "    "        "  subtração -=
 *  "       "    "        "  multiplicação *=
 */

$valorTotal = 0;

$valorTotal += 100;

$valorTotal -= 10;

$valorTotal *= 2;

echo $valorTotal;


//EXEMPLO 3
/**
 * Operadores aritmeticos 
 * Operador de soma:            +
 *  "       "  subtração:       -
 *  "       "  multiplicação:   *
 *  "       "  divisão:         /
 *  "       "  mod:             %
 */

 $a = 10;
 $b = 5;

echo "<br/>";
echo $a + $b;

echo "<br/>";
echo $a - $b;

echo "<br/>";
echo $a * $b;

echo "<br/>";
echo $a / $b;

echo "<br/>";
echo $a % $b;

//EXEMPLO 4
/**
 * Operadores de comparação   <
 *  "         "     "         >
 *  "         "     "         <=
 *  "         "     "         >=
 *  "         "     "         ==
 *  "         "     "         ===
 *  "         "     "         <=>
 */

$a = 30;
$b = 55;

echo "<br/>";
var_dump($a > $b);

echo "<br/>";
var_dump($a < $b);

echo "<br/>";
var_dump($a >= $b);

echo "<br/>";
var_dump($a <= $b);

echo "<br/>";
var_dump($a == $b);

echo "<br/>";
var_dump($a === $b);

echo "<br/>";
var_dump($a <=> $b);


//EXEMPLO 5
/**
 * Vindo do banco de dados esta comparação serve para comparar nulos
 * ele compara ate retornar um valor
 * se todos forem nulos nao retorna nada:    ??
 */

 $a = null;
 $b = null;
 $c = 10;

 echo "<br>";
 echo $a ?? $b ?? $c;

 //EXEMPLO 6
 /**
  * Operadores de  incremento   ++
  *  "          "  decremento   --
  */
 $a = 1;

 $a++;

 echo "<br>";
 echo $a;

 //ou poderia ser
 echo "<br>";
 echo ++$a;


 $a--;

 echo "<br>";
 echo $a;

 //ou poderia ser
 echo "<br>";
 echo --$a;
 
 
 //EXEMPLO 6
 /**
  * Operadores logicos   &&
  *   ""          ""     ||
  */

  $resultado = (10 + 5) / 2 && 10 + 5 < 20;
  echo "<br>";
  var_dump($resultado);

  if (5 > 9 || 2 < 5) {
    echo "<br>";
    echo "Entrou na condição ou(||)";
  }



?>