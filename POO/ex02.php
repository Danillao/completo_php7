<?php

class Carro {
    //Atributos:
    private $modelo;
    private $motor;
    private $ano;

    //Metodos:

    //SET
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setMotor($motor) {
        $this->motor = $motor;       
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }   

    //GET
    public function getModelo() {
        return $this->modelo;
    }

    public function getMotor():float {
        return $this->motor;
    }

    public function getAno():int {
        return $this->ano;
    }

    //Status
    public function exibir() { //   Imprime em um array os atributos da classe
        return array(
            "modelo" => $this->getModelo(),
            "motor" => $this->getMotor(),
            "ano" => $this->getAno()
        );
    }

}

//instancia da classe no objeto $carro1
$carro1 = new Carro();

//passando valores via metodos set
$carro1->setModelo("gol quadrado");
$carro1->setMotor(1.5);
$carro1->setAno(1997);

//chamando os dados na tela 
var_dump($carro1->exibir());


