<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "agudos";
$produto = "arava";
$heroi = "sem";
$paginas = [2];
$guiaMenu = ['sku'];

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

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>