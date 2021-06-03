<?php 

$CTRL_LISTA = $_GET["REDE"];
$CTRL_PERFIL_LOJA = $_GET["PERFIL_LOJA"];
$CTRL_REGIAO = $_GET["REGIAO"];
$CTRL_NUMERO_DE_MODULOS = $_GET["NUMERO_DE_MODULOS"];
$CTRL_ALTURA_DO_MOBILIARIO = $_GET["ALTURA_DO_MOBILIARIO"];
$CTRL_TIPO_DE_MOBILIARIO = $_GET["TIPO_DE_MOBILIARIO"];
$CTRL_PLANOGRAMA = $_GET["PLANOGRAMA"];

echo $CTRL_LISTA."<br>";
echo $CTRL_PERFIL_LOJA."<br>";
echo $_GET["REGIAO"]."<br>";
echo $CTRL_NUMERO_DE_MODULOS."<br>";
echo $CTRL_ALTURA_DO_MOBILIARIO."<br>";
echo $CTRL_TIPO_DE_MOBILIARIO."<br>";
echo $CTRL_PLANOGRAMA."<br>";


if($CTRL_LISTA == "DPSP"){
    include("../../lista/lista_dpsp.php"); 
    if($CTRL_REGIAO == "MG + RJ + ES"){
        $CTRL_REGIAO_DSPS = "MG_RJ_ES";
    }else if($CTRL_REGIAO == "RJ + ES"){
        $CTRL_REGIAO_DSPS = "RJ_ES";
    }else if($CTRL_REGIAO == "SP + CO"){
        $CTRL_REGIAO_DSPS = "SP_CO";
    }else if($CTRL_REGIAO == "MG"){
        $CTRL_REGIAO_DSPS = "MG";
    }else if($CTRL_REGIAO == "NE"){
        $CTRL_REGIAO_DSPS = "NE";
    }
}else if($CTRL_LISTA == "EXTRAFARMA"){
    include("../../lista/lista_extrafarma.php"); 
}else if($CTRL_LISTA == "PAGUEMENOS"){
    include("../../lista/lista_paguemenos.php"); 
}else if($CTRL_LISTA == "RAIA DROGASIL"){
    include("../../lista/lista_raiadrogasil.php");
    if($CTRL_PERFIL_LOJA == "Híbrido"){
        $ctrl_perfil_raia = 'hibrido';
    } else if($CTRL_PERFIL_LOJA == "Nobre"){
        $ctrl_perfil_raia = 'nobre';
    } else if($CTRL_PERFIL_LOJA == "Popular"){
        $ctrl_perfil_raia = 'popular';
    } else if($CTRL_PERFIL_LOJA == "Super popular"){
        $ctrl_perfil_raia = 'superPopular';
    }
}


include("../../../modules/funcoesModulo.php"); 


$listaArray = array_filter($lista, function($p){
    $REDE = $_GET["REDE"];
    $CATEGORIA = $_GET["CATEGORIA"];
    $PERFIL_LOJA = $_GET["PERFIL_LOJA"];
    $REGIAO = $_GET["REGIAO"];
    $NUMERO_DE_MODULOS = $_GET["NUMERO_DE_MODULOS"];
    $ALTURA_DO_MOBILIARIO = $_GET["ALTURA_DO_MOBILIARIO"];
    $TIPO_DE_MOBILIARIO = $_GET["TIPO_DE_MOBILIARIO"];
    $PLANOGRAMA = $_GET["PLANOGRAMA"];

    return (
            $p['REDE'] == $REDE &&
            $p['CATEGORIA'] == $CATEGORIA &&
            $p['PERFIL_LOJA'] == $PERFIL_LOJA &&
            $p['REGIAO'] == $REGIAO &&
            $p['NUMERO_DE_MODULOS'] == $NUMERO_DE_MODULOS &&
            $p['ALTURA_DO_MOBILIARIO'] == $ALTURA_DO_MOBILIARIO &&
            $p['TIPO_DE_MOBILIARIO'] == $TIPO_DE_MOBILIARIO &&
            $p['PLANOGRAMA'] == $PLANOGRAMA
        );
});

$resetKey = [];

for($i = 0; $i < count($listaArray); $i++){
    array_push($resetKey, $i);
}


