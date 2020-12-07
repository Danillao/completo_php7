<?php
/** Arquivo de configuração do "projeto"
 *  Neste arquivo nos estamos:
 *  chamando a função spl_autoload_register para incluir o diretorio e arquivos
 *  que possuem as classes que serão usadas no arquivo main ou index
 */

spl_autoload_register(function($nomeClasse)
{
    
    $dirClass = "class";
    $filename = "$dirClass". DIRECTORY_SEPARATOR .$nomeClasse.".php";

    if(file_exists($filename)) {

        require_once($filename);

    }


});






?>