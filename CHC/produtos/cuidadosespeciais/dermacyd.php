<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "cuidadosespeciais";
$produto = "dermacyd";
$paginasSku = [3,1,2,3];
$paginasDist = [1];
$guiaMenu = ['sku'];

?>

<!DOCTYPE html>
<html>
    <head>
        <?php head(); ?>
    </head>
    <body>
        <div id="bg-produtos" class="stage">
            <?php navBarCHC($categoria); ?>
            <?php headerSkuCHC($guiaMenu, $categoria) ?>
            <div class="quadro-produtos positionAbsolute">
                
                <img class="logo_produtos" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Logo.png" />

                <div class="content-page ajuste-content-page skus show">
                    <?php skuCHC($paginasSku, $categoria, $produto) ?>
                </div>

                <div class="content-page ajuste-content-page distribuicao">
                    <?php distCHC($paginasDist, $categoria, $produto) ?>
                </div>

                <div class="content-page ajuste-content-page merchan">

                    <div data-layer-set=".MERCHAN" class="MERCHAN l1 layer show">
                        <div class="conteudoEducacao d-inline-block">

                            <div data-layer-set-mapa=".MAPA" class="MAPA layer l-mandatorio show">
                                <div class="d-inline-block float-left">
                                    <div class="areaContentMerchanAllegraEsq">
                                        <div data-produto="prod-mandatorio-1" class="btn-merchan btn-merchan-1 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                faixa de gôndola
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- area da direita -->
                                <div class="PROD_MERCHAN prod-mapa layer show">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDir">
                                            <img class="float-right" style="margin-top: -61px;" src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>mandatorio.png"/>
                                        </div>
                                    </div>

                                    <div data-layer-mapa=".l-mandatorio" class="btn-mapa-merchan btn-mandatorio"></div>
                                    <div data-layer-mapa=".l-ponta-gondola" class="btn-mapa-merchan btn-ponta-gondola"></div>
                                    <div data-layer-mapa=".l-crossmerchan" class="btn-mapa-merchan btn-crossmerchan"></div>

                                </div>
                                <div id="prod-mandatorio-1" class="PROD_MERCHAN prod-mandatorio-1 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan"><br>
                                                faixa de gôndola<br>
                                                50806992
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Formato:
                                                </p>
                                                <p class="descMerchanProd">
                                                    Altura: 50mm<br>
                                                    Largura: 280mm
                                                </p>
                                            </div> 
                                            <!-- fim area de descrição -->
                                            <!-- area de img -->                                          
                                            <div class="float-right areaImgProdMerchan d-table">
                                                <div class="d-table-cell v-align-middle text-center">
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>faixagondola.png"/>
                                                    <div data-close-merchan=".prod-mapa" class="btn-close-prod-merchan d-table active-<?= $categoria ?>">
                                                        <div class="d-table-cell v-align-middle">
                                                            <p class="font-20 colorWhite">X</p>
                                                        </div>
                                                    </div>
                                                </div>                                           
                                            </div>   
                                            <!-- fim area de img -->                                        
                                        </div>
                                    </div>
                                </div>
                                <!-- fim area da direita -->

                                
                            </div>

                            <div data-layer-set-mapa=".MAPA" class="MAPA layer l-ponta-gondola">
                                <div class="d-inline-block float-left">
                                    <div class="areaContentMerchanAllegraEsq">
                                        <div data-produto="prod-ponta-gondola-1" class="btn-merchan btn-merchan-1 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                faixa de gôndola
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- area da direita -->
                                <div class="PROD_MERCHAN prod-mapa layer show">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDir">
                                            <img class="float-right" style="margin-top: -61px;" src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>ponta_gondola.png"/>
                                        </div>
                                    </div>

                                    <div data-layer-mapa=".l-mandatorio" class="btn-mapa-merchan btn-mandatorio"></div>
                                    <div data-layer-mapa=".l-ponta-gondola" class="btn-mapa-merchan btn-ponta-gondola"></div>
                                    <div data-layer-mapa=".l-crossmerchan" class="btn-mapa-merchan btn-crossmerchan"></div>

                                </div>
                                <div id="prod-ponta-gondola-1" class="PROD_MERCHAN prod-ponta-gondola-1 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan"><br>
                                                faixa de gôndola<br>
                                                50806992
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Formato:
                                                </p>
                                                <p class="descMerchanProd">
                                                    Altura: 50mm<br>
                                                    Largura: 280mm
                                                </p>
                                            </div> 
                                            <!-- fim area de descrição -->
                                            <!-- area de img -->                                          
                                            <div class="float-right areaImgProdMerchan d-table">
                                                <div class="d-table-cell v-align-middle text-center">
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>faixagondola.png"/>
                                                    <div data-close-merchan=".prod-mapa" class="btn-close-prod-merchan d-table active-<?= $categoria ?>">
                                                        <div class="d-table-cell v-align-middle">
                                                            <p class="font-20 colorWhite">X</p>
                                                        </div>
                                                    </div>
                                                </div>                                           
                                            </div>   
                                            <!-- fim area de img -->                                        
                                        </div>
                                    </div>
                                </div>
                                <!-- fim area da direita -->

                            </div>

                            <div data-layer-set-mapa=".MAPA" class="MAPA layer l-crossmerchan">
                                <div class="d-inline-block float-left">
                                    <div class="areaContentMerchanAllegraEsq">
                                        <div data-produto="prod-crossmerchan-1" class="btn-merchan btn-merchan-1 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                clip strip
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- area da direita -->
                                <div class="PROD_MERCHAN prod-mapa layer show">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDir">
                                            <img class="float-right" style="margin-top: -61px;" src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>crossmerchan.png"/>
                                        </div>
                                    </div>

                                    <div data-layer-mapa=".l-mandatorio" class="btn-mapa-merchan btn-mandatorio"></div>
                                    <div data-layer-mapa=".l-ponta-gondola" class="btn-mapa-merchan btn-ponta-gondola"></div>
                                    <div data-layer-mapa=".l-crossmerchan" class="btn-mapa-merchan btn-crossmerchan"></div>

                                </div>
                                <div id="prod-crossmerchan-1" class="PROD_MERCHAN prod-crossmerchan-1 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan"><br>
                                                clip strip<br>
                                                50806984 
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Formato:
                                                </p>
                                                <p class="descMerchanProd">
                                                Altura: 880mm<br>
                                                Largura: 130mm
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Planograma:
                                                </p>
                                                <p class="descMerchanProd">
                                                    1º a 5º Bolso - Dermacyd<br> 
                                                    Grade Total: 5 Unidades 
                                                </p>
                                            </div> 
                                            <!-- fim area de descrição -->
                                            <!-- area de img -->                                          
                                            <div class="float-right areaImgProdMerchan d-table">
                                                <div class="d-table-cell v-align-middle text-center">
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>clipstrip.png"/>
                                                    <div data-close-merchan=".prod-mapa" class="btn-close-prod-merchan d-table active-<?= $categoria ?>">
                                                        <div class="d-table-cell v-align-middle">
                                                            <p class="font-20 colorWhite">X</p>
                                                        </div>
                                                    </div>
                                                </div>                                           
                                            </div>   
                                            <!-- fim area de img -->                                        
                                        </div>
                                    </div>
                                </div>
                                <!-- fim area da direita -->

                            </div>
                            
                        </div>
                    </div>
                    
                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>