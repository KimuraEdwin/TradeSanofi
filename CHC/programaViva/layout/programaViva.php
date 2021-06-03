<?php 

include("../../../modules/funcoesModulo.php"); 

$menuActive="programaviva";

?>

<!DOCTYPE html>
<html>
    <head>
        <?php head(); ?>
        <script src="../../webroot/js/jquery.min.js"></script>
        <script src="../../webroot/js/pvLista.js"></script>
    </head>
    <body>
        <div id="bg" class="stage">
            <?php navBarCHC($menuActive); ?>
            <div class="quadro quadro-programa-viva positionAbsolute">

                <div class="content-page programaviva show">
                    <?php programaVivaCHC(); ?>
                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>