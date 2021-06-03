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
                <div class="row-menu d-inline-block" style="margin-top:40px">
                    <div class="btn-logos-menu d-inline-block" style="width:121px; height:121px; margin-right:100px">
                        <a href="../../mpdv/layout/mpdv.php">
                            <div class="quadProdutosMenu quadProdutosPrioritarios d-table" style="width:121px; height:121px">
                                <div class="d-table-cell v-align-middle">
                                    <p class="letra-menu-generico uppercase" style="font-size:14px!important"> MPDV</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block" style="width:121px; height:121px;margin-right:100px">
                        <a href="../../mpdv/layout/kitEventos.php">
                            <div class="quadProdutosMenu quadProdutosPrioritarios d-table" style="width:121px; height:121px">
                                <div class="d-table-cell v-align-middle">
                                    <p class="letra-menu-generico uppercase" style="font-size:14px!important">Kit eventos</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="btn-logos-menu d-inline-block" style="width:121px; height:121px">
                        <a href="../../mpdv/layout/planograma.php">
                            <div class="quadProdutosMenu quadProdutosPrioritarios d-table" style="width:121px; height:121px">
                                <div class="d-table-cell v-align-middle">
                                    <p class="letra-menu-generico uppercase" style="font-size:14px!important">planograma</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div><!-- fim stage -->

        <?php scripts(); ?>
        
    </body>
</html>

