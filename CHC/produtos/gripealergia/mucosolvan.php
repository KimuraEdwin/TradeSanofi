<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "gripealergia";
$produto = "mucosolvan";
$paginasSku = [3,3];
$guiaMenu = ['sku','gondola', 'educacao'];

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

                <div class="content-page ajuste-content-page gondola">

                    <div data-layer-set=".GONDOLA" class="GONDOLA l1 layer show">
                        <div class="conteudoGondola d-inline-block">
                            <div class="d-inline-block float-left">
                                <div class="areaContentGondolaEsq2 d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="uppercase font-32 textBoxGondola colorTitle" style="padding: 5px 30px 0px 30px;">atenção</p>
                                        <p class="textBoxGondola font-14 colorWhite">
                                            • Ter no mínimo 4 frentes por marca;<br><br>

                                            • Posicionando na categoria de xaropes ;<br><br>

                                            • Principais concorrentes: expec, abrilar, <br>
                                            ambroxmel e vick.
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
                                <div class="areaContentGondolaEsq2 d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="uppercase font-32 textBoxGondola colorTitle" style="padding: 5px 30px 0px 30px;">atenção</p>
                                        <p class="textBoxGondola font-14 colorWhite">
                                            • Ter no mínimo 4 frentes por marca;<br><br>

                                            • Posicionando na categoria de xaropes ;<br><br>

                                            • Principais concorrentes: expec, abrilar, <br>
                                            ambroxmel e vick.
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
                                <div class="areaContentGondolaEsq2 d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="uppercase font-32 textBoxGondola colorTitle" style="padding: 5px 30px 0px 30px;">atenção</p>
                                        <p class="textBoxGondola font-14 colorWhite">
                                            • Ter no mínimo 4 frentes por marca;<br><br>

                                            • Posicionando na categoria de xaropes ;<br><br>

                                            • Principais concorrentes: expec, abrilar, <br>
                                            ambroxmel e vick.
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
                        <div data-layer=".l3" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-3 margin-texto d-table positionAbsolute active-menugondola-gripealergia">
                            <p class="d-table-cell v-align-middle uppercase font-8">Tamanho G</p>
                        </div>

                    </div>

                </div>

                <div class="content-page ajuste-content-page educacao">

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l1 layer show">

                        <div class="conteudoEducacao d-inline-block">
                            <div>
                                <div class="areaContentEducacaoAllegraDir" style="width: 560px; height: 402px">
                                    <p class="textBoxEducacao3 font-16 colorWhite" style="padding: 30px 40px 26px 40px;">
                                        • Indicado para tratar tosse com muco
                                    </p>
                                    <hr class="guiaEducacao">
                                    <p class="textBoxEducacao3 font-16 colorWhite" style="padding: 30px 40px 26px 40px;">
                                        • Combina qualidade e um preço acessível
                                    </p>
                                    <hr class="guiaEducacao">
                                    <p class="textBoxEducacao3 font-16 colorWhite" style="padding: 30px 40px 26px 40px;">
                                        • Família completa para tratar a tosse (adulto; infantil e gotas)
                                    </p> 
                                    <hr class="guiaEducacao">
                                    <p class="textBoxEducacao3 font-16 colorWhite" style="padding: 30px 40px 26px 40px;">
                                        • Mucosolvan: xarope premium – dissolve, elimina e protege
                                    </p> 
                                    <hr class="guiaEducacao">
                                    <p class="textBoxEducacao3 font-16 colorWhite" style="padding: 30px 40px 26px 40px;">
                                        • Bisolvon: xarope confiável e acessível para o alívio da tosse
                                    </p> 

                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>