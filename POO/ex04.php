<?php
//Metodos MAgicos
class Endereco {
    //Atributos
    private $logradouro;
    private $numero;
    private $cidade;

    //construtor
    public function __construct($a, $b, $c) {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    //Destrutor
    public function __destruct() {

        var_dump("DESTRUIR");

    }

    //Metodo __toString() converte o objeto em string, quando ele é chamado por um echo por ex:
    public function __toString() {

        return $this->logradouro.", ".$this->numero.", ".$this->cidade;
    }

}

$meuEndereco = new Endereco("Rua lafaiete","123","iguna");

echo $meuEndereco;


?>