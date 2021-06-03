<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "genericos";
$produto = "cetoprofeno";
$heroi = "genericos";
$paginas = [4];
$guiaMenu = ['sku','dgmpe', 'argumentosVendas'];

include("../../listaSku/genericos/".$produto.".php");

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
                    <?php skuGen($heroi, $paginas, $categoria, $produto) ?>
                </div>

                <div class="content-page dgmpe">

                    <div data-layer-set=".DGMP" class="DGMP l1 layer show">

                        <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Dgmpe-1.png" style="z-index:1;top:15px;left:17px">

                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="logoCenter d-table-cell v-align-middle">
                                    <p class="titulo-gen-produto font-14 uppercase"><?php echo $list_sku[0]["DESCRICAO"] ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="conteudoDgmpe">
                        </div>

                        <div data-layer-ir=".l1" class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute active-IR">
                            <p class="d-table-cell v-align-middle">REDES</p>
                        </div>
                        <div data-layer-ir=".l2" class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute">
                            <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                        </div>
                    </div>

                    <div data-layer-set=".DGMP" class="DGMP l2 layer">

                        <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Dgmpe-2.png" style="z-index:1;top:15px;left:17px">

                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="logoCenter d-table-cell v-align-middle">
                                    <p class="titulo-gen-produto font-14 uppercase"><?php echo $list_sku[0]["DESCRICAO"] ?></p>
                                </div>
                            </div>
                            
                        </div>

                        <div class="conteudoDgmpe">
                        </div>

                        <div data-layer-ir=".l1" class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute">
                            <p class="d-table-cell v-align-middle">REDES</p>
                        </div>
                        <div data-layer-ir=".l2" class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute active-IR">
                            <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                        </div>
                    </div>
                </div>

                <div class="content-page estrategia">

                    <div data-layer-set=".ESTRA" class="ESTRA largumentos1 layer show">

                        <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Estrategia-1.png" style="z-index:1;top:30px;left:17px">

                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="logoCenter d-table-cell v-align-middle">
                                    <p class="titulo-gen-produto font-14 uppercase"><?php echo $list_sku[0]["DESCRICAO"] ?></p>
                                </div>
                            </div>
                            
                        </div>

                        <div class="conteudoDgmpe">
                        </div>

                        <span data-layer=".largumentos1" class="bts-layer-sku bt-layer-sku-2 active"></span>
                        <span data-layer=".largumentos2" class="bts-layer-sku bt-layer-sku-1"></span>
                    </div>

                    <div data-layer-set=".ESTRA" class="ESTRA largumentos2 layer">

                        <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Estrategia-2.png" style="z-index:1;top:30px;left:17px">

                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="logoCenter d-table-cell v-align-middle">
                                    <p class="titulo-gen-produto font-14 uppercase"><?php echo $list_sku[0]["DESCRICAO"] ?></p>
                                </div>
                            </div>
                            
                        </div>

                        <div class="conteudoDgmpe">
                        </div>

                        <span data-layer=".largumentos1" class="bts-layer-sku bt-layer-sku-2 "></span>
                        <span data-layer=".largumentos2" class="bts-layer-sku bt-layer-sku-1 active"></span>
                    </div>
                </div>


            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>