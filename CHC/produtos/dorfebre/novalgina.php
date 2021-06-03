<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "dorfebre";
$produto = "novalgina";
$paginasSku = [4];
$paginasDist = [3,2];
$guiaMenu = ['sku', 'distribuicao','gondola', 'educacao', 'merchan'];

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

                <div class="content-page ajuste-content-page gondola">

                    <div data-layer-set=".GONDOLA" class="GONDOLA l1 layer show">
                        <div class="conteudoGondola d-inline-block">
                            <div class="d-inline-block float-left">
                                <div class="areaContentGondolaEsq" style="height:124px">
                                    <p class="uppercase font-16 textBoxGondola colorTitle" style="padding-top: 15px;padding-bottom: 5px;">PRINCIPAIS DIRETRIZES</p>
                                    <p class="textBoxGondola font-14 colorWhite" style="padding-top:0px">
                                        
                                    • Posicionado na categoria de Analgésicos ao lado de Buscopan.<br><br>

                                    • Visível ao shopper e agrupado na família (1g + 500mg)
                                    </p>
                                </div>
                                <div class="areaContentGondolaEsq" style="height:196px">
                                    <p class="uppercase font-16 textBoxGondola colorTitle">atenção</p>
                                    <p class=" textBoxGondola font-14 colorWhite">
                                    • Aproveitar o grande número de SKUs para ganhar<br>
                                    visibilidade na gôndola;<br><br>

                                    • Importante: Os blisteres devem ser posicionados<br>
                                    também na colmeia/comprimideira.
                                    </p>
                                </div>
                            </div>
                            <div class="d-inline-block float-right">
                                <div class="areaContentGondolaDir">
                                    <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Gondola-p.png"/>
                                </div>
                            </div>
                        </div>

                        <div data-layer=".l1" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-1 margin-texto d-table positionAbsolute active-menugondola-<?= $categoria ?>">
                            <p class="d-table-cell v-align-middle uppercase font-8">Tamanho P</p>
                        </div>
                        <div data-layer=".l2" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-2 margin-texto d-table positionAbsolute">
                            <p class="d-table-cell v-align-middle uppercase font-8">Tamanho M</p>
                        </div>
                        <div data-layer=".l3" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-3 margin-texto d-table positionAbsolute">
                            <p class="d-table-cell v-align-middle uppercase font-8">Tamanho G</p>
                        </div>

                    </div>

                    <div data-layer-set=".GONDOLA" class="GONDOLA l2 layer">
                        <div class="conteudoGondola d-inline-block">
                            <div class="d-inline-block float-left">
                                <div class="areaContentGondolaEsq" style="height:124px">
                                    <p class="uppercase font-16 textBoxGondola colorTitle" style="padding-top: 15px;padding-bottom: 5px;">PRINCIPAIS DIRETRIZES</p>
                                    <p class="textBoxGondola font-14 colorWhite" style="padding-top:0px">
                                        
                                    • Posicionado na categoria de Analgésicos ao lado de Buscopan.<br><br>

                                    • Visível ao shopper e agrupado na família (1g + 500mg)
                                    </p>
                                </div>
                                <div class="areaContentGondolaEsq" style="height:196px">
                                    <p class="uppercase font-16 textBoxGondola colorTitle">atenção</p>
                                    <p class=" textBoxGondola font-14 colorWhite">
                                    • Aproveitar o grande número de SKUs para ganhar<br>
                                    visibilidade na gôndola;<br><br>

                                    • Importante: Os blisteres devem ser posicionados<br>
                                    também na colmeia/comprimideira.
                                    </p>
                                </div>
                            </div>
                            <div class="d-inline-block float-right">
                                <div class="areaContentGondolaDir">
                                    <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Gondola-m.png"/>
                                </div>
                            </div>
                        </div>

                        <div data-layer=".l1" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-1 margin-texto d-table positionAbsolute">
                            <p class="d-table-cell v-align-middle uppercase font-8">Tamanho P</p>
                        </div>
                        <div data-layer=".l2" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-2 margin-texto d-table positionAbsolute active-menugondola-<?= $categoria ?>">
                            <p class="d-table-cell v-align-middle uppercase font-8">Tamanho M</p>
                        </div>
                        <div data-layer=".l3" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-3 margin-texto d-table positionAbsolute">
                            <p class="d-table-cell v-align-middle uppercase font-8">Tamanho G</p>
                        </div>

                    </div>

                    <div data-layer-set=".GONDOLA" class="GONDOLA l3 layer">
                        <div class="conteudoGondola d-inline-block">
                            <div class="d-inline-block float-left">
                                <div class="areaContentGondolaEsq" style="height:124px">
                                    <p class="uppercase font-16 textBoxGondola colorTitle" style="padding-top: 15px;padding-bottom: 5px;">PRINCIPAIS DIRETRIZES</p>
                                    <p class="textBoxGondola font-14 colorWhite" style="padding-top:0px">
                                        
                                    • Posicionado na categoria de Analgésicos ao lado de Buscopan.<br><br>

                                    • Visível ao shopper e agrupado na família (1g + 500mg)
                                    </p>
                                </div>
                                <div class="areaContentGondolaEsq" style="height:196px">
                                    <p class="uppercase font-16 textBoxGondola colorTitle">atenção</p>
                                    <p class=" textBoxGondola font-14 colorWhite">
                                    • Aproveitar o grande número de SKUs para ganhar<br>
                                    visibilidade na gôndola;<br><br>

                                    • Importante: Os blisteres devem ser posicionados<br>
                                    também na colmeia/comprimideira.
                                    </p>
                                </div>
                            </div>
                            <div class="d-inline-block float-right">
                                <div class="areaContentGondolaDir">
                                    <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Gondola-g.png"/>
                                </div>
                            </div>
                        </div>

                        <div data-layer=".l1" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-1 margin-texto d-table positionAbsolute">
                            <p class="d-table-cell v-align-middle uppercase font-8">Tamanho P</p>
                        </div>
                        <div data-layer=".l2" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-2 margin-texto d-table positionAbsolute">
                            <p class="d-table-cell v-align-middle uppercase font-8">Tamanho M</p>
                        </div>
                        <div data-layer=".l3" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-3 margin-texto d-table positionAbsolute active-menugondola-<?= $categoria ?>">
                            <p class="d-table-cell v-align-middle uppercase font-8">Tamanho G</p>
                        </div>

                    </div>

                </div>

                <div class="content-page ajuste-content-page educacao">

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l1 layer show">
                        <div class="conteudoEducacao d-inline-block">
                            <img src="../../webroot/img/produtos/dorfebre/novalgina/novalginaEdu-1.png"/>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-2 active-<?= $categoria ?>"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-1"></span>
                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l2 layer">
                        <div class="conteudoEducacao d-inline-block">
                            <img src="../../webroot/img/produtos/dorfebre/novalgina/novalginaEdu-2.png"/>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-1 active-<?= $categoria ?>"></span>
                    </div>
                    
                </div>

                <div class="content-page ajuste-content-page merchan">

                    <div data-layer-set=".MERCHAN" class="MERCHAN l1 layer show">
                        <div class="conteudoEducacao d-inline-block">

                            <div data-layer-set-mapa=".MAPA" class="MAPA layer l-mandatorio show">
                                <div class="d-inline-block float-left">
                                    <div class="areaContentMerchanAllegraEsq">
                                        <div data-produto="prod-mandatorio-1" class="btn-merchan btn-merchan-1 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                            Faixa de Gôndola<br>
                                            Retrátil
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
                                    <div data-layer-mapa=".l-balcao" class="btn-mapa-merchan btn-balcao"></div>
                                    <div data-layer-mapa=".l-ponta-gondola" class="btn-mapa-merchan btn-ponta-gondola"></div>
                                    <div data-layer-mapa=".l-checkout" class="btn-mapa-merchan btn-checkout"></div>

                                </div>
                                <div id="prod-mandatorio-1" class="PROD_MERCHAN prod-mandatorio-1 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan">
                                                Faixa de Gôndola<br>
                                                Retrátil<br>
                                                50809845     
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Formato:
                                                </p>
                                                <p class="descMerchanProd">
                                                Altura: 33mm<br>
                                                Largura: 400mm
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Planograma:
                                                </p>
                                                <p class="descMerchanProd">
                                                Novalgina de 1g <br>
                                                caixa de 10 crps.<br><br>

                                                Novalgina<br>
                                                caixa de 500mg 30 crps.<br><br>

                                                Novalgina gotas 20ml.<br><br>

                                                Novalgina solução oral 50ml.
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

                            <div data-layer-set-mapa=".MAPA" class="MAPA layer l-balcao">
                                <div class="d-inline-block float-left">
                                    <div class="areaContentMerchanAllegraEsq">
                                        <div data-produto="prod-balcao-1" class="btn-merchan btn-merchan-1 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                Display de Balcão
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- area da direita -->
                                <div class="PROD_MERCHAN prod-mapa layer show">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDir">
                                            <img class="float-right" style="margin-top: -61px;" src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>balcao.png"/>
                                        </div>
                                    </div>

                                    <div data-layer-mapa=".l-mandatorio" class="btn-mapa-merchan btn-mandatorio"></div>
                                    <div data-layer-mapa=".l-balcao" class="btn-mapa-merchan btn-balcao"></div>
                                    <div data-layer-mapa=".l-ponta-gondola" class="btn-mapa-merchan btn-ponta-gondola"></div>
                                    <div data-layer-mapa=".l-checkout" class="btn-mapa-merchan btn-checkout"></div>

                                </div>
                                <div id="prod-balcao-1" class="PROD_MERCHAN prod-balcao-1 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan">
                                                    DISPLAY de BALCÃO<br>
                                                    5080743
                                                </p>
                                                <p class="tituloDescMerchan"  style="padding: 5px 20px;">
                                                    • Formato:
                                                </p>
                                                <p class="descMerchanProd" style="padding: 1px 20px;">
                                                Altura: 385mm<br>
                                                Largura: 310mm<br>
                                                Profundidade: 205 mm
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Planograma:
                                                </p>
                                                <p class="descMerchanProd">
                                                1 - Saquinhos Efervescentes 2 crps: 2 Frentes <br>

                                                2 - Novalgina de 1g caixa de 10 crps: 1 Frente <br>

                                                3 - Novalgina blister de 1g 4 crps:  1 Frente<br>

                                                4 - Novalgina caixa de 500mg 30 crps: 1 Frente<br>

                                                5 - Novalgina gotas 20ml: 2 Frentes <br>

                                                6 - Novalgina solução oral 50ml: 1 Frente
                                                </p>
                                            </div> 
                                            <!-- fim area de descrição -->
                                            <!-- area de img -->                                          
                                            <div class="float-right areaImgProdMerchan d-table">
                                                <div class="d-table-cell v-align-middle text-center">
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>displaybalcao.png"/>
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

                            <div data-layer-set-mapa=".MAPA" class="MAPA layer l-checkout">
                                <div class="d-inline-block float-left">
                                    <div class="areaContentMerchanAllegraEsq">
                                        <div data-produto="prod-checkout-1" class="btn-merchan btn-merchan-1 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                            Faixa de Gôndola<br>
                                            Retrátil
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- area da direita -->
                                <div class="PROD_MERCHAN prod-mapa layer show">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDir">
                                            <img class="float-right" style="margin-top: -61px;" src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>checkout.png"/>
                                        </div>
                                    </div>

                                    <div data-layer-mapa=".l-mandatorio" class="btn-mapa-merchan btn-mandatorio"></div>
                                    <div data-layer-mapa=".l-balcao" class="btn-mapa-merchan btn-balcao"></div>
                                    <div data-layer-mapa=".l-ponta-gondola" class="btn-mapa-merchan btn-ponta-gondola"></div>
                                    <div data-layer-mapa=".l-checkout" class="btn-mapa-merchan btn-checkout"></div>

                                </div>
                                <div id="prod-checkout-1" class="PROD_MERCHAN prod-checkout-1 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan">
                                                Faixa de Gôndola<br>
                                                Retrátil<br>
                                                50809845    
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Formato:
                                                </p>
                                                <p class="descMerchanProd">
                                                Altura: 33mm<br>
                                                Largura: 400mm
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Planograma:
                                                </p>
                                                <p class="descMerchanProd">
                                                Novalgina de 1g <br>
                                                caixa de 10 crps.<br><br>

                                                Novalgina<br>
                                                caixa de 500mg 30 crps.<br><br>

                                                Novalgina gotas 20ml.<br><br>

                                                Novalgina solução oral 50ml.
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
                                            DISPLAY GRAVITACIONAL
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
                                    <div data-layer-mapa=".l-balcao" class="btn-mapa-merchan btn-balcao"></div>
                                    <div data-layer-mapa=".l-ponta-gondola" class="btn-mapa-merchan btn-ponta-gondola"></div>
                                    <div data-layer-mapa=".l-checkout" class="btn-mapa-merchan btn-checkout"></div>

                                </div>
                                <div id="prod-ponta-gondola-1" class="PROD_MERCHAN prod-ponta-gondola-1 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan">
                                                DISPLAY<br>
                                                GRAVITACIONAL<br>
                                                50809619       
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Formato:
                                                </p>
                                                <p class="descMerchanProd">
                                                Altura: 310mm<br>
                                                Largura: 115mm<br
                                                >Profundidade: 130mm
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Planograma:
                                                </p>
                                                <p class="descMerchanProd">
                                                Novalgina blister de 1g 4 crps<br><br>
                                                Novalgina de 1g<br>
                                                caixa de 10 crps   
                                                </p>
                                            </div> 
                                            <!-- fim area de descrição -->
                                            <!-- area de img -->                                          
                                            <div class="float-right areaImgProdMerchan d-table">
                                                <div class="d-table-cell v-align-middle text-center">
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>display.png"/>
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
                                <div id="prod-ponta-gondola-2" class="PROD_MERCHAN prod-ponta-gondola-2 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan"><br>
                                                    cartaz<br>
                                                    50809414
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Formato:
                                                </p>
                                                <p class="descMerchanProd">
                                                    Altura: 210mm
                                                    Largura: 297mm
                                                </p>
                                            </div> 
                                            <!-- fim area de descrição -->
                                            <!-- area de img -->                                          
                                            <div class="float-right areaImgProdMerchan d-table">
                                                <div class="d-table-cell v-align-middle text-center">
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>cartaz.png"/>
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
                                <div id="prod-ponta-gondola-3" class="PROD_MERCHAN prod-ponta-gondola-3 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan"><br>
                                                    FAIXA DE Gôndola<br>
                                                    retrátil<br>
                                                    50809442
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Formato:
                                                </p>
                                                <p class="descMerchanProd">
                                                    Altura: 30mm
                                                    Largura Aberta: 430mm
                                                    Profundidade Fechada: 300mm
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Planograma:
                                                </p>
                                                <p class="descMerchanProd">
                                                    Allegra Pediatrico 6mg/ml;
                                                    Allegra caixa 120 mg cprs;
                                                </p>
                                            </div> 
                                            <!-- fim area de descrição -->
                                            <!-- area de img -->                                          
                                            <div class="float-right areaImgProdMerchan d-table">
                                                <div class="d-table-cell v-align-middle text-center">
                                                    
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
                                <div id="prod-ponta-gondola-4" class="PROD_MERCHAN prod-ponta-gondola-4 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan"><br>
                                                    Wobbler<br>
                                                    50809417<br><br>

                                                    Wobbler Inverno<br>
                                                    50810110
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Formato:
                                                </p>
                                                <p class="descMerchanProd">
                                                    Altura: 150mm
                                                    Largura: 150mm
                                                </p>
                                            </div> 
                                            <!-- fim area de descrição -->
                                            <!-- area de img -->                                          
                                            <div class="float-right areaImgProdMerchan d-table">
                                                <div class="d-table-cell v-align-middle text-center">
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>wobbler.png"/>
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