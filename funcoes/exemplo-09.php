<?php
$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
           //inicio: Diretor Comercianl
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    //Inicio: Gerente de vendas
                    array(
                        'nome_cargo' =>'Gerente De vendas'
                    )
                    //termino gerente de venda
                )

            ),
            //Termino: Diretor comercial
            //Inicio: Diretor Financeiro
           array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    //Gerente de contas a pagar
                    array(
                        'nome_cargo'=> 'Gerente de contas a pagar',
                        'subordinados' => array(
                            //Inicio do supervisor
                            array(
                              'nome_cargo' => 'Supervisor de Pagamentos'
                            )
                            //Termino do supervisor
                        )
                    ),
                    //termino gerente de contas a pagar
                    //Inicio: Gerente de compras
                    array(
                        'nome_cargo' => 'Gerente de compras',
                        'subordinados'=>array(
                            array(
                                'nome_cargo'=> 'Supervisor de suprimentos',
                                'subordinados'=>array(
                                    array(
                                        'nome_cargo' => 'funcionario'
                                    )
                                )
                            )
                        )
                    )
                    //Termino Gerente de compras
                )
           ) 
           //termino: Diretor fincanceiro    
        ),
    )

);

function exibe($cargos){

    $html = '<ul>';
        foreach ($cargos as $cargo) {
            
                $html .= '<li>';

                $html .= $cargo['nome_cargo']; 

                if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
                    $html.=exibe($cargo['subordinados']);
                }

                $html .= '</li>';
        }
    $html .= '</ul>';

    return $html;

}

echo exibe($hierarquia);


?>