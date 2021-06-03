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

            <div class="prioritarios positionAbsolute" style="top:198px!important">
                <p>PRIORITÁRIOS</p>
                <div class="row-menu d-inline-block">
                    <div class="btn-logos-menu d-inline-block">
                        <a href="../../produtos/vitamedley/vitamedley.php">
                            <div class="quadProdutosMenu quadProdutosPrioritarios d-table">
                                <div class="d-table-cell v-align-middle"><img src="../../webroot/img/logo/vitamedley/vitamedleyLogo.png"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block">
                        <a href="#">
                            <div class="quadProdutosMenu quadProdutosPrioritarios d-table">
                                <div class="d-table-cell v-align-middle"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div><!-- fim stage -->

        <?php scripts(); ?>
        
    </body>
</html>

