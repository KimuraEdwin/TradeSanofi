<?php
    $qtd_produto = count($list_sku);
    $total_sku = $qtd_produto;
    $calculo_de_paginas = $qtd_produto/4;
    $numero_de_paginas = 0;
    $index = 1;
    $sku = 0;
    $cod_comercial = 0;
    $ean = 0;
    $cx_embarque = 0;


    if ($calculo_de_paginas < 1 ){
        $numero_de_paginas = 1;
    }else{
        $numeroInteiroPag = intval($calculo_de_paginas);
        $numeroFloatPag = $calculo_de_paginas - $numeroInteiroPag;
        $transformaInteiro = intval($numeroFloatPag * 10);

        if($transformaInteiro <= 5){
            $calculoParaPag = 6 - $transformaInteiro;
            $calculoParaPag += $transformaInteiro;
            $numero_de_paginas = round($numeroInteiroPag + ($calculoParaPag / 10));
        }else{
            $numero_de_paginas = round($calculo_de_paginas);
        }
    }
?>