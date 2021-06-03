<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "lancamentos";
$produto = "allenasal";
$guiaMenu = ['sku', 'distribuicao','gondola', 'educacao', 'merchan'];

?>

<!DOCTYPE html>
<html>
    <head>
        <?php head(); ?>
    </head>
    <body>
        <div id="bg" class="stage">
            <?php navBarCHC($categoria); ?>
            <div class="quadro-produtos positionAbsolute">

                <img class="planeta_produtos" src="../../webroot/img/produtos/planeta-produtos.png" />
                <img class="logo_produtos" src="../../webroot/img/produtos/<?php echo "$categoria/$produto" ?>Logo.png" />

                <div class="content-page ajuste-content-page educacao show">

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l1 layer show">
                        <div class="conteudoEducacao d-inline-block text-center">
                            <img src="../../webroot/img/produtos/lancamentos/allenasalLanc-1.png"/>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-10 active-gripealergia"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-9"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-8"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-7"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-6"></span>
                        <span data-layer=".l6" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l7" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l8" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l9" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l10" class="bts-layer-sku bt-layer-sku-1"></span>
                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l2 layer">
                        <div class="conteudoEducacao d-inline-block text-center">
                            <img src="../../webroot/img/produtos/lancamentos/allenasalLanc-2.png"/>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-10"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-9 active-gripealergia"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-8"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-7"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-6"></span>
                        <span data-layer=".l6" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l7" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l8" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l9" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l10" class="bts-layer-sku bt-layer-sku-1"></span>
                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l3 layer">
                        <div class="conteudoEducacao d-inline-block text-center">
                            <img src="../../webroot/img/produtos/lancamentos/allenasalLanc-3.png"/>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-10"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-9"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-8 active-gripealergia"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-7"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-6"></span>
                        <span data-layer=".l6" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l7" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l8" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l9" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l10" class="bts-layer-sku bt-layer-sku-1"></span>
                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l4 layer">
                        <div class="conteudoEducacao d-inline-block text-center">
                            <img src="../../webroot/img/produtos/lancamentos/allenasalLanc-4.png"/>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-10"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-9"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-8"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-7 active-gripealergia"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-6"></span>
                        <span data-layer=".l6" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l7" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l8" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l9" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l10" class="bts-layer-sku bt-layer-sku-1"></span>
                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l5 layer">
                        <div class="conteudoEducacao d-inline-block text-center">
                            <img src="../../webroot/img/produtos/lancamentos/allenasalLanc-5.png"/>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-10"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-9"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-8"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-7"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-6 active-gripealergia"></span>
                        <span data-layer=".l6" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l7" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l8" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l9" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l10" class="bts-layer-sku bt-layer-sku-1"></span>
                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l6 layer">
                        <div class="conteudoEducacao d-inline-block text-center">
                            <img src="../../webroot/img/produtos/lancamentos/allenasalLanc-6.png"/>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-10"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-9"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-8"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-7"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-6"></span>
                        <span data-layer=".l6" class="bts-layer-sku bt-layer-sku-5 active-gripealergia"></span>
                        <span data-layer=".l7" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l8" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l9" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l10" class="bts-layer-sku bt-layer-sku-1"></span>
                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l7 layer">
                        <div class="conteudoEducacao d-inline-block text-center">
                            <img src="../../webroot/img/produtos/lancamentos/allenasalLanc-7.png"/>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-10"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-9"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-8"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-7"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-6"></span>
                        <span data-layer=".l6" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l7" class="bts-layer-sku bt-layer-sku-4 active-gripealergia"></span>
                        <span data-layer=".l8" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l9" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l10" class="bts-layer-sku bt-layer-sku-1"></span>
                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l8 layer">
                        <div class="conteudoEducacao d-inline-block text-center">
                            <img src="../../webroot/img/produtos/lancamentos/allenasalLanc-8.png"/>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-10"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-9"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-8"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-7"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-6"></span>
                        <span data-layer=".l6" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l7" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l8" class="bts-layer-sku bt-layer-sku-3 active-gripealergia"></span>
                        <span data-layer=".l9" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l10" class="bts-layer-sku bt-layer-sku-1"></span>
                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l9 layer">
                        <div class="conteudoEducacao d-inline-block text-center">
                            <img src="../../webroot/img/produtos/lancamentos/allenasalLanc-9.png"/>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-10"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-9"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-8"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-7"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-6"></span>
                        <span data-layer=".l6" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l7" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l8" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l9" class="bts-layer-sku bt-layer-sku-2 active-gripealergia"></span>
                        <span data-layer=".l10" class="bts-layer-sku bt-layer-sku-1"></span>
                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l10 layer">
                        <div class="conteudoEducacao d-inline-block text-center">
                            <img src="../../webroot/img/produtos/lancamentos/allenasalLanc-10.png"/>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-10"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-9"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-8"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-7"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-6"></span>
                        <span data-layer=".l6" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l7" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l8" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l9" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l10" class="bts-layer-sku bt-layer-sku-1 active-gripealergia"></span>
                    </div>

                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>