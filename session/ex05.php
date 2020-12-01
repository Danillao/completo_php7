<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()) {
    
    case PHP_SESSION_DISABLED:
        echo ("SESSAO DESABILITADA");
        break;

    case PHP_SESSION_NONE:
        echo ("SESSAO HABILITADA, MAS NAO EXISTE NENHUMA");
        break;

    case PHP_SESSION_ACTIVE:
        echo ("SESSAO HABILITADA E EXISTENTE");
        break;
}