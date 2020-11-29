<?php

$pessoas = [];

array_push($pessoas,array(
    'nome' => 'joao',
    'idade' => 25
));

array_push($pessoas,array(
    'nome' => 'anressa',
    'idade' => 30
));

//json_encode() transforma um array em um JSON
echo json_encode($pessoas);

?>