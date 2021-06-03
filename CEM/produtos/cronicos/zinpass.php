<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "cronicos";
$produto = "zinpass";
$heroi = "zinpass";
$paginas = [2,2];
$guiaMenu = ['sku', 'argumentosVendas'];

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
        <div id="bg" class="stage">
            <?php headerSku($guiaMenu) ?>
            <div class="quadro positionAbsolute">

                <div class="content-page skus show">
                    <?php sku($heroi, $paginas, $categoria, $produto) ?>
                </div>

                <div class="content-page estrategia">

                    <div data-layer-set=".ESTRATEGIA" class="ESTRATEGIA l1 layer show">

                    <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Estrategia-1.png" style="z-index:1;top:30px;left:17px">

                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                    <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                </div>
                            </div>
                        </div>

                        <div class="conteudoDgmpe">


                        </div>
                    </div>
                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>