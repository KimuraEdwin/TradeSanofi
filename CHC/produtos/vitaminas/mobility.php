<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "vitaminas";
$produto = "mobility";
$paginasSku = [1];
$paginasDist = [1];
$guiaMenu = ['sku','distribuicao','gondola', 'educacao', 'merchan'];

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
                                <div class="areaContentGondolaEsq2 d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="uppercase font-16 textBoxGondola colorTitle">PRINCIPAIS DIRETRIZES</p>
                                        <p class="textBoxGondola font-14 colorWhite">
                                            Sempre ao lado de Oscal

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
                                            Sempre ao lado de Oscal;<br><br>

                                            Mínimo de 2 frentes.
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
                                            Sempre ao lado de Oscal;<br><br>

                                            Mínimo de 2 frentes.
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
                        <div class="conteudoEducacao d-inline-block text-center" style="margin-top:70px">
                            
                            <div class="d-inline-block">
                                <div class="areaContentEducacaoAllegraDir2 float-left" style="text-align:center;width:386px">
                                    <p class="font-30 colorWhite text-left" style="padding: 0px 10px">
                                        O que é?
                                    </p>
                                    <p class="font-14 colorWhite text-left" style="padding: 10px 10px 15px 10px">
                                        Suplemente Alimentar em Pó 100% Colágeno Hidrolisado
                                    </p>
                                    <!-- <hr class="guiaEducacao"> -->
                                    <p class="font-30 colorWhite text-left" style="padding: 0px 10px">
                                        O que ele faz?
                                    </p>
                                    <p class="font-14 colorWhite text-left" style="padding: 10px 10px 15px 10px">
                                        Atua diretamente no funcionamento das articulações
                                        Diminui desconfortos Melhora a MOBILIDADE FÍSICA
                                    </p>
                                    <p class="font-30 colorWhite text-left" style="padding: 0px 10px">
                                        Para quem ele 
                                        é indicado?
                                    </p>
                                    <p class="font-14 colorWhite text-left" style="padding: 10px 10px 15px 10px">
                                        Qualquer pessoa com desconforto nas articulações como:
                                        Joelhos, Ombros e Quadril.
                                    </p>
                                    <p class="font-30 colorWhite text-left" style="padding: 0px 10px">
                                        Como tomar?
                                    </p>
                                    <p class="font-14 colorWhite text-left" style="padding: 10px 10px 15px 10px">
                                        O consumo indicado é de 1 sachê por dia, podendo ser
                                        diluído em qualquer líquido ou mistura no alimento.
                                    </p>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div class="areaContentEducacaoAllegraDir2 float-right text-center" style="width:386px;background: linear-gradient(to top, #277390, #277390)">
                                    <p class="textBoxEducacao3 font-24 colorWhite text-center padding-top-10">
                                        SEM SABOR E SEM CHEIRO
                                    </p>
                                    <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Educacao-1.png"/>
                                    <div class="positionRelative">
                                        <div class="positionAbsolute " style="left: 60px">
                                            <p class="font-24 colorWhite">R$ 125,90</p>
                                            <p class="font-12 colorWhite">Preço Mínimo</p>
                                        </div>
                                        <div class="positionAbsolute " style="left: 200px">
                                            <p class="font-24 colorWhite">R$ 144,90</p>
                                            <p class="font-12 colorWhite">Preço Máximo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                                TAGs
                                            </div>
                                        </div>
                                        <div data-produto="prod-mandatorio-2" class="btn-merchan btn-merchan-2 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                Clip Strip
                                            </div>
                                        </div>
                                        <div data-produto="prod-mandatorio-3" class="btn-merchan btn-merchan-2 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                Precificador
                                            </div>
                                        </div>
                                        <div data-produto="prod-mandatorio-4" class="btn-merchan btn-merchan-2 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                Faixa LMPM
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
                                    <div data-layer-mapa=".l-crossmerchan" class="btn-mapa-merchan btn-crossmerchan"></div>

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
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>tags.png"/>
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
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>clip.png"/>
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
                                <div id="prod-mandatorio-4" class="PROD_MERCHAN prod-mandatorio-4 layer">
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
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>faixa-lmpm.png"/>
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
                                                TAGs
                                            </div>
                                        </div>
                                        <div data-produto="prod-crossmerchan-2" class="btn-merchan btn-merchan-2 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                Clip Strip
                                            </div>
                                        </div>
                                        <div data-produto="prod-crossmerchan-3" class="btn-merchan btn-merchan-2 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                Precificador
                                            </div>
                                        </div>
                                        <div data-produto="prod-crossmerchan-4" class="btn-merchan btn-merchan-2 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                Faixa LMPM
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- area da direita -->
                                <div class="PROD_MERCHAN prod-mapa layer show">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDir">
                                            <img class="float-right" style="margin-top: -61px;" src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>cros.png"/>
                                        </div>
                                    </div>

                                    <div data-layer-mapa=".l-mandatorio" class="btn-mapa-merchan btn-mandatorio"></div>
                                    <div data-layer-mapa=".l-crossmerchan" class="btn-mapa-merchan btn-crossmerchan"></div>

                                </div>
                                <div id="prod-crossmerchan-1" class="PROD_MERCHAN prod-crossmerchan-1 layer">
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
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>tags.png"/>
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
                                <div id="prod-crossmerchan-2" class="PROD_MERCHAN prod-crossmerchan-2 layer">
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
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>clip.png"/>
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
                                <div id="prod-crossmerchan-3" class="PROD_MERCHAN prod-crossmerchan-3 layer">
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
                                <div id="prod-crossmerchan-4" class="PROD_MERCHAN prod-crossmerchan-4 layer">
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
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>faixa-lmpm.png"/>
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