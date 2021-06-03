<?php 
include("../../../modules/funcoesModulo.php"); 
$menuActive = "gripealergia";
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
                <p>PRIORITÁRIOS</p> 
                <div class="row-menu d-inline-block">
                    <div class="btn-logos-menu d-inline-block" style="margin-right: 0px!important;margin-top: 10px!important;">
                        <a href="../../produtos/gripealergia/allegra.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/gripealergia/allegraLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                </div>

                <hr class="linhaGuiaPrioritarios">

                <img style="top:12px; right:-128px" class="planeta-menu" src="../../webroot/img/logo/planeta-menu.png"/>
            </div>
            <div class="prioritarios positionAbsolute" style="z-index: 1">
                <p>PRIORITÁRIOS</p> 
                <div class="row-menu d-inline-block">
                    <div class="btn-logos-menu d-inline-block quadProdutosMenuBgPrioriGripe" style="margin-right: 0px!important;">
                        <a href="../../produtos/gripealergia/allegra.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/vitaminas/lantusLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="outros positionAbsolute">
                <p>NÃO PRIORITÁRIOS</p>
                <div class="row-menu">
                    <div class="btn-logos-menu d-inline-block" style="margin-right: 130px!important;margin-left: 2px!important">
                        <a href="../../produtos/gripealergia/mucosolvan.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/gripealergia/mucosolvanLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block">
                        <a href="../../produtos/gripealergia/coliriomoura.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/gripealergia/coliriomouraLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                </div>
                   
            </div>

        </div><!-- fim stage -->

        <?php scripts(); ?>
        
    </body>
</html>

            