$lista_filtrada = array_combine($resetKey, $listaArray);



if($lista_filtrada[0]["REDE"] == 'DPSP'){
    $imgSrcTabela = $CTRL_LISTA."/".$CTRL_REGIAO."/tabela";
    $imgSrcZoom = $CTRL_LISTA."/".$CTRL_REGIAO."/zoom";
}
else if($lista_filtrada[0]["REDE"] == 'EXTRAFARMA'){
    $imgSrcTabela = "EXTRAFARMA/tabela";
    $imgSrcZoom = "EXTRAFARMA/zoom";
}
else if($lista_filtrada[0]["REDE"] == 'PAGUEMENOS'){
    $imgSrcTabela = "PAGUEMENOS/tabela";
    $imgSrcZoom = "PAGUEMENOS/zoom";
}
else if($lista_filtrada[0]["REDE"] == 'RAIA DROGASIL'){
    if($lista_filtrada[0]["TIPO_DE_MOBILIARIO"] == "NOVO"){
        $imgSrcTabela = "RAIADROGASIL/novo/".$ctrl_perfil_raia."/tabela";
        $imgSrcZoom = "RAIADROGASIL/novo/".$ctrl_perfil_raia."/zoom";
    }else if($lista_filtrada[0]["TIPO_DE_MOBILIARIO"] == "Antigo"){
        $imgSrcTabela = "RAIADROGASIL/antigo/".$ctrl_perfil_raia."/tabela";
        $imgSrcZoom = "RAIADROGASIL/antigo/".$ctrl_perfil_raia."/zoom";
    }
}


$imgName = str_replace(" ","_", $lista_filtrada[0]['PLANOGRAMA']);
$imgName = str_replace("  ","_", $imgName);
$imgName = str_replace(",","_", $imgName);
$imgName = str_replace("+","_", $imgName);
$imgName = str_replace("-","_", $imgName);
$imgName = str_replace("/","_", $imgName);
$imgName = str_replace("ó","o", $imgName);
$imgName = str_replace("ã","a", $imgName);
$imgName = str_replace("í","i", $imgName);
$imgName = str_replace("Ó","O", $imgName);
$imgName = str_replace("Ã","A", $imgName);
$imgName = str_replace("Í","I", $imgName);


$b = 0;
$c = 0;
$d = 0;
$e = 0;
$ctrl_prateleira = 0;
$ctrl_prateleira_table = 0;
$ctrl_prateleira_num = 0;
$ctrl_prateleira_pop = 0;


$resto_table = (count($lista_filtrada))%5;
$ctrl_table = ((count($lista_filtrada))-$resto_table)/5;

$resto_zoom = (count($lista_filtrada))%2;
$ctrl_zoom = ((count($lista_filtrada))-$resto_zoom)/2;


