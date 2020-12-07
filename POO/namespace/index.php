<?php
  //require's
  require_once("config.php");

  //usando namespace
  use Cliente\Cadastro;

  //MAIN
  $cad = new Cadastro();

  $cad->setNome("Danillo Lima");
  $cad->setEmail("joufilhoteste@gmail.com");
  $cad->setSenha("123456");

  $cad->registrarVenda();

?>