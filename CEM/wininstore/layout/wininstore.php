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
            <?php navBar() ?>
            <div class="quadro positionAbsolute">

                <div class="content-page wininstore show">
                    <?php winInStore() ?>
                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>