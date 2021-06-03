<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "agudos";
$produto = "alenthus";
$heroi = "alenthus";
$paginas = [1,3];
$guiaMenu = ['sku', 'dgmpe', 'educacao', 'argumentosVendas'];

?>

<?php 
    if($produto != 'profenid'){
        $sizeLogo = getimagesize("../../webroot/img/logo/".$categoria."/".$produto."Logo.png");
        $proporcaoLogo = $sizeLogo[0]/$sizeLogo[1];
        $proporcaoGuia = 2.05;
        
        if(($sizeLogo[0] <= 119) && ($sizeLogo[1] <= 63)){
            $classLogo = "neutroLogo";
        }
        else if($proporcaoLogo > $proporcaoGuia){
            $classLogo = "horizontalLogo";
        }
        else if($proporcaoLogo < $proporcaoGuia){
            $classLogo = "verticalLogo";
        }
    } 
?>

<!DOCTYPE html>
<html>
    <head>
        <?php head(); ?>
    </head>
    <body>
        <div id="bg-menu" class="stage">
            <?php navBarMenu() ?>

            <div class="bg-active-glo-search" style="top: 39px">
                <a href="../../pesquisa/layout/pesquisa.php">
                    <div class="btn-lupa-menu"  style="top: unset!important">
                        <img class="positionAbsolute iconeLupa" src="../../webroot/img/icones/lupa.png"/>
                    </div>
                </a>
            </div>

            <div class="quadro-pesquisa positionAbsolute">

                <div class="content-page skus show">
                    
                    <button class="positionAbsolute" id="btn-pesquisa">
                        <img src="../../webroot/img/icones/magnifying-glass.png" />
                    </button>

                    <input class="positionAbsolute" id="txt-pesquisa" type="text" placeholder="PESQUISE AQUI">

                    <button class="positionAbsolute" id="btn-pesquisa-fechar">
                        X
                    </button>

                    <ul id="resultados-pesquisa" class="show">

                    </ul>


                    <div id="area-heroi">
                    </div>

                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>