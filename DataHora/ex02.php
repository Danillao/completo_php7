<?php

//converte e retorna  em string o timestamp da data passada como parametro 

//$ts = strtotime("2001-09-11");

$ts = strtotime("+1 week");

echo date("d/m/y", $ts);

?>