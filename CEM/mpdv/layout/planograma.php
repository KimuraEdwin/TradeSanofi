<?php 

include("../../../modules/funcoesModulo.php"); 

?>



<!DOCTYPE html>
<html>
    <head>
        <?php head(); ?>
    </head>
    <body>
        <div id="bg" class="stage">
            <?php headerDefaultGen() ?>
            <div class="quadro positionAbsolute">

                <div class="content-page estrategia show">

                    <div data-layer-set=".ESTRA" class="ESTRA largumentos1 layer show">

                        <img class="positionAbsolute" src="../../webroot/img/mpdv/planograma-1.png" style="z-index:1;top:30px;left:17px">

                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="logoCenter d-table-cell v-align-middle">
                                    <p class="titulo-gen-produto font-16 uppercase">Planograma</p>
                                </div>
                            </div>
                        </div>

                        <div class="conteudoDgmpe">
                        </div>

                        <span data-layer=".largumentos1" class="bts-layer-sku bt-layer-sku-3 active"></span>
                        <span data-layer=".largumentos2" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".largumentos3" class="bts-layer-sku bt-layer-sku-1"></span>
                    </div>

                    <div data-layer-set=".ESTRA" class="ESTRA largumentos2 layer">

                        <img class="positionAbsolute" src="../../webroot/img/mpdv/planograma-2.png" style="z-index:1;top:30px;left:17px">

                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="logoCenter d-table-cell v-align-middle">
                                    <p class="titulo-gen-produto font-16 uppercase">Planograma</p>
                                </div>
                            </div>
                        </div>

                        <div class="conteudoDgmpe">
                        </div>

                        <span data-layer=".largumentos1" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".largumentos2" class="bts-layer-sku bt-layer-sku-2 active"></span>
                        <span data-layer=".largumentos3" class="bts-layer-sku bt-layer-sku-1"></span>
                    </div>

                    <div data-layer-set=".ESTRA" class="ESTRA largumentos3 layer">

                        <img class="positionAbsolute" src="../../webroot/img/mpdv/planograma-3.png" style="z-index:1;top:30px;left:17px">

                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="logoCenter d-table-cell v-align-middle">
                                    <p class="titulo-gen-produto font-16 uppercase">Planograma</p>
                                </div>
                            </div>
                        </div>

                        <div class="conteudoDgmpe">
                        </div>

                        <span data-layer=".largumentos1" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".largumentos2" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".largumentos3" class="bts-layer-sku bt-layer-sku-1 active"></span>
                    </div>
                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>