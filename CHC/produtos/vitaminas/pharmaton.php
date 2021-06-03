<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "vitaminas";
$produto = "pharmaton";
$paginasSku = [2,3,3,3,4];
$paginasDist = [4];
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

                
                <img class="logo_produtos ajuste_logo_pharmaton" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Logo.png" />

                <div class="content-page ajuste-content-page skus show">
                    <?php skuCHC($paginasSku, $categoria, $produto) ?>
                </div>

                <div class="content-page ajuste-content-page distribuicao">
                    <?php distCHC($paginasDist, $categoria, $produto) ?>
                    <p style="color: white;position: absolute;top: 265px;right: 295px;font-size: 10px;">*SOMENTE<br>EM SP</p>
                </div>

                <div class="content-page ajuste-content-page gondola">

                    <div data-layer-set=".GONDOLA" class="GONDOLA l1 layer show">
                        <div class="conteudoGondola d-inline-block">
                            <div class="d-inline-block float-left">
                                <div class="areaContentGondolaEsq2 d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="uppercase font-16 textBoxGondola colorTitle">PRINCIPAIS DIRETRIZES</p>
                                        <p class="textBoxGondola font-14 colorWhite">
                                            Mínimo de 3 frentes com as família Complex, <br>
                                            50+, Energy e Mulher (2 frentes);<br><br>

                                            Posicionamento ao lado de Centrum, <br>
                                            caso não seja possível, logo abaixo;<br><br>

                                            Nunca posicionar os SKUs ao lado de Targifor;<br><br>

                                            Sinalize os SKUs com os MPDV: <br>
                                            Faixa de Gôndola e Precificador.

                                        </p>
                                    </div>
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
                                <div class="areaContentGondolaEsq2 d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="uppercase font-16 textBoxGondola colorTitle">PRINCIPAIS DIRETRIZES</p>
                                        <p class="textBoxGondola font-14 colorWhite">
                                            Mínimo de 3 frentes com as família Complex, 50+, Energy;<br><br>

                                            Mulher (2 frentes);<br>
                                            Vitawin (4 frentes); <br><br>

                                            Posicionamento ao lado de Centrum, <br>
                                            caso não seja possível, logo abaixo;<br><br>

                                            Nunca posicionar os SKUs ao lado de Targifor;<br><br>

                                            Sinalize os SKUs com os MPDV: Faixa de Gôndola e Precificador.


                                        </p>
                                    </div>
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
                                <div class="areaContentGondolaEsq2 d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="uppercase font-16 textBoxGondola colorTitle">PRINCIPAIS DIRETRIZES</p>
                                        <p class="textBoxGondola font-14 colorWhite">
                                            Mínimo de 3 frentes com as família Complex, 50+, Energy;<br><br>

                                            Mulher (2 frentes);<br>
                                            Vitawin (4 frentes); <br><br>

                                            Posicionamento ao lado de Centrum;<br><br>

                                            Nunca posicionar os SKUs ao lado de Targifor.<br><br>

                                            Sinalize os SKUs com os MPDV: Faixa de Gôndola e Precificador.


                                        </p>
                                    </div>
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
                            <div class="d-inline-block float-left">
                                <div class="areaContentEducacaoPharmatonEsq">
                                    <p class="textBoxEducacao font-24 colorWhite" style="padding: 5px 20px;">
                                        A Linha Complex 
                                        de Pharmaton 
                                        entrega o essencial 
                                        da categoria 
                                        que é a energia física.
                                    </p>
                                </div>
                            </div>
                            <div class="d-inline-block float-right">
                                <div class="areaContentEducacaoPharmatonDir">

                                    <div class="text-center">
                                        <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-1.png"/>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="box-abaixo-pharmaton2">
                                <p class="font-26 colorWhite">
                                    Desconto por comprimido<br>
                                    no TRADE UP
                                </p>
                                <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-1-1.png" />
                            </div>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-4 active-<?= $categoria ?>"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-1"></span>

                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l2 layer">

                        <div class="conteudoEducacao d-inline-block">
                            <div class="d-inline-block float-left">
                                <div class="areaContentEducacaoPharmatonEsq">
                                    <p class="textBoxEducacao font-24 colorWhite" style="padding: 5px 20px;">
                                        A Linha 50+ 
                                        de Pharmaton
                                        entrega o essencial 
                                        da categoria que 
                                        é a energia física.
                                    </p>
                                </div>
                            </div>
                            <div class="d-inline-block float-right">
                                <div class="areaContentEducacaoPharmatonDir">

                                    <div class="text-center">
                                        <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-2.png"/>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="box-abaixo-pharmaton2">
                                <p class="font-26 colorWhite">
                                    Desconto por comprimido<br>
                                    no TRADE UP
                                </p>
                                <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-2-1.png" />
                            </div>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-3 active-<?= $categoria ?>"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-1"></span>

                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l3 layer">

                         <div class="conteudoEducacao d-inline-block">
                            <div class="d-inline-block float-left">
                                <div class="areaContentEducacaoPharmatonEsq">
                                    <p class="textBoxEducacao font-24 colorWhite" style="padding: 5px 20px;">
                                        VITACAF, um componente 
                                        que auxilia não só no 
                                        metabolismo energético, 
                                        mas também no estado 
                                        de concentração.
                                    </p>
                                    <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-5.png" />
                                </div>
                            </div>
                            <div class="d-inline-block float-right">
                                <div class="areaContentEducacaoPharmatonDir">

                                    <div class="text-center">
                                        <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-3.png"/>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="box-abaixo-pharmaton2">
                                <p class="font-26 colorWhite">
                                    Desconto por comprimido<br>
                                    no TRADE UP
                                </p>
                                <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-3-1.png" />
                            </div>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-2 active-<?= $categoria ?>"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-1"></span>

                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l4 layer">

                         <div class="conteudoEducacao d-inline-block">
                            <div class="d-inline-block float-left">
                                <div class="areaContentEducacaoPharmatonEsq">
                                    <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-6.png" />
                                    <p class="textBoxEducacao font-24 colorWhite" style="padding: 5px 20px;">
                                        Além de disposição, 
                                        ajuda na manutenção 
                                        de <b>PELE, UNHAS E CABELO</b>.
                                    </p>
                                </div>
                            </div>
                            <div class="d-inline-block float-right">
                                <div class="areaContentEducacaoPharmatonDir">

                                    <div class="text-center">
                                        <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-4.png"/>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="box-abaixo-pharmaton2">
                                <p class="font-26 colorWhite">
                                    Desconto por comprimido<br>
                                    no TRADE UP
                                </p>
                                <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-4-1.png" />
                            </div>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-1 active-<?= $categoria ?>"></span>

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
                                                Faixa de Gôndola
                                            </div>
                                        </div>
                                        <div data-produto="prod-mandatorio-2" class="btn-merchan btn-merchan-1 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                Precificador
                                            </div>
                                        </div>
                                        <div data-produto="prod-mandatorio-3" class="btn-merchan btn-merchan-1 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                Faixa Lego
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

                                    <!-- <div data-layer-mapa=".l-balcao" class="btn-mapa-merchan btn-balcao"></div> -->
                                </div>
                                <div id="prod-mandatorio-1" class="PROD_MERCHAN prod-mandatorio-1 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan"><br>
                                                    
                                                </p>
                                                <p class="tituloDescMerchan">
                                                   
                                                </p>
                                                <p class="descMerchanProd">
                                                    
                                                </p>
                                            </div> 
                                            <!-- fim area de descrição -->
                                            <!-- area de img -->                                          
                                            <div class="float-right areaImgProdMerchan d-table">
                                                <div class="d-table-cell v-align-middle text-center">
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>faixa.png" style="width: 100%;"/>
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
                                <div id="prod-mandatorio-2" class="PROD_MERCHAN prod-mandatorio-2 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan"><br>
                                                   
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    
                                                </p>
                                                <p class="descMerchanProd">
                                                    
                                                </p>
                                            </div> 
                                            <!-- fim area de descrição -->
                                            <!-- area de img -->                                          
                                            <div class="float-right areaImgProdMerchan d-table">
                                                <div class="d-table-cell v-align-middle text-center">
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>precificador.png"/>
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
                                <div id="prod-mandatorio-3" class="PROD_MERCHAN prod-mandatorio-3 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan"><br>
                                                   
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    
                                                </p>
                                                <p class="descMerchanProd">
                                                   
                                                </p>
                                                <p class="tituloDescMerchan">
                                                   
                                                </p>
                                                <p class="descMerchanProd">
                                                    
                                                </p>
                                            </div> 
                                            <!-- fim area de descrição -->
                                            <!-- area de img -->                                          
                                            <div class="float-right areaImgProdMerchan d-table">
                                                <div class="d-table-cell v-align-middle text-center">
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>faixa-lego.png"/>
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
                                        <div data-produto="prod-balcao-2" class="btn-merchan btn-merchan-2 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                orelha de monitor
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
                                    <div data-layer-mapa=".l-crossmerchan" class="btn-mapa-merchan btn-crossmerchan"></div>

                                </div>
                                <div id="prod-balcao-1" class="PROD_MERCHAN prod-balcao-1 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan"><br>
                                                    DISPLAY de BALCÃO<br>
                                                    50809435
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Formato:
                                                </p>
                                                <p class="descMerchanProd">
                                                    Altura sem Testera: 210mm<br>
                                                    Largura Frontal: 210mm<br>
                                                    Profundidade: 220mm.
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Planograma:
                                                </p>
                                                <p class="descMerchanProd">
                                                    Allegra Pediatrico 6mg/ml;
                                                    Allegra caixa de 120mg cprs.
                                                </p>
                                            </div> 
                                            <!-- fim area de descrição -->
                                            <!-- area de img -->                                          
                                            <div class="float-right areaImgProdMerchan d-table">
                                                <div class="d-table-cell v-align-middle text-center">
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>displayBalcao.png"/>
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
                                <div id="prod-balcao-2" class="PROD_MERCHAN prod-balcao-2 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan"><br>
                                                    orelha<br>
                                                    de monitor<br>
                                                    50810335
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Formato:
                                                </p>
                                                <p class="descMerchanProd">
                                                    Altura: 250mm
                                                    Largura: 200mm
                                                </p>
                                            </div> 
                                            <!-- fim area de descrição -->
                                            <!-- area de img -->                                          
                                            <div class="float-right areaImgProdMerchan d-table">
                                                <div class="d-table-cell v-align-middle text-center">
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>orelha.png"/>
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
                                                CLIP STRIP
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
                                    <div data-layer-mapa=".l-balcao" class="btn-mapa-merchan btn-balcao"></div>
                                    <div data-layer-mapa=".l-ponta-gondola" class="btn-mapa-merchan btn-ponta-gondola"></div>
                                    <div data-layer-mapa=".l-crossmerchan" class="btn-mapa-merchan btn-crossmerchan"></div>

                                </div>
                                <div id="prod-crossmerchan-1" class="PROD_MERCHAN prod-crossmerchan-1 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan"><br>
                                                    CLIP STRIP<br>
                                                    50806274
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Formato:
                                                </p>
                                                <p class="descMerchanProd">
                                                    Altura: 493mm<br>
                                                    Largura: 150mm<br>
                                                    Profundidade: 50mm
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Planograma:
                                                </p>
                                                <p class="descMerchanProd">
                                                    1º Bolso: Allegra 60mg;<br>
                                                    2º Bolso: Allegra 120mg;<br>
                                                    3º Bolso: Allegra 180mg;<br><br>

                                                    Grade total: 7 unidades.
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

                            <div data-layer-set-mapa=".MAPA" class="MAPA layer l-ponta-gondola">
                                <div class="d-inline-block float-left">
                                    <div class="areaContentMerchanAllegraEsq">
                                        <div data-produto="prod-ponta-gondola-1" class="btn-merchan btn-merchan-1 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                BEXIGA
                                            </div>
                                        </div>
                                        <div data-produto="prod-ponta-gondola-2" class="btn-merchan btn-merchan-2 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                CARTAZ
                                            </div>
                                        </div>
                                        <div data-produto="prod-ponta-gondola-3" class="btn-merchan btn-merchan-3 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                Faixa de Gôndola<br>
                                                Retrátil
                                            </div>
                                        </div>
                                        <div data-produto="prod-ponta-gondola-4" class="btn-merchan btn-merchan-4 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                wobbler
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
                                    <div data-layer-mapa=".l-crossmerchan" class="btn-mapa-merchan btn-crossmerchan"></div>

                                </div>
                                <div id="prod-ponta-gondola-1" class="PROD_MERCHAN prod-ponta-gondola-1 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan"><br>
                                                    BEXIGA<br>
                                                    50809407  
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Formato:
                                                </p>
                                                <p class="descMerchanProd">
                                                    Padrão
                                                </p>
                                            </div> 
                                            <!-- fim area de descrição -->
                                            <!-- area de img -->                                          
                                            <div class="float-right areaImgProdMerchan d-table">
                                                <div class="d-table-cell v-align-middle text-center">
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>bexiga.png"/>
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