<?php 
include("../../../modules/funcoesModulo.php"); 
$menuActive = "gastro";
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
                    <div class="btn-logos-menu d-inline-block" style="margin-right: 130px!important;margin-top: 10px!important;">
                        <a href="../../produtos/gastro/dulcolax.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/gastro/dulcolaxLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block" style="margin-top: 10px!important;">
                        <a href="../../produtos/gastro/enterogermina.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/gastro/enterogerminaLogo.png"/></div>
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
                    <div class="btn-logos-menu d-inline-block quadProdutosMenuBgPrioriGastro" style="margin-right: 110px!important;">
                        <a href="../../produtos/gastro/dulcogas.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/vitaminas/lantusLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block quadProdutosMenuBgPrioriGastro">
                        <a href="../../produtos/gastro/enterogermina.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/vitaminas/puranLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="outros positionAbsolute">
                <p>NÃO PRIORITÁRIOS</p>
                <div class="row-menu">
                    <div class="btn-logos-menu d-inline-block" style="margin-right: 130px!important">
                        <a href="../../produtos/gastro/naturetti.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/gastro/naturettiLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block">
                        <a href="../../produtos/gastro/dulcogas.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/gastro/dulcogasLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                </div>
                   
            </div>

        </div><!-- fim stage -->

        <?php scripts(); ?>
        
    </body>
</html>

            