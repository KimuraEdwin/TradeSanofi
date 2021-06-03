<?php 

include("../../../modules/funcoesModulo.php"); 

$menuActive = "wininstore";

?>



<!DOCTYPE html>
<html>
    <head>
        <?php head(); ?>
    </head>
    <body>
        <div id="bg" class="stage">
            <?php navBarCHC($menuActive) ?>
            <div class="quadro opacidade_quadro positionAbsolute">

                <div class="content-page wininstore show">
                    <?php winInStoreCHC() ?>
                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>