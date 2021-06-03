<?php 
include("../../../modules/funcoesModulo.php"); 

?>

<!DOCTYPE html>
<html>
    <head>
        <?php head(); ?>
    </head>
    
    <body>
    
        <div id="bg-menu" class="stage">

            <?php headerDefault() ?>

            <div class="prioritarios positionAbsolute">
                <p>PRIORITÁRIOS</p>
                <div class="row-menu d-inline-block">
                    <div class="btn-logos-menu d-inline-block">
                        <a href="../../produtos/hospitalar/clexane.php">
                            <div class="quadProdutosMenu quadProdutosPrioritarios d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/hospitalar/clexaneLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="outros positionAbsolute">
                <p>OUTROS</p>
                <div class="row-menu">
                    <div class="btn-logos-menu d-inline-block">
                        <a href="../../produtos/hospitalar/synvisc.php">
                            <div class="quadProdutosMenu quadProdutosPrioritarios d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/hospitalar/synviscLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block">
                        <a href="../../produtos/hospitalar/targocid.php">
                            <div class="quadProdutosMenu quadProdutosPrioritarios d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/hospitalar/targocidLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div><!-- fim stage -->

        <?php scripts(); ?>
        
    </body>
</html>

            