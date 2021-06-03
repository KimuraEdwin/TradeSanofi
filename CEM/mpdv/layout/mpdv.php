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

                <div class="content-page dgmpe show">

                    <div data-layer-set=".DGMP" class="DGMP l1 layer show">

                        <img class="positionAbsolute" src="../../webroot/img/mpdv/mpdv.png" style="z-index:1;top:15px;left:17px">

                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="logoCenter d-table-cell v-align-middle">
                                    <p class="titulo-gen-produto font-24 uppercase">MPDV</p>
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