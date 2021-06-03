<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "dorfebre";
$produto = "dorflexicy";
$paginasSku = [3];
$paginasDist = [3,2];
$guiaMenu = ['sku', 'educacao'];

?>

<!DOCTYPE html>
<html>
    <head>
        <?php head(); ?>
    </head>
    <body>
        <div id="bg-produtos" class="stage">
            <?php navBarCHC($categoria); ?>
            <?php headerSkuCHC($guiaMenu, $categoria) ?>
            <div class="quadro-produtos positionAbsolute">

            
                <img class="logo_produtos" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Logo.png" />

                <div class="content-page ajuste-content-page skus show">
                    <?php skuCHC($paginasSku, $categoria, $produto) ?>
                </div>

                <div class="content-page ajuste-content-page educacao">

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l1 layer show">
                        <div class="conteudoEducacao text-center">

                            <div class="areaContentEducacaoAllegraDir2 d-table text-left" style="margin:150px auto; width:676px; height:185px; padding-left:50px">
                                
                                <div class="d-table-cell v-align-middle">
                                    <p class="textBoxEducacao3 font-16 colorWhite">
                                        • Divulgar o diferencial da marca que é sua  tecnologia inovadora: o frio<br>
                                        que alivia e o calor que relaxa.<br><br>


                                        • A marca oferece formatos diferenciados que atende diversas necessidades<br>
                                        de acordo com cada usuário.

                                    </p>
                                </div>
                                
                                
                            </div>

                            <img style="position: absolute;bottom: -90px;right: 0px;" src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-5.png"/>
                        </div>
                    </div>

                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>