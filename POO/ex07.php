<?php
//Aula Interface

//Interface's
interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}


//Classe's
class Carro implements Veiculo {
    //Atributos:

    //Metodos:
    //Interface
    public function acelerar($velocidade)
    {
        echo "O veiculo acelerou a ".$velocidade." km/h";
    }

    public function frenar($velocidade)
    {
        echo "O veiculo frenou até ".$velocidade." km/h";
    }

    public function trocarMarcha($marcha)
    {
        echo "O carro engatou a marcha: ".$marcha;
    }

}

$carro1 = new Carro();










?>