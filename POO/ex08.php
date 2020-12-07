<?php
//Aula classe abstrata

//Interface's 
interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}


//Abstracts Classe's 
abstract class Automovel implements Veiculo {
    //Atributos:

    //Metodos:
    //Interface
    public function acelerar($velocidade)
    {
        echo "<br> O veiculo acelerou a ".$velocidade." km/h";
    }

    public function frenar($velocidade)
    {
        echo "<br> O veiculo frenou até ".$velocidade." km/h";
    }

    public function trocarMarcha($marcha)
    {
        echo "<br> O carro engatou a marcha: ".$marcha;
    }

}

//Classe's
class DelRey extends Automovel {

    public function empurrar()
    {
        echo "<br> O carro parou é necessário Empurrar !!! ";
    }

}

$carro = new DelRey();

$carro->acelerar(200);
$carro->trocarMarcha(2);
$carro->empurrar();




?>

