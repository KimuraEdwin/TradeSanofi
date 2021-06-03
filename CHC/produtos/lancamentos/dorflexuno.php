<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "lancamentos";
$produto = "dorflexuno";
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
                            <img src="../../webroot/img/produtos/lancamentos/dorflexunoLanc-1.png"/>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-2 active-dorfebre"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-1"></span>
                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l2 layer">
                        <div class="conteudoEducacao d-inline-block text-center">
                            <img src="../../webroot/img/produtos/lancamentos/dorflexunoLanc-2.png"/>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-1 active-dorfebre"></span>
                    </div>

                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>