<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "gastro";
$produto = "enterogermina";
$paginasSku = [2];
$paginasDist = [2];
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
                                <div class="areaContentGondolaEsq2 d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="uppercase font-32 textBoxGondola colorTitle" style="padding-top:0px">ATENÇÃO</p>
                                        <p class="textBoxGondola font-14 colorWhite">
                                            • Ter no mínimo 4 frentes (3 do regular, 1 plus);<br><br>

                                            • Estar ao lado de floratil;<br><br>

                                            • Usar a bandeja para dar mais visibilidade ao produto;

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
                                        <p class="uppercase font-32 textBoxGondola colorTitle" style="padding-top:0px">ATENÇÃO</p>
                                        <p class="textBoxGondola font-14 colorWhite">
                                            • Ter no mínimo 4 frentes (3 do regular, 1 plus);<br><br>

                                            • Estar ao lado de floratil;<br><br>

                                            • Usar a bandeja para dar mais visibilidade ao produto;

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
                                        <p class="uppercase font-32 textBoxGondola colorTitle" style="padding-top:0px">ATENÇÃO</p>
                                        <p class="textBoxGondola font-14 colorWhite">
                                            • Ter no mínimo 4 frentes (3 do regular, 1 plus);<br><br>

                                            • Estar ao lado de floratil;<br><br>

                                            • Usar a bandeja para dar mais visibilidade ao produto;

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
                            <div class="box-enterogermina-educacao d-table">
                                <div class="d-table-cell v-align-middle">
                                    <p class="uppercase font-16 textBoxEducacao3 colorTitle" style="padding:0px">
                                        Enterogermina®: contribui para o equilíbrio da flora intestinal
                                    </p>
                                </div>
                                    
                            </div>
                            <div class="d-inline-block">
                                <div class="areaContentEducacaoAllegraDir d-table float-left" style="margin-right:20px;width:502px; height: 371px">
                                    <div class="d-table-cell v-align-middle">
                                        <img src="../../webroot/img/produtos/gastro/enterogermina/enterogerminaEdu-1.png"/>
                                        
                                        
                                        <img style="margin-left: -30px;margin-top:30px" src="../../webroot/img/produtos/gastro/enterogermina/enterogerminaEdu-2.png"/>
                                    </div>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div class="areaContentEducacaoAllegraDir float-right" style="width: 270px; height:371px">
                                    <div class="d-table-cell v-align-middle" style="width:560px; height:371px">
                                        <p class="uppercase font-16 textBoxEducacao3 colorTitle text-left" style="margin-bottom:50px">
                                        • Sem sabor;<br><br>

                                        • Prático e pronto<br>
                                        para uso;<br><br>

                                        • 2 apresentações;<br><br>

                                        • Recomendado para<br>
                                        crianças e adultos.
                                        </p>
                                        <p class="font-9 textBoxEducacao colorWhite text-left" style="padding:0px;width:230px">
                                        Enterogermina ® [folheto]. Origgio, IT. Importado e distribuído por Sanofi-Aventis Ltda.; Enterogermina Plus ® [folheto] Origgio, IT. Importado e distribuído por Sanofi-Aventis Ltda.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-3 active-<?= $categoria ?>"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-1"></span>

                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l2 layer">
                        <div class="conteudoEducacao d-inline-block">
                            <div class="d-inline-block">
                                <div class="areaContentEducacaoAllegraDir d-table float-left" style="margin-right:10px;width:502px; height: 440px">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="uppercase font-16 textBoxEducacao3 colorTitle text-left">
                                            ARGUMENTOs DE VENDAs
                                        </p>
                                        <p class="font-16 textBoxEducacao colorWhite text-left" style="padding:0px 15px;">
                                            
                                        • Categoria de probiótico é a que mais cresce no segmento <br>
                                        de gastro +20% (CAGR4Y)<br><br>

                                        • 70% da demanda de probiótico é para tratamento de diarreia<br><br>

                                        • 60M de pessoas sofrem de diarreia no Brasil<br><br>

                                        • 2 a 3 episódios por ano, 60% desses episódios são tratados<br> 
                                        com produtos OTC<br><br>

                                        • Existem 3 missões de compra:<br>
                                            * Uso imediato = 45% dos shoppers<br>
                                            * Reabastecimento = 42% dos shoppers<br>
                                            * Prescrição Medica = 11% dos shoppers<br><br>

                                        • O uso de antibiótico pode aumentar a incidência de diarreia<br><br>

                                        • Enterogermina é a marca mais prescrita pelos<br>
                                        pediatras e otorrinos

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div class="areaContentEducacaoAllegraDir float-right" style="width: 386px; height:440px">
                                    <div class="d-table-cell v-align-middle" style="width:560px; height:371px">
                                        <p class="font-16 textBoxEducacao colorWhite text-left" style="padding:0px 15px; margin-top:60px">
                                            
                                            • Visitamos mais de +20mil medicos<br><br>

                                            • Enterogermina é pronto para uso e sem sabor<br><br>

                                            • Enterogermina pode ser usado por bebes,  <br> 
                                            crianças e adultos<br><br>

                                            • Plus = 1 x ao dia = R$33,90 | 2bi ate<br>
                                            3 x ao dia = R$31,90<br><br>

                                            • Alto índice de recompra<br><br>

                                            • Visitação nacional +20mil médicos<br><br>

                                            • Mídia nas praças: Estados RJ| SP | MG | PR<br>
                                            e Fortaleza e Recife<br><br>

                                            • Praças com mídia crescem 52%

    
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-2 active-<?= $categoria ?>"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-1"></span>


                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l3 layer">
                        <div class="conteudoEducacao text-center">
                            <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-3.png"/>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-1 active-<?= $categoria ?>"></span>

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

                                </div>
                                <div id="prod-mandatorio-1" class="PROD_MERCHAN prod-mandatorio-1 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan"><br>
                                                    faixa de gôndola<br>
                                                    50807412
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Formato:
                                                </p>
                                                <p class="descMerchanProd">
                                                    Altura: 40mm<br>
                                                    Largura: 255,5mm
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Planograma:
                                                </p>
                                                <p class="descMerchanProd">
                                                    Enterogermina Regular<br>
                                                    Enterogermina Plus
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
                                                Bandeja
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

                                </div>
                                <div id="prod-balcao-1" class="PROD_MERCHAN prod-balcao-1 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan"><br>
                                                bandeja<br>
                                                5080743
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Formato:
                                                </p>
                                                <p class="descMerchanProd">
                                                Altura: 40mm<br>
                                                Largura: 280mm<br>
                                                Profundidade: 250mm
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Planograma:
                                                </p>
                                                <p class="descMerchanProd">
                                                    Enterogermina Regular<br>
                                                    Enterogermina Plus
                                                </p>
                                            </div> 
                                            <!-- fim area de descrição -->
                                            <!-- area de img -->                                          
                                            <div class="float-right areaImgProdMerchan d-table">
                                                <div class="d-table-cell v-align-middle text-center">
                                                    <img src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>bandeja.png"/>
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