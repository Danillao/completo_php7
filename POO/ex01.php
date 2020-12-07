<?php

//criando uma classe:

class Pessoa {
    //atributos
    public $nome;


    //metodos
    public function falar() {

        return "O meu nome é ".$this->nome;
    }


}


$Dan = new Pessoa();

$Dan->nome = "Danillo";

echo $Dan->falar();

?>