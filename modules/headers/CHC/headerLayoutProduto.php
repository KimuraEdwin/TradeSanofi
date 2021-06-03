<?php

if(isset($guiaMenu[0])){
    $ctrl1 = $guiaMenu[0];
    if ($ctrl1 == 'sku'){ 
        $resultctrl1 = 'data-nav-chc=".skus"'; $cssDisabledctrl1 = ""; 
        $resultctrl2 = ''; $cssDisabledctrl2 = "disabled-guia-prod"; 
        $resultctrl3 = ''; $cssDisabledctrl3 = "disabled-guia-prod"; 
        $resultctrl4 = ''; $cssDisabledctrl4 = "disabled-guia-prod"; 
        $resultctrl5 = ''; $cssDisabledctrl5 = "disabled-guia-prod"; 
    }
    else{
        $resultctrl1 = ''; $cssDisabledctrl1 = "disabled-guia-prod";
        $resultctrl2 = ''; $cssDisabledctrl2 = "disabled-guia-prod"; 
        $resultctrl3 = ''; $cssDisabledctrl3 = "disabled-guia-prod"; 
        $resultctrl4 = ''; $cssDisabledctrl4 = "disabled-guia-prod";  
        $resultctrl5 = ''; $cssDisabledctrl5 = "disabled-guia-prod";  
    }
}

if(isset($guiaMenu[1])){
    $ctrl2 = $guiaMenu[1];
    if ($ctrl2 == 'distribuicao'){ 
        $resultctrl2 = 'data-nav-chc=".distribuicao"'; $cssDisabledctrl2 = ""; 
    }
    else if($ctrl2 == 'gondola'){
        $resultctrl3 = 'data-nav-chc=".gondola"'; $cssDisabledctrl3 = ""; 
    }
    else if ($ctrl2 == 'educacao'){
        $resultctrl4 = 'data-nav-chc=".educacao"'; $cssDisabledctrl4 = "";
    }
    else if ($ctrl2 == 'merchan'){
        $resultctrl5 = 'data-nav-chc=".merchan"'; $cssDisabledctrl5 = "";
    }
    else{ 
    $resultctrl2 = ''; $cssDisabledctrl2 = "disabled-guia-prod"; 
    $resultctrl3 = ''; $cssDisabledctrl3 = "disabled-guia-prod"; 
    $resultctrl4 = ''; $cssDisabledctrl4 = "disabled-guia-prod"; 
    $resultctrl5 = ''; $cssDisabledctrl5 = "disabled-guia-prod"; 
    }
}

if(isset($guiaMenu[2])){
    $ctrl3 = $guiaMenu[2];
    if ($ctrl3 == 'gondola'){ 
        $resultctrl3 = 'data-nav-chc=".gondola"'; $cssDisabledctrl3 = ""; 
    }
    else if ($ctrl3 == 'educacao'){
        $resultctrl4 = 'data-nav-chc=".educacao"'; $cssDisabledctrl4 = "";
    }
    else if ($ctrl3 == 'merchan'){
        $resultctrl5 = 'data-nav-chc=".merchan"'; $cssDisabledctrl5 = "";
    }
    else{ 
    $resultctrl3 = ''; $cssDisabledctrl3 = "disabled-guia-prod"; 
    $resultctrl4 = ''; $cssDisabledctrl4 = "disabled-guia-prod"; 
    $resultctrl5 = ''; $cssDisabledctrl5 = "disabled-guia-prod"; 
    }
}

if(isset($guiaMenu[3])){
    $ctrl4 = $guiaMenu[3];
    if ($ctrl4 == 'educacao'){ 
        $resultctrl4 = 'data-nav-chc=".educacao"'; $cssDisabledctrl4 = "";
    }
    else if ($ctrl4 == 'merchan'){ 
        $resultctrl5 = 'data-nav-chc=".merchan"'; $cssDisabledctrl5 = "";
    }
    else{ 
    $resultctrl4 = ''; $cssDisabledctrl4 = "disabled-guia-prod"; 
    }
}

if(isset($guiaMenu[4])){
    $ctrl5 = $guiaMenu[4];
    if ($ctrl5 == 'merchan'){ 
        $resultctrl5 = 'data-nav-chc=".merchan"'; $cssDisabledctrl5 = "";
    }
    else{ 
    $resultctrl5 = ''; $cssDisabledctrl5 = "disabled-guia-prod"; 
    }
}


$activeCategoria = "active-menusuperior-".$categoria;


?>

<div id=<?= $activeCategoria ?> class="navbarMenus">

    <div class="btn-padrao-submenu btn-acesso-geral btn-acesso-sku positionAbsolute d-table <?=$activeCategoria?> <?= $cssDisabledctrl1 ?>" <?= $resultctrl1 ?> >
        <p class="d-table-cell v-align-middle font-9">SKU</p>
    </div>
    <div class="btn-padrao-submenu btn-acesso-geral btn-acesso-dgmpe positionAbsolute d-table <?= $cssDisabledctrl2 ?>" <?= $resultctrl2 ?>>
        <p class="d-table-cell v-align-middle font-9">DISTRIBUIÇÃO TQT</p>
    </div>
    <div class="btn-padrao-submenu btn-acesso-geral btn-acesso-educacao positionAbsolute d-table <?= $cssDisabledctrl3 ?>" <?= $resultctrl3 ?>>
        <p class="d-table-cell v-align-middle font-9">GÔNDOLA</p>
    </div>
    <div class="btn-padrao-submenu btn-acesso-geral btn-acesso-estrategia positionAbsolute d-table <?= $cssDisabledctrl4 ?>" <?= $resultctrl4 ?>>
        <p class="d-table-cell v-align-middle font-9">EDUCAÇÃO</p>
    </div>
    <div class="btn-padrao-submenu btn-acesso-geral btn-acesso-merchan positionAbsolute d-table <?= $cssDisabledctrl5 ?>" <?= $resultctrl5 ?>>
        <p class="d-table-cell v-align-middle font-9">MERCHANDISING</p>
    </div>
</div>