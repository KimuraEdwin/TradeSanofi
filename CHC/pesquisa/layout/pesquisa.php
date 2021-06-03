<?php 

include("../../../modules/funcoesModulo.php"); 

$menuActive="";

?>

<!DOCTYPE html>
<html>
    <head>
        <?php head(); ?>
    </head>
    <body>
        <div id="bg-pesquisa" class="stage">
            <?php navBarCHC($menuActive) ?>

            <div class="bg-active-glo-search" style="top: 39px">
                <a href="../../pesquisa/layout/pesquisa.php">
                    <div class="btn-lupa-menu"  style="top: unset!important">
                        <img class="positionAbsolute iconeLupa" src="../../webroot/img/icones/search-active.png"/>
                    </div>
                </a>
            </div>

            <div class="quadro-comandos positionAbsolute">
                <div class="content-page skus show">
                    
                    <button class="positionAbsolute btn-pesquisa-margem" id="btn-pesquisa">
                        <img src="../../webroot/img/icones/magnifying-glass.png" />
                    </button>

                    <input class="positionAbsolute btn-pesquisa-margem" id="txt-pesquisa" type="text" placeholder="PESQUISE AQUI">

                    <button class="positionAbsolute" id="btn-pesquisa-fechar">
                        X
                    </button>

                    <ul id="resultados-pesquisa" class="show">

                    </ul>

                </div>
            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>