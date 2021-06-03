<?php 
include("../../../modules/funcoesModulo.php"); 
$menuActive = "cuidadosespeciais";
?>

<!DOCTYPE html>
<html>
    <head>
        <?php head(); ?>
    </head>
    
    <body>
    
        <div id="bg" class="stage">

            <?php navBarCHC($menuActive) ?>

            <div class="prioritarios positionAbsolute" style="z-index: 2;top: 188px;">
                <p>NÃO PRIORITÁRIOS</p> 
                <div class="row-menu d-inline-block">
                    <div class="btn-logos-menu d-inline-block" style="margin-right: 130px!important;margin-top: 10px!important;">
                        <a href="../../produtos/cuidadosespeciais/cepacol.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/cuidadosespeciais/cepacolLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block" style="margin-top: 10px!important;">
                        <a href="../../produtos/cuidadosespeciais/dermacyd.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/cuidadosespeciais/dermacydLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                </div>

                <img style="top:-138px; right:-128px" class="planeta-menu" src="../../webroot/img/logo/planeta-menu.png"/>
            </div>
           

        </div><!-- fim stage -->

        <?php scripts(); ?>
        
    </body>
</html>

            