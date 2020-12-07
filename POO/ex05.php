<?php
//Aula Encapsulamento

class Pessoa {

    public $nome = "Rasmus Lerdov";   
    protected $idade = 21;
    private $senha = "123";
    

    public function verDados() {
        echo "<br>".$this->nome;
        echo "<br>".$this->idade;
        echo "<br>".$this->senha;
    }

}

//Herança da classe pessoa
class Programador extends Pessoa {

    public function verDados() {
        echo "<br>".$this->nome;
        echo "<br>".$this->idade;
        echo "<br>".$this->senha;
    }


}

$pessoa1 = new Pessoa();

$pessoa1->verDados();

// Só é possivel acessar o atributo publico pois o encapsulamento private e protected
// nao permitem acessar sem um intermediario (um metodo dentro da propria classe)
//echo $pessoa1->nome."<br>";
//echo $pessoa1->idade."<br>";
//echo $pessoa1->senha."<br>";


$programador = new Programador();

$programador->verDados();


?>