?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html"; charset="UTF-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1.0, user-scalable="no"/>

        <title>Planograma</title>

        <link rel="stylesheet" href="../../../webroot/css/styleUnificado.css"/>
        <link rel="stylesheet" href="../../webroot/css/style.css"/>
    </head>
    <body>
        <div id="bg-planograma" class="stage">
            <div class="positionAbsolute d-flex container">

                <div class="PLANOGRAMA-VIEW positionAbsolute container layer l1 show-flex">

                    <div class="painel-esq">
                        <div class="content-inner">
                            <p class="title-content padding-left-20 padding-top-30">
                                dor e <br>febre
                            </p>
                            <p class="text-content padding-left-20 padding-top-30" style="text-transform: none">
                                principais diretrizes
                            </p>
                            <ul class="padding-top-10">
                                <li class="padding-right-10 padding-top-20  txt-mark">
                                    Ser a marca com mais frentes na
                                    categoria de analgésicos versus os
                                    concorrentes (Neosaldina e Advil);
                                </li>
                                <li class="padding-right-10 padding-top-20 txt-mark">
                                    Buscar ter sempre uma frente
                                    a mais que Neosaldina;
                                </li>
                                <li class="padding-right-10 padding-top-20 txt-mark">
                                    Dorflex deve estar sempre
                                    ao lado de Neosaldina;
                                </li>
                                <li class="padding-right-10 padding-top-20 txt-mark">
                                    Nunca deixar similares e
                                    genéricos ao lado de Dorflex.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="painel-mid">
                        <div class="content-inner d-flex flex-direction-column j-content-s-between a-items-center">
                            <div class="btn-nav-top d-flex j-content-s-around a-items-center">
                                <div class="btn-top-nav-menu d-flex j-content-s-around a-items-center flex-direction-column">
                                    <img src="../../webroot/img/icon/tabela_ativo.png" alt="">
                                </div>
                                <?php if($lista_filtrada[0]["REDE"] != 'DPSP'){ ?>
                                    <div class="btn-top-nav-menu d-flex j-content-s-around a-items-center flex-direction-column">
                                        <img src="../../webroot/img/icon/<?php if($lista_filtrada[0]["REDE"] != 'DPSP'){ echo "numero"; }else{echo "num_dest";} ?>.png" alt="">
                                    </div>
                                <?php } ?>
                                <div class="btn-top-nav-menu d-flex j-content-s-around a-items-center flex-direction-column">
                                    <img src="../../webroot/img/icon/zoom.png" alt="">
                                </div>
                            </div>
                            <div class="width-100">

                                <div class="TABLE-PLANOGRAMA-VA positionRelative layer l1 show">

                                    <div class="table-ean-ctrl">
                                        <table class="table-ean" style="margin-top: -10px;">
                                            <thead>
                                                <td style="border-bottom:2px solid white; padding-left: 30px;font-weight:bold">EAN - produtos</td>
                                                <td style="border-right:1px solid white;font-weight:bold">frente</td>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    for($p = 0; $p < count($lista_filtrada); $p++){
                                                        if($ctrl_prateleira != $lista_filtrada[$p]['PRATELEIRA']){
                                                ?>
                                                <tr>
                                                    <td colspan="2" style="color: white;padding-left: 10px;text-align: left; font-weight: 500">
                                                        <?= "PRATELEIRA ".$lista_filtrada[$p]['PRATELEIRA'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><?= $lista_filtrada[$p]['EAN'].' '.$lista_filtrada[$p]['NOME'] ?></td>
                                                    <td><?= $lista_filtrada[$p]['FRENTE'] ?></td>
                                                </tr>
                                                <?php 
                                                    $ctrl_prateleira = $lista_filtrada[$p]['PRATELEIRA'];
                                                    }
                                                    else{
                                                ?>
                                                <tr>
                                                    <td><?= $lista_filtrada[$p]['EAN'].' '.$lista_filtrada[$p]['NOME'] ?></td>
                                                    <td><?= $lista_filtrada[$p]['FRENTE'] ?></td>
                                                </tr>
                                                <?php 
                                                    }
                                                    $b = $b+1; } 
                                                ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                  

                                </div>

                            </div>
                            <div class="width-90 d-flex">
                                <div id="show-popup" class="d-flex" style="margin-right:0px;margin-bottom:10px">
                                    <p style="color:white">tela cheia</p>
                                    <img src="../../webroot/img/icon/full-btn.png" alt="" style="margin-left:10px">
                                </div>
                            </div>
                            <div id="popup-planograma" class="popup popup-table">
                                <div id="close-popup" class="btn-close-popup">
                                    <p>X</p>
                                </div>
                                <div class="table-ean-ctrl" style="width:1000px!important;">
                                    <table class="table-ean" style="margin-top: -10px;">
                                        <thead>
                                            <td style="width:700px!important;border-bottom:2px solid white; padding-left: 30px;font-weight:bold;color:white!important">EAN - produtos</td>
                                            <td style="border-right:1px solid white;font-weight:bold;color:white!important">frente</td>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                for($l = 0; $l < count($lista_filtrada); $l++){
                                                    if($ctrl_prateleira_pop != $lista_filtrada[$l]['PRATELEIRA']){
                                            ?>
                                            <tr>
                                                <td colspan="2" style="color: white;font-size:16px;padding-left: 10px;text-align: left; font-weight: 500">
                                                    <?= "PRATELEIRA ".$lista_filtrada[$l]['PRATELEIRA'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="color: white;font-size:16px;"><?= $lista_filtrada[$l]['EAN'].' '.$lista_filtrada[$l]['NOME'] ?></td>
                                                <td style="color: white;font-size:16px;"><?= $lista_filtrada[$l]['FRENTE'] ?></td>
                                            </tr>
                                            <?php 
                                                $ctrl_prateleira_pop = $ctrl_prateleira_pop + 1;
                                                }
                                                else{
                                            ?>
                                            <tr>
                                                <td style="color: white;font-size:16px;"><?= $lista_filtrada[$l]['EAN'].' '.$lista_filtrada[$l]['NOME'] ?></td>
                                                <td style="color: white;font-size:16px;"><?= $lista_filtrada[$l]['FRENTE'] ?></td>
                                            </tr>
                                            <?php 
                                                }
                                                $e = $e+1; } 
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="painel-dir">
                        <div class="content-inner d-flex flex-direction-column j-content-s-between a-items-center">
                            <div class="border-planograma ">

                            <?php if($lista_filtrada[0]["REDE"] != 'DPSP'){ ?>
                                <div class="PLANOGRAMA-VA positionRelative layer l1 show">
                                    <img src="../../webroot/img/<?php echo $imgSrcTabela ?>/<?php echo $imgName ?><?php if($lista_filtrada[0]["REDE"] != 'DPSP'){echo "_semnumero";} ?>_1.png" alt="">
                                    
                                </div>
                            <?php } else { 
                                $ctrl_plan = $lista_filtrada[0]["QTD_PLAN"];
                                if($ctrl_plan == 3){
                                    for($i = 0; $i < $ctrl_plan; $i++){
                            ?>

                                            <div class="PLANOGRAMA-VA positionRelative layer l<?= $i+1 ?> <?php if($i == 0){echo "show";} ?>">
                                                <img src="../../webroot/img/<?php echo $imgSrcTabela ?>/<?php echo $imgName ?>_<?= $i+1 ?>.png" alt="" style="margin: 0px 80px;">

                                                <div <?php if($i != 0){ echo 'data-layer-planograma=".l'.$i.'"'; }?> class="img-arrow-planograma arrow-back">
                                                    <img src="../../webroot/img/icon/arrow-plan-active.png" alt="" style="transform:rotate(180deg)">
                                                </div>
                                                <div class="marcador-planograma marcador-back-trio <?php if($i == 0){ echo 'marcador-active'; }?>"></div>
                                                <div class="marcador-planograma marcador-meio-trio <?php if($i == 1){ echo 'marcador-active'; }?>"></div>
                                                <div class="marcador-planograma marcador-next-trio <?php if($i == 2){ echo 'marcador-active'; }?>"></div>

                                                <div <?php if($i != 2){ $n=$i +2; echo 'data-layer-planograma=".l'.$n.'"'; }?> class="img-arrow-planograma arrow-next">
                                                    <img src="../../webroot/img/icon/arrow-plan-dst.png" alt="" style="transform:rotate(180deg)">
                                                </div>
                                            </div>

                            <?php
                                    }
                                } else {
                                    for($i = 0; $i < 2; $i++){
                            ?>


                                            <div class="PLANOGRAMA-VA positionRelative layer l<?= $i+1 ?> <?php if($i == 0){echo "show";} ?>">
                                                <img src="../../webroot/img/<?php echo $imgSrcTabela ?>/<?php echo $imgName ?>_<?= $i+1 ?>.png" alt="">

                                                <div <?php if($i != 0){ echo 'data-layer-planograma=".l'.$i.'"'; }?> class="img-arrow-planograma arrow-back">
                                                    <img src="../../webroot/img/icon/arrow-plan-active.png" alt="" style="transform:rotate(180deg)">
                                                </div>
                                                <div class="marcador-planograma marcador-back <?php if($i == 0){ echo 'marcador-active'; }?>"></div>
                                                <div class="marcador-planograma marcador-next <?php if($i == 1){ echo 'marcador-active'; }?>"></div>

                                                <div <?php if(($i == 0)){ $n=$i +2; echo 'data-layer-planograma=".l'.$n.'"'; }?> class="img-arrow-planograma arrow-next">
                                                    <img src="../../webroot/img/icon/arrow-plan-dst.png" alt="" style="transform:rotate(180deg)">
                                                </div>
                                            </div>


                            <?php
                                    }
                                }
                            ?>
                                
                            <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div data-layer-view-g=".l1" class="btn-view-g btn-table-view"></div>
                    <?php if($lista_filtrada[0]["REDE"] != 'DPSP'){ ?>
                        <div <?php if($lista_filtrada[0]["REDE"] != 'DPSP'){ echo "data-layer-view-g='.l2'";} ?> class="btn-view-g btn-number-view"></div>
                    <?php } ?>
                    <div data-layer-view-g=".l3" class="btn-view-g btn-zoom-view"></div>

                </div>

                <div class="PLANOGRAMA-VIEW positionAbsolute container layer l2">

                    <div class="painel-esq">
                        <div class="content-inner">
                            <p class="title-content padding-left-20 padding-top-30">
                                dor e <br>febre
                            </p>
                            <p class="text-content padding-left-20 padding-top-30" style="text-transform: none">
                                principais diretrizes
                            </p>
                            <ul class="padding-top-10">
                                <li class="padding-right-10 padding-top-20 txt-mark">
                                    Ser a marca com mais frentes na
                                    categoria de analgésicos versus os
                                    concorrentes (Neosaldina e Advil);
                                </li>
                                <li class="padding-right-10 padding-top-20 txt-mark">
                                    Buscar ter sempre uma frente
                                    a mais que Neosaldina;
                                </li>
                                <li class="padding-right-10 padding-top-20 txt-mark">
                                    Dorflex deve estar sempre
                                    ao lado de Neosaldina;
                                </li>
                                <li class="padding-right-10 padding-top-20 txt-mark">
                                    Nunca deixar similares e
                                    genéricos ao lado de Dorflex.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="painel-mid">
                        <div class="content-inner d-flex flex-direction-column j-content-s-between a-items-center">
                            <div class="btn-nav-top d-flex j-content-s-around a-items-center">
                                <div class="btn-top-nav-menu d-flex j-content-s-around a-items-center flex-direction-column">
                                    <img src="../../webroot/img/icon/tabela.png" alt="">
                                </div>
                                <div class="btn-top-nav-menu d-flex j-content-s-around a-items-center flex-direction-column">
                                    <img src="../../webroot/img/icon/num_ativo.png" alt="">
                                </div>
                                <div class="btn-top-nav-menu d-flex j-content-s-around a-items-center flex-direction-column">
                                    <img src="../../webroot/img/icon/zoom.png" alt="">
                                </div>
                            </div>
                            <div class="width-100">

                                <div class="TABLE-PLANOGRAMA-VA positionRelative layer l1 show">

                                    <div class="table-ean-ctrl">
                                        <table class="table-ean" style="margin-top: -10px;">
                                            <thead>
                                                <td style="border-bottom:2px solid white; padding-left: 30px;font-weight:bold">EAN - produtos</td>
                                                <td style="border-right:1px solid white;font-weight:bold">frente</td>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    for($p = 0; $p < count($lista_filtrada); $p++){
                                                        if($ctrl_prateleira_num != $lista_filtrada[$p]['PRATELEIRA']){
                                                ?>
                                                <tr>
                                                    <td colspan="2" style="color: white;padding-left: 10px;text-align: left; font-weight: 500">
                                                        <?= "PRATELEIRA ".$lista_filtrada[$p]['PRATELEIRA'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><?= $lista_filtrada[$p]['POSICAO']."_".$lista_filtrada[$p]['EAN'].' '.$lista_filtrada[$p]['NOME'] ?></td>
                                                    <td><?= $lista_filtrada[$p]['FRENTE'] ?></td>
                                                </tr>
                                                <?php 
                                                    $ctrl_prateleira_num = $ctrl_prateleira_num + 1;
                                                    }
                                                    else{
                                                ?>
                                                <tr>
                                                    <td><?= $lista_filtrada[$p]['POSICAO']."_".$lista_filtrada[$p]['EAN'].' '.$lista_filtrada[$p]['NOME'] ?></td>
                                                    <td><?= $lista_filtrada[$p]['FRENTE'] ?></td>
                                                </tr>
                                                <?php 
                                                    }
                                                    $d = $d+1; } 
                                                ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                  

                                </div>

                            </div>
                            <div class="width-90 d-flex">
                                <div class="d-flex" style="margin-right:0px;margin-bottom:10px">
                                    <p style="color:white">tela cheia</p>
                                    <img src="../../webroot/img/icon/full-btn.png" alt="" style="margin-left:10px">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="painel-dir">
                        <div class="content-inner d-flex flex-direction-column j-content-s-between a-items-center">
                            <div class="border-planograma ">

                            <?php if($lista_filtrada[0]["REDE"] != 'DPSP'){ ?>
                                <div class="PLANOGRAMA-VA positionRelative layer l1 show">
                                    <img src="../../webroot/img/<?php echo $imgSrcTabela ?>/<?php echo $imgName ?><?php if($lista_filtrada[0]["REDE"] != 'DPSP'){echo "_numero";} ?>_1.png" alt="">
                                    
                                </div>
                            <?php } else { 
                                $ctrl_plan = $lista_filtrada[0]["QTD_PLAN"];
                                if($ctrl_plan == 3){
                                    for($i = 0; $i < $ctrl_plan; $i++){
                            ?>

                                    <div class="PLANOGRAMA-VA positionRelative layer l<?= $i+1 ?> <?php if($i == 0){echo "show";} ?>">
                                        <img src="../../webroot/img/<?php echo $imgSrcTabela ?>/<?php echo $imgName ?>_<?= $i+1 ?>.png" alt="" style="margin: 0px 80px;">

                                        <div <?php if($i != 0){ echo 'data-layer-planograma=".l'.$i.'"'; }?> class="img-arrow-planograma arrow-back">
                                            <img src="../../webroot/img/icon/arrow-plan-active.png" alt="" style="transform:rotate(180deg)">
                                        </div>
                                        <div class="marcador-planograma marcador-back-trio <?php if($i == 0){ echo 'marcador-active'; }?>"></div>
                                        <div class="marcador-planograma marcador-meio-trio <?php if($i == 1){ echo 'marcador-active'; }?>"></div>
                                        <div class="marcador-planograma marcador-next-trio <?php if($i == 2){ echo 'marcador-active'; }?>"></div>

                                        <div <?php if($i != 2){ $n=$i +2; echo 'data-layer-planograma=".l'.$n.'"'; }?> class="img-arrow-planograma arrow-next">
                                            <img src="../../webroot/img/icon/arrow-plan-dst.png" alt="" style="transform:rotate(180deg)">
                                        </div>
                                    </div>

                            <?php
                                    }
                                } else {
                                    for($i = 0; $i < 2; $i++){
                            ?>


                                    <div class="PLANOGRAMA-VA positionRelative layer l<?= $i+1 ?> <?php if($i == 0){echo "show";} ?>">
                                        <img src="../../webroot/img/<?php echo $imgSrcTabela ?>/<?php echo $imgName ?>_<?= $i+1 ?>.png" alt="">

                                        <div <?php if($i != 0){ echo 'data-layer-planograma=".l'.$i.'"'; }?> class="img-arrow-planograma arrow-back">
                                            <img src="../../webroot/img/icon/arrow-plan-active.png" alt="" style="transform:rotate(180deg)">
                                        </div>
                                        <div class="marcador-planograma marcador-back <?php if($i == 0){ echo 'marcador-active'; }?>"></div>
                                        <div class="marcador-planograma marcador-next <?php if($i == 1){ echo 'marcador-active'; }?>"></div>

                                        <div <?php if(($i == 0)){ $n=$i +2; echo 'data-layer-planograma=".l'.$n.'"'; }?> class="img-arrow-planograma arrow-next">
                                            <img src="../../webroot/img/icon/arrow-plan-dst.png" alt="" style="transform:rotate(180deg)">
                                        </div>
                                    </div>


                            <?php
                                    }
                                }
                            ?>
                                
                            <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div data-layer-view-g=".l1" class="btn-view-g btn-table-view"></div>
                    <div <?php if($lista_filtrada[0]["REDE"] != 'DPSP'){ echo "data-layer-view-g='.l2'";} ?> class="btn-view-g btn-number-view"></div>
                    <div data-layer-view-g=".l3" class="btn-view-g btn-zoom-view"></div>

                </div>

                <div class="PLANOGRAMA-VIEW positionAbsolute container layer l3 ">
                    <div class="painel-esq-zoom">
                        <div class="content-inner d-flex flex-direction-column j-content-s-between a-items-center">

                            <div class="area-zoom-titulo">
                                <p class="title-content-zoom padding-top-10">
                                    dor e <br>febre
                                </p>
                            </div>
                                
                            <div class="btns-hor-area">
                                <div class="btn-nav-top d-flex j-content-s-around a-items-center">
                                    <div class="btn-top-nav-menu d-flex j-content-s-around a-items-center flex-direction-column">
                                        <img src="../../webroot/img/icon/tabela.png" alt="">
                                    </div>
                                    <?php if($lista_filtrada[0]["REDE"] != 'DPSP'){ ?>
                                        <div class="btn-top-nav-menu d-flex j-content-s-around a-items-center flex-direction-column">
                                            <img src="../../webroot/img/icon/<?php if($lista_filtrada[0]["REDE"] != 'DPSP'){ echo "numero"; }else{echo "num_dest";} ?>.png" alt="">
                                        </div>
                                    <?php } ?>
                                    <div class="btn-top-nav-menu d-flex j-content-s-around a-items-center flex-direction-column">
                                        <img src="../../webroot/img/icon/zoom_ativo.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="TABLE-ZOOM-PLANOGRAMA-VA positionRelative layer l<?= $z+1 ?> <?php if($z == 0){ echo 'show'; } ?>" style="height: 200px;">
                                
                                <div class="table-ean-ctrl-zoom">
                                    <table class="table-ean" style="margin-top: -10px;">
                                        <thead>
                                            <td style="border-bottom:2px solid white; padding-left: 30px;font-weight:bold">EAN - produtos</td>
                                            <td style="border-right:1px solid white;font-weight:bold">frente</td>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                for($p = 0; $p < count($lista_filtrada); $p++){
                                                    if($ctrl_prateleira_table != $lista_filtrada[$p]['PRATELEIRA']){
                                            ?>
                                            <tr>
                                                <td colspan="2" style="color: white;padding-left: 10px;text-align: left; font-weight: 500">
                                                    <?= "PRATELEIRA ".$lista_filtrada[$p]['PRATELEIRA'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?= $lista_filtrada[$p]['EAN'].' '.$lista_filtrada[$p]['NOME'] ?></td>
                                                <td><?= $lista_filtrada[$p]['FRENTE'] ?></td>
                                            </tr>
                                            <?php 
                                                $ctrl_prateleira_table = $ctrl_prateleira_table + 1;
                                                }
                                                else{
                                            ?>
                                            <tr>
                                                <td><?= $lista_filtrada[$p]['EAN'].' '.$lista_filtrada[$p]['NOME'] ?></td>
                                                <td><?= $lista_filtrada[$p]['FRENTE'] ?></td>
                                            </tr>
                                            <?php 
                                                }
                                                $b = $b+1; } 
                                            ?>
                                                
                                        </tbody>
                                    </table>
                                </div>


                            </div>


                        </div>
                    </div>
                    <div class="painel-dir-zoom">
                        <div class="content-inner">
                            <div class="border-zoom ">

                                <div class="PLANOGRAMA-ZOOM-VA positionRelative height-100 padding-top-40 layer l1 show">

                                    <div class="PLANOGRAMA-ZOOM-V-VA positionRelative height-100 layer l1 dimensionamento show" style="text-align: center">
                                        <img src="../../webroot/img/<?php echo $imgSrcZoom ?>/<?php echo $imgName ?>_z1.png" alt="">
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>

                    <div data-layer-view-g=".l1" class="btn-vert-menu-g btn-table-view-v"></div>
                    <?php if($lista_filtrada[0]["REDE"] != 'DPSP'){ ?>
                        <div <?php if($lista_filtrada[0]["REDE"] != 'DPSP'){ echo "data-layer-view-g='.l2'";} ?> class="btn-vert-menu-g btn-number-view-v"></div>
                    <?php } ?>
                    <div data-layer-view-g=".l3" class="btn-vert-menu-g btn-zoom-view-v"></div>
                </div>

                <?php require("../../../modules/menus/PLANOGRAMA/menuBaixo.php"); ?>


                <?php scripts(); ?>

                <script>
                    $("#fechar-popup-plan").on("click", function(){
                        $("#content-plan-geral").empty()
                    })
                </script>
              
            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

    </body>
</html>