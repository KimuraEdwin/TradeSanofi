<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "vitaminas";
$produto = "oscal";
$paginasSku = [3,1];
$paginasDist = [1];
$guiaMenu = ['sku', 'distribuicao','gondola', 'educacao', 'merchan'];

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
                                            Posicionamento junto à categoria <br>
                                            de Suplementos de Minerais e Cálcio;<br><br>

                                            Mínimo de 1 frente.
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
                                            Posicionamento junto à categoria de Suplementos<br>
                                            de Minerais e Cálcio;<br><br>

                                            Mínimo de 4 frentes,  3 de SKUs comprimidos <br>
                                            (um de cada apresentação) e 1 de SKU Sachê.
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
                                            Posicionamento junto à categoria de Suplementos <br>
                                            de Minerais e Cálcio;<br><br>

                                            Mínimo de 6 frentes,  4 de SKUs comprimidos <br>
                                            (um de cada apresentação + 1 da apresentação <br>
                                            1000 UI) e 1 de SKU Sachê.
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
                        <div class="conteudoEducacao d-inline-block text-center">
                            <div class="d-flex a-items-center j-content-center">
                                <div class="box-oscal-educacao-superior">
                                    <p class="font-24 colorWhite text-left" style="padding: 5px 15px;">O que é o produto?</p>
                                    <p class="font-16 colorWhite text-left" style="padding: 5px 15px;">
                                        É um produto a base de Cálcio, que auxilia na 
                                        formação e manutenção de ossos e dentes.
                                    </p>
                                </div>
                                <div class="box-oscal-educacao-superior">
                                    <p class="font-24 colorWhite text-left" style="padding: 5px 15px;">Para que serve?</p>
                                    <p class="font-16 colorWhite text-left" style="padding: 5px 15px;">
                                        Quando não for possível atingir a ingestão 
                                        adequada de cálcio pela alimentação, 
                                        a suplementação é recomendada.
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex a-items-center j-content-center">
                                <div class="box-oscal-educacao-meio-lateral">
                                    <p class="colorWhite font-16 positionAbsolute" style="top: 180px; left: 120px;">Os-CAL 500 </p>
                                    <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Edu-1.png" style="left: 70px;top: 160px;" />
                                    <p class="colorWhite font-16 positionAbsolute" style="top: 370px; left: 90px;">Carbonato de Cálcio</p>
                                </div>
                                <div class="box-oscal-educacao-meio">
                                    <div>
                                        <p class="colorWhite font-16 positionAbsolute" style="top: 180px; left: 320px;">Os-CAL D 400 </p>
                                        <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Edu-2.png" style="left: 260px;top: 160px;" />
                                        <p class="colorWhite font-16 positionAbsolute" style="top: 360px; left: 295px;">Carbonato de Cálcio<br> + Vitamina D (400UI)</p>
                                    </div>
                                    <div>
                                        <p class="colorWhite font-16 positionAbsolute" style="top: 180px; left: 490px;">Os-CAL D 1000</p>
                                        <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Edu-3.png" style="left: 500px;top: 210px;" />
                                        <p class="colorWhite font-16 positionAbsolute" style="top: 360px; left: 465px;">Carbonato de Cálcio <br>+ Vitamina D (1000UI)</p>
                                    </div>
                                </div>
                                <div class="box-oscal-educacao-meio-lateral">
                                    <p class="colorWhite font-16 positionAbsolute" style="top: 180px; right: 120px;">Os-CAL CIT </p>
                                    <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Edu-4.png" style="right: 70px;top: 170px;" />
                                    <p class="colorWhite font-16 positionAbsolute" style="top: 360px; right: 100px;">Citrato de Cálcio <Br>+ Vitamina D</p>
                                </div>
                            </div>
                            <div class="d-flex a-items-center j-content-center">
                                <div class="box-oscal-educacao-inferior d-flex a-items-center">
                                    <p class="colorWhite font-20">
                                        A vitamina D presente nesses SKUs
                                        contribui para a absorção do cálcio.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-2 active-<?= $categoria ?>"></span>

                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l2 layer">
                        <div class="conteudoEducacao d-inline-block text-center">
                            
                            <div class="d-inline-block ">
                                <div class="areaContentEducacaoAllegraDir2 float-left" style="text-align:center">
                                    <img style="margin-top: 45px;" src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-3.png"/>
                                    <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-4.png"/>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div class="areaContentEducacaoAllegraDir2 float-right text-left">
                                    <p class="uppercase font-16 textBoxEducacao2 colorTitle" style="padding-top: 30px;padding-bottom:30px">ARGUMENTOs DE VENDAs</p>
                                    <p class="textBoxEducacao3 font-12 colorWhite">
                                        • 80% da população ingere menos cálcio do que deveria<br><br>

                                        • Necessários 4 copos de 200ml de leite para atingir a meta<br>
                                        de ingestão diária de cálcio<br><br>

                                        • 72% da demanda da categoria vem de prescrição médica<br><br>

                                        • Os-Cal e líder em receituário e cresce 4p.p de share<br><br>

                                        • Visitação nacional em +25mil médicos 5 especialidades visitadas<br><br>

                                        • PSP 30% de desconto (L3P2)

                                    </p>
                                    
                                    
                                </div>
                            </div>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-1 active-<?= $categoria ?>"></span>


                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l3 layer">
                        <div class="conteudoEducacao text-center">
                            <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-5.png"/>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-3 active-gripealergia"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-1"></span>

                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l4 layer">
                        <div class="conteudoEducacao d-inline-block">
                            <div class="d-inline-block float-left">
                                <div class="areaContentEducacaoAllegraEsq" style="background-color:unset; margin-right:-5px;margin-left:10px; width: 170px;">
                                    <img class="float-right positionRelative" style="margin-top: 85px;z-index:1" src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-6.png"/>
                                </div>
                            </div>
                            <div class="d-inline-block float-left">
                                <div class="areaContentEducacaoAllegraEsq2">
                                    <p class="uppercase font-16 textBoxEducacao colorTitle">Rinite Alérgica Sazonal<br>com Congestão Nasal</p>
                                    <hr class="guiaEducacao">
                                    <p class="textBoxEducacao font-12 colorWhite">
                                        Crianças de 6 meses a 2 anos ou pesando <br>
                                        10,5 kg ou menos: 2,5 ml 2 x ao dia Urticária <br>
                                        Idiopática Crônica.
                                    </p>
                                    <hr class="guiaEducacao">
                                    <p class="textBoxEducacao font-12 colorWhite">
                                        Crianças de 2 a 11 anos ou pesando mais <br>
                                        de 10,5 kg: 5 ml 2 x ao dia para <br>
                                        Urticária Idiopática Crônica.
                                    </p>
                                    <hr class="guiaEducacao">
                                    <p class="textBoxEducacao font-12 colorWhite">
                                        Crianças de 2 a 11 anos: 5 ml 2 x ao dia <br>
                                        para Rinite Alérgica Sazonal.
                                    </p> 

                                </div>
                            </div>
                            <div class="d-inline-block float-right">
                                <div class="areaContentEducacaoAllegraDir">
                                    <p class="uppercase font-16 textBoxEducacao2 colorTitle">Switch Allegra</p>
                                    <p class="textBoxEducacao3 font-12 colorWhite">
                                        Allegra 60mg, 120mg, 180mg e Pediátricos serão OTC; Allegra D e D24 horas <br>
                                        continuarão atrás do balcão como tarjados.<br><br>
                                    </p>
                                    <hr class="guiaEducacao">
                                    <p class="uppercase font-16 textBoxEducacao2 colorTitle">RECOMENDAÇÃO EXPOSIÇÃO</p>
                                    <p class="textBoxEducacao3 font-12 colorWhite">
                                        A DUPLA EXPOSIÇÃO:  Buscar expor o produto atrás do balcão e no auto<br>
                                        serviço, na categoria de anti-gripais. (Apenas Embalagem OTC)<br><br>
                                    </p>
                                    <hr class="guiaEducacao">
                                    <p class="uppercase font-16 textBoxEducacao2 colorTitle">foco</p>
                                    <p class="textBoxEducacao3 font-12 colorWhite">
                                        1. Escoar embalagem tarjada;<br><br>
                                        2. Engajar os clientes para virada e exposição autosserviço;<br><br>
                                    </p>

                                    
                                </div>
                            </div>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-2 active-gripealergia"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-1"></span>


                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l5 layer">
                        <div class="conteudoEducacao d-inline-block">
                            <div class="d-inline-block float-left">
                                <div class="areaContentEducacaoAllegraEsq3">
                                    <p class="uppercase font-16 textBoxEducacao colorTitle">CATEGORIA NO<br>PONTO QUENTE</p>
                                    <p class="textBoxEducacao font-12 colorWhite">
                                        1. Categorias com Sinergia.<br><br>
                                        2. Aumento de Cesta de Compra.<br><br>
                                        3. Melhoria Ticket Médio por ida ao PDV.
                                    </p>
                                </div>
                                <div class="areaContentEducacaoAllegraEsq4 d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="textBoxEducacao font-12 colorWhite">
                                            1. O consumidor continuará buscando <br>
                                            o produto no balcão, pois este é o seu <br>
                                            comportamento natural.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-inline-block float-left text-center" style="margin-left:30px">
                                <p class="uppercase font-16 textBoxEducacao colorTitle" style="padding-top:0px;padding-bottom:5px">RECOMENDAÇÃO NO AUTOSSERVIÇO</p>
                                <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-7.png"/>
                            </div>
                            <div class="d-inline-block float-right">
                                <div class="areaContentEducacaoAllegraEsq3" style="margin-right:0px">
                                    <p class="uppercase font-16 textBoxEducacao colorTitle">ticket médio</p>
                                    <p class="textBoxEducacao font-12 colorWhite">
                                        • Anti-alérgicos - R$30,22<br><br>
                                        • Anti-gripais - R$13,28
                                    </p>
                                </div>
                                <div class="areaContentEducacaoAllegraEsq4 d-table" style="margin-right:0px">
                                    <div class="d-table-cell v-align-middle">    
                                        <p class="textBoxEducacao font-12 colorWhite">
                                            2. A dupla exposição garantirá <br>
                                            a efetividade da venda, uma vez <br>
                                            que o consumidoré altamente fiel <br>
                                            à marca de escolha.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-1 active-gripealergia"></span>

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