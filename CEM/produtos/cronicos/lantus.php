<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "cronicos";
$produto = "lantus";
$heroi = "lantus";
$paginas = [3];
$guiaMenu = ['sku', 'dgmpe', 'argumentosVendas'];

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
                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                    <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                </div>
                            </div>
                            <div class="ctrl-box-lantus-dgmpe d-table">
                                <div class="d-table-cell v-align-middle">
                                    <div class="area-icone-dgmpe-lantus area-icone-gondola d-table">
                                        <div class="d-table-cell v-align-middle">
                                            <img src="../../webroot/img/icones/shelf.png"/>
                                            <p class="icone-texto">Gôndola</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="conteudoDgmpe">

                            <div class="area-conteudo-dgmpe-lantus area-conteudo-gondola d-table positionAbsolute">
                                <div class="d-table-cell v-align-middle">
                                    <div class="linha-guia-lantus-dgmpe-v positionAbsolute"></div>
                                    <div class="linha-guia-lantus-dgmpe-h positionAbsolute"></div>
                                    <p class="positionAbsolute colorWhite font-24 uppercase" style="top:22px; left: 175px">Produto</p>
                                    <p class="positionAbsolute colorWhite font-24 uppercase" style="top:22px; right: 102px">Redes</p>
                                    <p class="positionAbsolute colorWhite font-24 uppercase" style="top:102px; left: 120px">LANTUS solostar</p>
                                    <p class="positionAbsolute colorWhite font-16 uppercase" style="top:142px; left: 110px">VB Recomendado: 3 canetas<br> para tratamento de 1 mês + 1 unidade</p>
                                    <p class="positionAbsolute colorWhite font-32 uppercase" style="top:122px; right: 50px">4 unidades</p>
                                </div>
                            </div>

                        </div>

                        <div class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute disabled-IR">
                            <p class="d-table-cell v-align-middle">REDES</p>
                        </div>
                        <div class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute disabled-IR">
                            <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                        </div>
                    </div>
                </div>

                <div class="content-page estrategia">

                    <div data-layer-set=".ESTRATEGIA" class="ESTRATEGIA l1 layer show">

                    <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Estrategia-1.png" style="width:97%;z-index:1;top:30px;left:17px">

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