<?php
//AULA 09

$dia_semana = date("w");


switch($dia_semana) {

    case 0: 
        echo "DOMINGO";
        break;

    case 1: 
        echo "SEGUNDA";
        break;

    case 2: 
        echo "TERCA";
        break;

    case 3: 
        echo "QUARTA";
        break;

    case 4:
        echo "QUITA";
        break;

    case 5:
        echo "SEXTA";
        break;

    case 6:
        echo "SABADO";
        break;

    default:
        echo "DATA INVALIDA";
}




?>