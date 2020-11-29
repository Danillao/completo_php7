<?php

$json= '[
    {
      "nome": "joao",
      "idade": 25
    },
    {
      "nome": "anressa",
      "idade": 30
    }
  ]';


  //json_decode() transforma um JSON em array
  $data = json_decode($json, true);

  var_dump($data);
?>