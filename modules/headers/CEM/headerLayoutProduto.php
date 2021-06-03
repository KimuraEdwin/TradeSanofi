<?php

$resultctrl1 = ''; $cssDisabledctrl1 = "disabled-guia-prod";
$resultctrl2 = ''; $cssDisabledctrl2 = "disabled-guia-prod"; 
$resultctrl3 = ''; $cssDisabledctrl3 = "disabled-guia-prod"; 
$resultctrl4 = ''; $cssDisabledctrl4 = "disabled-guia-prod";  

$cssActiveSide1 = "";
$cssActiveSide2 = "";
$cssActiveSide3 = "";
$cssActiveSide4 = "";

if(isset($guiaMenu[0])){
    $ctrl1 = $guiaMenu[0];
    if ($ctrl1 == 'sku'){ 
        $resultctrl1 = 'data-nav=".skus"'; $cssDisabledctrl1 = ""; $cssActiveSide1 = "active-side"; 
    }
    else if ($ctrl1 == 'dgmpe'){ 
        $resultctrl2 = 'data-nav=".dgmpe"'; $cssDisabledctrl2 = ""; $cssActiveSide2 = "active-side";
    }
    else if($ctrl1 == 'educacao'){
        $resultctrl3 = 'data-nav=".educacao"'; $cssDisabledctrl3 = ""; $cssActiveSide3 = "active-side";
    }
    else if ($ctrl1 == 'argumentosVendas'){
        $resultctrl4 = 'data-nav=".estrategia"'; $cssDisabledctrl4 = ""; $cssActiveSide4 = "active-side";
    }
}

if(isset($guiaMenu[1])){
    $ctrl2 = $guiaMenu[1];
    if ($ctrl2 == 'dgmpe'){ 
        $resultctrl2 = 'data-nav=".dgmpe"'; $cssDisabledctrl2 = "";
    }
    else if($ctrl2 == 'educacao'){
        $resultctrl3 = 'data-nav=".educacao"'; $cssDisabledctrl3 = ""; 
    }
    else if ($ctrl2 == 'argumentosVendas'){
        $resultctrl4 = 'data-nav=".estrategia"'; $cssDisabledctrl4 = ""; 
    }
}

if(isset($guiaMenu[2])){
    $ctrl3 = $guiaMenu[2];
    if ($ctrl3 == 'educacao'){ 
        $resultctrl3 = 'data-nav=".educacao"'; $cssDisabledctrl3 = ""; 
    }
    else if ($ctrl3 == 'argumentosVendas'){
        $resultctrl4 = 'data-nav=".estrategia"'; $cssDisabledctrl4 = ""; 
    }
}

if(isset($guiaMenu[3])){
    $ctrl4 = $guiaMenu[3];
    if ($ctrl4 == 'argumentosVendas'){ 
        $resultctrl4 = 'data-nav=".estrategia"'; $cssDisabledctrl4 = ""; 
    }
}






?>

<div class="navbarMenus">
    <?php navBar(); ?>

    <div class="btn-padrao btn-acesso-geral btn-acesso-sku positionAbsolute d-table <?= $cssActiveSide1 ?> <?= $cssDisabledctrl1 ?>" <?= $resultctrl1 ?> >
        <p class="d-table-cell v-align-middle font-9">SKU</p>
    </div>
    <div class="btn-padrao btn-acesso-geral btn-acesso-dgmpe positionAbsolute d-table <?= $cssActiveSide2 ?> <?= $cssDisabledctrl2 ?>" <?= $resultctrl2 ?>>
        <p class="d-table-cell v-align-middle font-9">DGMPE</p>
    </div>
    <div class="btn-padrao btn-acesso-geral btn-acesso-educacao positionAbsolute d-table <?= $cssActiveSide3 ?> <?= $cssDisabledctrl3 ?>" <?= $resultctrl3 ?>>
        <p class="d-table-cell v-align-middle font-9">EDUCAÇÃO</p>
    </div>
    <div class="btn-padrao btn-acesso-geral btn-acesso-estrategia positionAbsolute d-table <?= $cssActiveSide4 ?> <?= $cssDisabledctrl4 ?>" <?= $resultctrl4 ?>>
        <p class="d-table-cell v-align-middle font-9">ARGUMENTOS DE VENDA</p>
    </div>
</div>