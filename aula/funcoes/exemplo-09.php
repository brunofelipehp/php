<?php

$hierarquia  = array(

     array(
         'nome_cargo' => 'CEO',
         'subordinado' => array(
             //Inicio Diretor comercial
             array(

                'nome_cargo' => 'Diretor comercial',
                'subordinado' => array(

                     // inicio Gerente de venda

                 array(
                     'nome_cargo' => 'Gerente de vendas'
                 )
                 //termino gerente de vendas
                )
             
        ),
        //termino Diretor comercial
        //inicio Diretor Financeiro
        array(       
                 'nome_cargo' => 'Diretor Financeiro',
                 'subordinado' => array(
                  // inicio Gerente de contas a pagar
                  array(
                  'nome_cargo' => 'Gerente de contas a pagar',
                  'subordinado' => array(
                      //inicio supervisor de pagamento
                    array(
                        'nome_cargo' => 'Supervisor de pagamento'
                    )
                    //termino supervisor de pagamneto
                  )
                  
                    ),
                    //termino Gerente de contas a pagar
                    //inicio Gerente de compras
                 array(
                     'nome_cargo' => 'Gerente de compra',
                     'subordinado' => array(
                        //inicio supervisor de supremento
                        $arrayName = array(
                            'nome_cargo' => 'Supervisor de suprementos'
                              )
                        //termino superviso de supremento
                        )

                 )
                 // termino gerente de compras
                 )
            
           )
           //Termino Diretor financeiro
           
        )
     )

);

      function exibe($cargos){

        $html = '<ul>';

        foreach ($cargos as $cargo) {
            
            $html .= '<li>';

            $html .= $cargo['nome_cargo'];

            if (isset($cargo['subordinado']) && count($cargo['subordinado']) > 0) {
                
                $html .= exibe($cargo['subordinado']);
            }


            $html .= '</li>';
        }

        $html .= '</ul>';

        return $html;

}

echo exibe($hierarquia);

?>