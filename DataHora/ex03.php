<?php

//muda as configurações do idioma da localização; parametros, padrao, padrao linux, padrao windows
// recomendado passar ambos parametros para evitar erros futuros
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo ucwords(strftime("%A %B"));

?>