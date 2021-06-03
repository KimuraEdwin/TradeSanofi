<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "agudos";
$produto = "profenid";
$heroi = "profenid";
$paginas = [1,1,1,1,1,1,1,1,3];
$guiaMenu = ['sku', 'dgmpe', 'argumentosVendas'];

?>

<?php 
    if($produto == 'profenid'){
        $sizeLogo = getimagesize("../../webroot/img/logo/".$categoria."/".$produto."Logo-2.png");
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
                                    <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo-2.png"/>
                                </div>
                            </div>
                        </div>

                        <div class="conteudoDgmpe">
                        </div>

                        <div class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute disabled-IR">
                            <p class="d-table-cell v-align-middle">REDES</p>
                        </div>
                        <div class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute disabled-IR">
                            <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                        </div>
                    </div>
                </div>

                <div class="content-page educacao">

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l1 layer show">

                       
                    
                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                    <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo-2.png"/>
                                </div>
                            </div>
                        </div>

                        <div class="conteudoDgmpe">
                        </div>
                    </div>
                </div>

                <div class="content-page estrategia">

                    <div data-layer-set=".ESTRA" class="ESTRA largumentos1 layer show">

                        <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Estrategia-1.png" style="z-index:1;top:30px;left:17px">

                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                    <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo-2.png"/>
                                </div>
                            </div>
                        </div>

                        <div class="conteudoDgmpe">
                        </div>

                        <span data-layer=".largumentos1" class="bts-layer-sku bt-layer-sku-2 active"></span>
                        <span data-layer=".largumentos2" class="bts-layer-sku bt-layer-sku-1"></span>
                    </div>

                    <div data-layer-set=".ESTRA" class="ESTRA largumentos2 layer">

                        <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Estrategia-2.png" style="z-index:1;top:30px;left:17px">

                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                    <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo-2.png"/>
                                </div>
                            </div>
                        </div>

                        <div class="conteudoDgmpe">
                        </div>

                        <span data-layer=".largumentos1" class="bts-layer-sku bt-layer-sku-2 "></span>
                        <span data-layer=".largumentos2" class="bts-layer-sku bt-layer-sku-1 active"></span>
                    </div>
                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>