<?php

//exemplo funcao recursiva

$cargoEmpresa = Array(
    //Inicio: CEO
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(

            //Inicio: Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                     //Inicio: Gerente de Vendas
                    array(
                        'nome_cargo' => 'gerente de vendas'
                    )
                     //Termino: Gerente de Vendas
                )
            ),
            //Termino: Diretor Comercial

            //Inicio: Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(

                    //Inicio: Gerente de contas a pagar
                    array(
                        'nome_cargo' => 'gerente de contas a pagar',
                        'subordinados' => array(

                            //Inicio: Supervisor de pagamentos
                            array(
                                'nome_cargo' => 'Supervisor'
                            )
                            //Termino: Supervisor de pagamentos
                        )
                    ),
                    //Termino: Gerente de contas a pagar

                    //Inicio: Gente de Compras
                    array(
                        'nome_cargo' => 'gerente de compras',
                        'subordinados' => array(
                            //Inicio: Supervisor de mantimentos
                            array(
                                'nome_cargo' => 'supervisor de mantimentos',  
                            )
                            //Termino: Supervisor de mantimentos
                        )
                    )
                    //Termino: Gente de Compras
                )
            )
            //Termino: Diretor Financeiro
        )
    )
    //Termino: CEO
);




function exibir($cargos) {
    $html = "<ul>";

        foreach($cargos as $cargo) {

            $html .= "<li>";
                $html .= $cargo['nome_cargo'];

                if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

                    $html .= exibir($cargo['subordinados']);

                }

            $html .= "</li>";

        }

    $html .= "</ul>";

    return $html;
}

echo exibir($cargoEmpresa);

?>