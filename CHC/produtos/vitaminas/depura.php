<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "vitaminas";
$produto = "depura";
$paginasSku = [4];
$paginasDist = [3,2];
$guiaMenu = ['sku', 'gondola', 'educacao', 'merchan'];

?>

<!DOCTYPE html>
<html>
    <head>
        <?php head(); ?>
    </head>
    <body>
        <div id="bg" class="stage">
            <?php navBarCHC($categoria); ?>
            <?php headerSkuCHC($guiaMenu, $categoria) ?>
            <div class="quadro-produtos positionAbsolute">

                <img class="planeta_produtos" src="../../webroot/img/produtos/planeta-produtos.png" />
                <img class="logo_produtos" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Logo.png" />

                <div class="content-page ajuste-content-page skus show">
                    <?php skuCHC($paginasSku, $categoria, $produto) ?>
                </div>
                
                <div class="content-page ajuste-content-page gondola">

                    <div data-layer-set=".GONDOLA" class="GONDOLA l1 layer show">
                        <div class="conteudoGondola d-inline-block">
                            <div class="d-inline-block float-left">
                                <div class="areaContentGondolaEsq" style="height: 71px">
                                    <p class="uppercase font-16 textBoxGondola colorTitle" style="padding-top:8px">PRINCIPAIS DIRETRIZES</p>
                                    <p class="textBoxGondola font-14 colorWhite" style="padding-top:8px">
                                        • Quando possível garantir a exposição dos OTC.
                                    </p>
                                </div>
                                <div class="areaContentGondolaEsq" style="height: 71px">
                                    <p class="uppercase font-16 textBoxGondola colorTitle" style="padding-top:8px">AUTOSSERVIÇO:</p>
                                    <p class="textBoxGondola font-14 colorWhite" style="padding-top:8px">
                                        • Estar presente na gôndola de autosserviços;<br>

                                        • Ao lado de addera d3 com a versão gotas (500 ui);
                                    </p>
                                </div>
                                <div class="areaContentGondolaEsq" style="height: 155px; background: linear-gradient(to right, #133055, #2064BA)">
                                    <p class=" textBoxGondola colorTitle font-16" style="padding-top:40px">
                                        BALCÃO: Espaço A-Z com altas dosagens<br><br>

                                        (3 SKUs = 1.000, 2.000, 7.000) UIs.
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
                                <div class="areaContentGondolaEsq" style="height: 71px">
                                    <p class="uppercase font-16 textBoxGondola colorTitle" style="padding-top:8px">PRINCIPAIS DIRETRIZES</p>
                                    <p class="textBoxGondola font-14 colorWhite" style="padding-top:8px">
                                        • Quando possível garantir a exposição dos OTC.
                                    </p>
                                </div>
                                <div class="areaContentGondolaEsq" style="height: 71px">
                                    <p class="uppercase font-16 textBoxGondola colorTitle" style="padding-top:8px">AUTOSSERVIÇO:</p>
                                    <p class="textBoxGondola font-14 colorWhite" style="padding-top:8px">
                                        • Estar presente na gôndola de autosserviços;<br>

                                        • Ao lado de addera d3 com a versão gotas (500 ui);
                                    </p>
                                </div>
                                <div class="areaContentGondolaEsq" style="height: 155px; background: linear-gradient(to right, #133055, #2064BA)">
                                    <p class=" textBoxGondola colorTitle font-16" style="padding-top:40px">
                                        BALCÃO: Espaço A-Z com altas dosagens<br><br>

                                        (3 SKUs = 1.000, 2.000, 7.000) UIs.
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
                                <div class="areaContentGondolaEsq" style="height: 71px">
                                    <p class="uppercase font-16 textBoxGondola colorTitle" style="padding-top:8px">PRINCIPAIS DIRETRIZES</p>
                                    <p class="textBoxGondola font-14 colorWhite" style="padding-top:8px">
                                        • Quando possível garantir a exposição dos OTC.
                                    </p>
                                </div>
                                <div class="areaContentGondolaEsq" style="height: 71px">
                                    <p class="uppercase font-16 textBoxGondola colorTitle" style="padding-top:8px">AUTOSSERVIÇO:</p>
                                    <p class="textBoxGondola font-14 colorWhite" style="padding-top:8px">
                                        • Estar presente na gôndola de autosserviços;<br>

                                        • Ao lado de addera d3 com a versão gotas (500 ui);
                                    </p>
                                </div>
                                <div class="areaContentGondolaEsq" style="height: 155px; background: linear-gradient(to right, #133055, #2064BA)">
                                    <p class=" textBoxGondola colorTitle font-16" style="padding-top:40px">
                                        BALCÃO: Espaço A-Z com altas dosagens<br><br>

                                        (3 SKUs = 1.000, 2.000, 7.000) UIs.
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
                        <div class="conteudoEducacao d-inline-block text-center" style="margin-top:70px">
                            
                            <div class="d-inline-block">
                                <div class="areaContentEducacaoAllegraDir2 float-left" style="text-align:center;width:386px">
                                    <p class="font-14 colorWhite text-left" style="padding: 30px 30px;">
                                        • Treinar o alconista/farmacêutico sobre a importância e potencial da  categoria:
                                    </p>
                                    <hr class="guiaEducacao">
                                    <p class="font-14 colorWhite text-left" style="padding: 30px 30px;">
                                        • Grande parte da população mundial e brasileira <br>
                                        sofrem de deficiência de vitamina D, impactando<br>
                                        em possível osteoporose,perda de força muscular,<br>
                                        risco de queda em idosos.
                                    </p>
                                    <hr class="guiaEducacao">
                                    <img style="margin-top: 40px; margin-left: 40px;" src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-1.png"/>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div class="areaContentEducacaoAllegraDir2 float-right text-left" style="width:386px;background: linear-gradient(to top, #277390, #277390)">
                                    <p class="uppercase font-16 textBoxEducacao2 colorTitle" style="padding-top: 30px;padding-bottom:30px">ARGUMENTOs DE VENDAs</p>
                                    <p class="textBoxEducacao3 font-12 colorWhite">
                                        • Recomendação: 15 min de exposição ao sol sem proteção solar<br><br>

                                        • VitD é a vitamina mais usada, com mais de 30mil estudos<br><br>

                                        • VitD melhora a saúde óssea, muscular e sistema imune<br><br>

                                        • Deficiência de VitD faz absorver somente 15% do cálcio ingerido<br><br>

                                        • Depura é o único Orodispersivel do mercado<br><br>

                                        • 50mil e 7mil Uis – Tratamento demais SKUS manutenção<br><br>

                                        • Visitação medica nacional +50mil médicos <br><br>

                                        • Única VitaD com PSP
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>

                <div class="content-page ajuste-content-page merchan">

                    <div data-layer-set=".MERCHAN" class="MERCHAN l1 layer show">
                        <div class="conteudoEducacao d-inline-block" style="margin-top:50px">

                            <div data-layer-set-mapa=".MAPA" class="MAPA layer l-mandatorio show">
                                <div class="d-inline-block float-left">
                                    <div class="areaContentMerchanAllegraEsq">
                                        <div data-produto="prod-mandatorio-1" class="btn-merchan btn-merchan-1 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                bandeja
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

                                </div>
                                <div id="prod-mandatorio-1" class="PROD_MERCHAN prod-mandatorio-1 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan"><br>
                                                    Bandeja<br>
                                                </p>
                                            </div> 
                                            <!-- fim area de descrição -->
                                            <!-- area de img -->                                          
                                            <div class="float-right areaImgProdMerchan d-table">
                                                <div class="d-table-cell v-align-middle text-center">
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>bandeja.png"/>
                                                    <div data-close-merchan=".prod-mapa" class="btn-close-prod-merchan d-table" style="top:60px">
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
                                <div id="prod-mandatorio-3" class="PROD_MERCHAN prod-mandatorio-3 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan"><br>
                                                    CUBO<br>
                                                    50809410
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
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>cubo.png"/>
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
                                <div id="prod-mandatorio-4" class="PROD_MERCHAN prod-mandatorio-4 layer">
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
                                <div id="prod-mandatorio-5" class="PROD_MERCHAN prod-mandatorio-5 layer">
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