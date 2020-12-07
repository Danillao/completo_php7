<?php

//NAMESPACE
namespace Cliente;

//Classe's
class Cadastro extends \Cadastro {


  // METODOS:
  public function registrarVenda()
  {
    echo "Foi registrada uma venda para o cliente ".$this->getNome();
  }

}


?>