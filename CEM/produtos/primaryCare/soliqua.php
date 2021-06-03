<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "primaryCare";
$produto = "soliqua";
$heroi = "soliqua";
$paginas = [2];
$guiaMenu = ['sku', 'dgmpe', 'educacao', 'argumentosVendas'];

?>

<?php 
    if($produto != 'profenid'){
        $sizeLogo = getimagesize("../../webroot/img/logo/".$categoria."/".$produto."Logo.png");
        $proporcaoLogo = $sizeLogo[0]/$sizeLogo[1];
        $proporcaoGuia = 2.05;
        
        if(($sizeLogo[0] <= 119) && ($sizeLogo[1] <= 63)){
            $classLogo = "neutroLogo";
        }
        else if($proporcaoLogo > $proporcaoGuia){
            $classLogo = "horizontalLogo";
        }
        else if($proporcaoLogo < $proporcaoGuia){
            $classLogo = "verticalLogo";
        }
    } 
?>

<!DOCTYPE html>
<html>
    <head>
        <?php head(); ?>
    </head>
    <body>
        <div id="bg" class="stage">
            <?php headerSku($guiaMenu) ?>
            <div class="quadro positionAbsolute">

                <div class="content-page skus show">
                    <?php sku($heroi, $paginas, $categoria, $produto) ?>
                </div>

                <div class="content-page dgmpe">

                    <div data-layer-set=".DGMP" class="DGMP l1 layer show">

                    <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Dgmpe-1.png" style="z-index:1;top:30px;left:17px">
                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                    <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                </div>
                            </div>
                        </div>

                        <div class="conteudoDgmpe">
                        </div>

                        <div data-layer-ir=".l1" class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute disabled-IR">
                            <p class="d-table-cell v-align-middle">REDES</p>
                        </div>
                        <div data-layer-ir=".l2" class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute disabled-IR">
                            <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                        </div>
                    </div>
                </div>

                <div class="content-page educacao">

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l1 layer show">

                        <video class="video positionAbsolute" src="http://pratisys.com.br/cacau/video_sanofi_trade_q1/soliquaEducacao-2.mp4" controls style="top:10px!important"></video>
                        <p style="text-transform:uppercase; font-size: 14px; color:#224A7B; position: absolute; top: 450px; left: 190px">Material direcionado exclusivamente a profissionais da área da saúde.</p>
                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                    <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                </div>
                            </div>
                        </div>

                        <div class="conteudoDgmpe">
                        </div>

                        
                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-2 active"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-1"></span>
                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l2 layer">

                        <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Educacao-1.png" style="z-index:1;top:10px;left:87px">
                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                    <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                </div>
                            </div>
                        </div>

                        <div class="conteudoDgmpe">
                        </div>

                        
                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-2 "></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-1 active"></span>
                    </div>
                </div>

                <div class="content-page estrategia">

                    <div data-layer-set=".ESTRATEGIA" class="ESTRATEGIA l1 layer show">

                    <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Estrategia-1.png" style="z-index:1;top:30px;left:17px">

                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                    <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                </div>
                            </div>
                        </div>

                        <div class="conteudoDgmpe">


                        </div>
                    </div>
                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>