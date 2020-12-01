<?php

function ola() {

    $argumentos = func_get_args();

    return $argumentos;

}

var_dump(ola("Bom dia","Joao",45,true));