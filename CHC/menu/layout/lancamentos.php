<?php 
include("../../../modules/funcoesModulo.php"); 
$menuActive = "lancamentos";
?>

<!DOCTYPE html>
<html>
    <head>
        <?php head(); ?>
    </head>
    
    <body>
    
        <div id="bg" class="stage">

            <?php navBarCHC($menuActive) ?>

            <div class="prioritarios positionAbsolute" style="z-index: 2">
                <div class="row-menu d-inline-block" style="margin-top:220px">
                    <div class="btn-logos-menu d-inline-block" style="margin-right: 150px!important;margin-top: 10px!important;">
                        <a href="../../produtos/lancamentos/allenasal.php">
                            <div class="quadProdutosMenu d-table" style="background-color:#8F1ABA;">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/lancamentos/allenasalLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block" style="margin-top: 10px!important;">
                        <a href="../../produtos/lancamentos/dorflexuno.php">
                            <div class="quadProdutosMenu d-table" style="background-color:#0072FF;">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/lancamentos/dorflexunoLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                </div>
                <img style="top:12px; right:-128px" class="planeta-menu" src="../../webroot/img/logo/planeta-menu.png"/>
            </div>
            <div class="prioritarios positionAbsolute" style="z-index: 1">
                <div class="row-menu d-inline-block" style="margin-top:220px">
                    <div class="btn-logos-menu d-inline-block quadProdutosMenuBgPrioriLanc" style="margin-right: 130px!important;">
                        <a href="../../produtos/lancamentos/dorflexuno.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/lancamentos/dorflexunoLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block quadProdutosMenuBgPrioriLanc">
                        <a href="../../produtos/lancamentos/dorflexuno.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/lancamentos/dorflexunoLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
           

        </div><!-- fim stage -->

        <?php scripts(); ?>
        
    </body>
</html>

            