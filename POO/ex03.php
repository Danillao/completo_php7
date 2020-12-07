<?php
//Metodo estatico (static)
class Documento {
    //Atributos
    private $numero;


    //Metodos

    //SET
    public function setNumero($numero) {
        $resultado = Documento::validarCPF($numero);

        if($resultado === false) {

            throw new Exception("CPF informado é invalido", 1);

        }

        $this->numero = $numero;
    }

    //GET
    public function getNumero():int 
    {
        return $this->numero;
    }

    //Static
    public static function validarCPF($cpf):bool 
    {

        //Verifica se um numero foi informado
        if(empty($cpf)) {
            return false;
        }
     
        //Elimina possivel mascara
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        //Verifica se o numero digitado possui 11 digitos
        if (strlen($cpf) != 11) {
            echo "length";
            return false;
        }
        
        //Verifica se uma das sequencias invalidas abaixo foi digitado
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
                
         //Calcula os digitos verificadores para verificar se o cpf é valido 
         } else {   
             
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
     
            return true;
        }
    }



}

/*
$cpf = new Documento();

$cpf->setNumero(85889821539);

var_dump($cpf->getNumero());
*/







?>