<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "gripealergia";
$produto = "allegra";
$paginasSku = [1,4,2,2];
$paginasDist = [3,3,2];
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
                                <div class="areaContentGondolaEsq">
                                    <p class="uppercase font-16 textBoxGondola colorTitle">PRINCIPAIS DIRETRIZES</p>
                                    <p class="textBoxGondola font-14 colorWhite">
                                        1. Visível ao shopper principalmente no período de inverno.<br><br>
                                        2. Principais concorrentes: Decongex; Hixizine e Alektos.
                                    </p>
                                </div>
                                <div class="areaContentGondolaEsq">
                                    <p class="uppercase font-16 textBoxGondola colorTitle">atenção</p>
                                    <p class=" textBoxGondola font-14 colorWhite">
                                        • Blocar a família fora do balcão, 
                                        se não for possível, blocar 
                                        atrás do balcão.
                                        <br><br>
                                        • Estar visível ao shopper principalmente no inverno.
                                    </p>
                                </div>
                            </div>
                            <div class="d-inline-block float-right">
                                <div class="areaContentGondolaDir">
                                    <img src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Gondola-p.png"/>
                                </div>
                            </div>
                        </div>

                        <div data-layer=".l1" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-1 margin-texto d-table positionAbsolute active-menugondola-gripealergia">
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
                                <div class="areaContentGondolaEsq">
                                    <p class="uppercase font-16 textBoxGondola colorTitle">PRINCIPAIS DIRETRIZES</p>
                                    <p class="textBoxGondola font-14 colorWhite">
                                        1. Visível ao shopper principalmente no período de inverno.<br><br>
                                        2. Principais concorrentes: Decongex; Hixizine e Alektos.
                                    </p>
                                </div>
                                <div class="areaContentGondolaEsq">
                                    <p class="uppercase font-16 textBoxGondola colorTitle">atenção</p>
                                    <p class=" textBoxGondola font-14 colorWhite">
                                        • Blocar a família atrás do balcão.<br><br>
                                        • Estar visível ao shopper principalmente no inverno.
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
                        <div data-layer=".l2" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-2 margin-texto d-table positionAbsolute active-menugondola-gripealergia">
                            <p class="d-table-cell v-align-middle uppercase font-8">Tamanho M</p>
                        </div>
                        <div data-layer=".l3" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-3 margin-texto d-table positionAbsolute">
                            <p class="d-table-cell v-align-middle uppercase font-8">Tamanho G</p>
                        </div>

                    </div>

                    <div data-layer-set=".GONDOLA" class="GONDOLA l3 layer">
                        <div class="conteudoGondola d-inline-block">
                            <div class="d-inline-block float-left">
                                <div class="areaContentGondolaEsq">
                                    <p class="uppercase font-16 textBoxGondola colorTitle">PRINCIPAIS DIRETRIZES</p>
                                    <p class="textBoxGondola font-14 colorWhite">
                                        1. Visível ao shopper principalmente no período de inverno.<br><br>
                                        2. Principais concorrentes: Decongex; Hixizine e Alektos.
                                    </p>
                                </div>
                                <div class="areaContentGondolaEsq">
                                    <p class="uppercase font-16 textBoxGondola colorTitle">atenção</p>
                                    <p class=" textBoxGondola font-14 colorWhite">
                                        • Blocar a família atrás do balcão.<br><br>
                                        • Estar visível ao shopper principalmente no inverno.
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
                        <div data-layer=".l3" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-3 margin-texto d-table positionAbsolute active-menugondola-gripealergia">
                            <p class="d-table-cell v-align-middle uppercase font-8">Tamanho G</p>
                        </div>

                    </div>

                </div>

                <div class="content-page ajuste-content-page educacao">

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l1 layer show">
                        <div class="conteudoEducacao d-inline-block">
                            <div class="d-inline-block float-left">
                                <div class="areaContentEducacaoAllegraEsq">
                                    <p class="uppercase font-16 textBoxEducacao colorTitle">Manifestação<br>Alérgicas:</p>
                                    <hr class="guiaEducacao">
                                    <p class="textBoxEducacao font-12 colorWhite">
                                        Rinite Alérgica <br>
                                        (120mg/180mg) <br>
                                        e Urticária (180mg)
                                    </p>
                                    <hr class="guiaEducacao">
                                    <p class="textBoxEducacao font-12 colorWhite">
                                        Adultos e crianças acima <br>
                                        de 12 anos de idade.
                                    </p>
                                    <hr class="guiaEducacao">
                                    <p class="textBoxEducacao font-12 colorWhite">
                                        Allegra 120mg/180mg<br>
                                        1 comprimido
                                    </p>
                                    <hr class="guiaEducacao">
                                    <p class="textBoxEducacao font-12 colorWhite">
                                        1 vez ao dia
                                    </p>

                                    <img class="float-right" style="margin-top: -15px;" src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-1.png"/>
                                </div>
                            </div>
                            <div class="d-inline-block float-left">
                                <div class="areaContentEducacaoAllegraEsq">
                                    <p class="uppercase font-16 textBoxEducacao colorTitle">Rinite Alérgica<br>Sazonal com<br>Congestão Nasal</p>
                                        <hr class="guiaEducacao">
                                    <p class="textBoxEducacao font-12 colorWhite">
                                        Adultos e crianças acima <br>
                                        de 12 anos de idade
                                    </p>
                                        <hr class="guiaEducacao">
                                    <p class="textBoxEducacao font-12 colorWhite">
                                        2 vezes ao dia<br>
                                        Allegra D12 1 comprimido
                                    </p>
                                        <hr class="guiaEducacao">
                                    <p class="textBoxEducacao font-12 colorWhite">
                                        2 vezes ao dia<br>
                                        Allegra D24 1 comprimido
                                    </p> 

                                    <img class="float-right" src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-2.png"/>
                                </div>
                            </div>
                            <div class="d-inline-block float-right">
                                <div class="areaContentEducacaoAllegraDir">
                                    <p class="uppercase font-16 textBoxEducacao2 colorTitle">DESCRIÇÃO</p>
                                    <p class="textBoxEducacao3 font-12 colorWhite">
                                        Novo SKU com 30 comprimidos de Allegra 180 mg Tratamento ideal <br>
                                        para urticária crônica, a partir de 30 dias.
                                    </p>
                                    <hr class="guiaEducacao">
                                    <p class="uppercase font-16 textBoxEducacao2 colorTitle">INSIGHT</p>
                                    <p class="textBoxEducacao3 font-12 colorWhite">
                                        De acordo com a Guideline World Allergy Organization (WAO), <br>
                                        o tratamento da urticária deve levar de 1 a 3 meses.
                                    </p>
                                    <hr class="guiaEducacao">
                                    <p class="uppercase font-16 textBoxEducacao2 colorTitle">CLAIMS</p>
                                    <p class="textBoxEducacao3 font-12 colorWhite">
                                        Tratamento completo da urticária (sintomas múltiplos de ação)<br>
                                        • Ação rápida<br>
                                        • Alívio 24H<br>
                                        • Sem sonolência
                                    </p> 
                                    <hr class="guiaEducacao">
                                    <p class="uppercase font-16 textBoxEducacao2 colorTitle">BUSINESS RATIONAL</p>
                                    <p class="textBoxEducacao3 font-12 colorWhite">
                                        13% Dos shoppers compram 2 unidades de allegra 180 com 10 cpr <br>
                                        na mesma ida ao pdv > estimular o TRADE UP 
                                    </p> 

                                    <img class="float-right" style="margin-top: -15px;" src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-2.png"/>
                                </div>
                            </div>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-5 active-gripealergia"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-1"></span>

                    </div>

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l2 layer">
                        <div class="conteudoEducacao d-inline-block">
                            <div class="d-inline-block float-left">
                                <div class="areaContentEducacaoAllegraEsq" style="background-color:unset;margin-right:0px">
                                    <img class="float-right" style="margin-top: 15px;" src="../../webroot/img/produtos/<?= $categoria.'/'.$produto.'/'.$produto ?>Edu-4.png"/>
                                </div>
                            </div>
                            <div class="d-inline-block float-left">
                                <div class="areaContentEducacaoAllegraDir2">
                                    <p class="uppercase font-16 textBoxEducacao2 colorTitle">PRODUTO</p>
                                    <p class="textBoxEducacao3 font-12 colorWhite">
                                        AlleNasal ® - Spray 120 doses
                                    </p>
                                    <hr class="guiaEducacao">
                                    <p class="uppercase font-16 textBoxEducacao2 colorTitle">PrincÍpio Ativo</p>
                                    <p class="textBoxEducacao3 font-12 colorWhite">
                                        Triancinolona Acetonida®  EXCLUSIVIDADE MERCADO: <br>
                                        Sem Genérico e Similar – Não intercambiável
                                    </p>
                                    <hr class="guiaEducacao">
                                    <p class="uppercase font-16 textBoxEducacao2 colorTitle">Classe Terapêutica</p>
                                    <p class="textBoxEducacao3 font-12 colorWhite">
                                        Corticoide Nasal
                                    </p> 
                                    <hr class="guiaEducacao">
                                    <p class="uppercase font-16 textBoxEducacao2 colorTitle">Indicação</p>
                                    <p class="textBoxEducacao3 font-12 colorWhite">
                                        Tratamento das rinites alérgicas. Recomenda-se o <br>
                                        tratamento mínimode 2 meses. (sem retenção de receita).
                                    </p> 
                                    <hr class="guiaEducacao">
                                    <p class="uppercase font-16 textBoxEducacao2 colorTitle">Preço:</p>
                                    <p class="textBoxEducacao3 font-12 colorWhite">
                                        • PMC 18% = R$ 54,25   • PSP (2 caixas) = R$ 39,87 cada
                                    </p> 

                                </div>
                            </div>
                            <div class="d-inline-block float-right">
                                <div class="areaContentEducacaoAllegraDir2">
                                    <p class="uppercase font-16 textBoxEducacao2 colorTitle">CENÁRIO</p>
                                    <p class="textBoxEducacao3 font-12 colorWhite">
                                        Pacientes que sofrem de rinite alérgica têm suas vidas <br>
                                        impactadas pelo não controle da alergia e seus múltiplos <br>
                                        sintomas, não só durante uma crise, mas também <br>
                                        a longo prazo.  Hoje não há uma marca que ofereça <br>
                                        uma solução completa.
                                    </p>
                                    <hr class="guiaEducacao">
                                    <p class="uppercase font-16 textBoxEducacao2 colorTitle">DIFERECIAIS & BENEFÍCIOS</p>
                                    <p class="textBoxEducacao3 font-12 colorWhite">
                                        • Sem sono<br>
                                        • Sem gosto<br>
                                        • Sem álcool<br>
                                        • Não escorre para a garganta<br>
                                        • A partir dos 2 anos
                                    </p>
                                    <hr class="guiaEducacao">
                                    <p class="uppercase font-16 textBoxEducacao2 colorTitle">OPORTUNIDADE DE NEGÓCIO</p>
                                    <p class="textBoxEducacao3 font-12 colorWhite">
                                        70% das prescrições para tratamento da alergia<br>
                                        combinam o tratamento oral e o tratamento tópico.
                                    </p>

                                    
                                </div>
                            </div>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-4 active-gripealergia"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-1"></span>


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
                                                BALCÃO
                                            </div>
                                        </div>
                                        <div data-produto="prod-mandatorio-2" class="btn-merchan btn-merchan-2 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                Bexiga
                                            </div>
                                        </div>
                                        <div data-produto="prod-mandatorio-3" class="btn-merchan btn-merchan-3 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                Cubo
                                            </div>
                                        </div>
                                        <div data-produto="prod-mandatorio-4" class="btn-merchan btn-merchan-4 d-table uppercase">
                                            <div class="d-table-cell v-align-middle">
                                                Faixa de Gôndola<br>Retrátil
                                            </div>
                                        </div>
                                        <div data-produto="prod-mandatorio-5" class="btn-merchan btn-merchan-5 d-table uppercase">
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
                                            <img class="float-right" style="margin-top: -61px;" src="../../webroot/img/produtos/<?= $categoria ?>/<?= $produto ?>/<?= $produto.'Merchan-' ?>mandatorio.png"/>
                                        </div>
                                    </div>

                                    <div data-layer-mapa=".l-mandatorio" class="btn-mapa-merchan btn-mandatorio"></div>
                                    <div data-layer-mapa=".l-balcao" class="btn-mapa-merchan btn-balcao"></div>
                                    <div data-layer-mapa=".l-ponta-gondola" class="btn-mapa-merchan btn-ponta-gondola"></div>
                                    <div data-layer-mapa=".l-crossmerchan" class="btn-mapa-merchan btn-crossmerchan"></div>

                                </div>
                                <div id="prod-mandatorio-1" class="PROD_MERCHAN prod-mandatorio-1 layer">
                                    <div class="d-inline-block float-right">
                                        <div class="areaContentMerchanAllegraDirProd">
                                            <!-- area de descrição -->
                                            <div class="float-left areaDescProdMerchan">
                                                <p class="tituloDescMerchan"><br>
                                                    Bandeja<br>
                                                    50809435
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Formato:
                                                </p>
                                                <p class="descMerchanProd">
                                                    Altura: 475mm<br>
                                                    Largura: 235mm<br>
                                                    Profundidade: 35mm
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Planograma:
                                                </p>
                                                <p class="descMerchanProd">
                                                    Allegra Pediatrico 6mg/ml;<br>
                                                    Allegra caixa 120 mg cprs;<br>
                                                    Allegra caixa 180 mg cprs;<br>
                                                    Allegra caixa 60 mg cprs.<br>
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
                                                    Altura: 150mm<br>
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
                                                    Altura: 30mm<br>
                                                    Largura Aberta: 430mm<br>
                                                    Profundidade Fechada: 300mm
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Planograma:
                                                </p>
                                                <p class="descMerchanProd">
                                                    Allegra Pediatrico 6mg/ml;<br>
                                                    Allegra caixa 120 mg cprs;
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
                                                    Altura: 150mm<br>
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
                                                    Allegra Pediatrico 6mg/ml;<br>
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
                                                    Altura: 250mm<br>
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
                                                    Altura: 210mm<br>
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
                                                    Altura: 30mm<br>
                                                    Largura Aberta: 430mm<br>
                                                    Profundidade Fechada: 300mm
                                                </p>
                                                <p class="tituloDescMerchan">
                                                    • Planograma:
                                                </p>
                                                <p class="descMerchanProd">
                                                    Allegra Pediatrico 6mg/ml;<br>
                                                    Allegra caixa 120 mg cprs;
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
                                                    Altura: 150mm<br>
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