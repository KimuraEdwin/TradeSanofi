<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "lancamentos";
$produto = "lancamentos";
$heroi = "";
$paginas = [1,1];
$guiaMenu = ['dgmpe'];

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

                <div class="content-page dgmpe show">

                    <div data-layer-set=".DGMP" class="DGMP l1 layer show">

                        <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Dgmpe-1.png" style="z-index:1;top:10px;left:17px">

                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
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