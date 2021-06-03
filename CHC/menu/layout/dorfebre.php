<?php 
include("../../../modules/funcoesModulo.php"); 
$menuActive = "dorfebre";
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
                    <div class="btn-logos-menu d-inline-block" style="margin-right: 60px!important;margin-top: 10px!important;">
                        <a href="../../produtos/dorfebre/dorflexuno.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/dorfebre/dorflexunoLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block" style="margin-right: 60px!important;margin-top: 10px!important;">
                        <a href="../../produtos/dorfebre/dorflex.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/dorfebre/dorflexLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block" style="margin-top: 10px!important;">
                        <a href="../../produtos/dorfebre/novalgina.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/dorfebre/novalginaLogo.png"/></div>
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
                    <div class="btn-logos-menu d-inline-block quadProdutosMenuBgPrioriDor" style="margin-right: 40px!important;">
                        <a href="../../produtos/dorfebre/dorflex.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/vitaminas/lantusLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block quadProdutosMenuBgPrioriDor" style="margin-right: 40px!important;">
                        <a href="../../produtos/dorfebre/dorflex.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/vitaminas/lantusLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block quadProdutosMenuBgPrioriDor">
                        <a href="../../produtos/dorfebre/novalgina.php">
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
                        <a href="../../produtos/dorfebre/anador.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/dorfebre/anadorLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block">
                        <a href="../../produtos/dorfebre/dorflexicy.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/dorfebre/dorflexIcyLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                </div>
                   
            </div>

        </div><!-- fim stage -->

        <?php scripts(); ?>
        
    </body>
</html>

            