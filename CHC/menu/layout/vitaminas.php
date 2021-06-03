<?php 
include("../../../modules/funcoesModulo.php"); 
$menuActive = "vitaminas";
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
                <div class="row-menu d-inline-block" style="padding-left: 20px;">
                    <div class="btn-logos-menu d-inline-block" style="margin-right: 50px!important;margin-top: 10px!important;">
                        <a href="../../produtos/vitaminas/pharmaton.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/vitaminas/pharmatonLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block" style="margin-right: 50px!important;margin-top: 10px!important;">
                        <a href="../../produtos/vitaminas/targifor.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/vitaminas/targiforLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block" style="margin-right: 50px!important;margin-top: 10px!important;">
                        <a href="../../produtos/vitaminas/oscal.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/vitaminas/oscalLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block" style="margin-right: 50px!important;margin-top: 10px!important;">
                        <a href="../../produtos/vitaminas/mobility.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/vitaminas/mobilityLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                </div>

                <hr class="linhaGuiaPrioritarios">

                
            </div>
            <div class="prioritarios positionAbsolute" style="z-index: 1">
                <p>PRIORITÁRIOS</p> 
                <div class="row-menu d-inline-block" style="padding-left: 20px;">
                    <div class="btn-logos-menu d-inline-block quadProdutosMenuBgPriori" style="margin-left:-45px!important;margin-right: 30px!important;">
                        <a href="../../produtos/vitaminas/pharmaton.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/vitaminas/lantusLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block quadProdutosMenuBgPriori" style="margin-right: 30px!important;">
                        <a href="../../produtos/vitaminas/targifor.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/vitaminas/puranLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block quadProdutosMenuBgPriori" style="margin-right: 30px!important;">
                        <a href="../../produtos/vitaminas/oscal.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/vitaminas/lantusLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block quadProdutosMenuBgPriori">
                        <a href="../../produtos/vitaminas/mobility.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/vitaminas/puranLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <img class="planeta-menu" src="../../webroot/img/logo/planeta-menu.png"/>
            <div class="outros positionAbsolute">
                <p>NÃO PRIORITÁRIOS</p>
                <div class="row-menu">
                    
                    <div class="btn-logos-menu d-inline-block" style="margin-right: 130px;">
                        <a href="../../produtos/vitaminas/depura.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/vitaminas/depuraLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block">
                        <a href="../../produtos/vitaminas/cewin.php">
                            <div class="quadProdutosMenu d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/vitaminas/cewinLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    
                </div>
                   
            </div>

        </div><!-- fim stage -->

        <?php scripts(); ?>
        
    </body>
</html>

            