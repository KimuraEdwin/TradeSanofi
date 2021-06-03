<?php 

include("../../../modules/funcoesModulo.php"); 

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
            <?php navBar(); ?>
            <div class="quadro positionAbsolute">

                <div class="content-page programaviva show">
                    <?php programaViva(); ?>
                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>