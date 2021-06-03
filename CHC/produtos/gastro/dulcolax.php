<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "gastro";
$produto = "dulcolax";
$paginasSku = [2];
$paginasDist = [3,2];
$guiaMenu = ['sku', 'gondola', 'educacao'];

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
                                        <p class="uppercase font-32 textBoxGondola colorTitle" style="padding-top:0px">ATENÇÃO</p>
                                        <p class="textBoxGondola font-14 colorWhite">
                                            • Minímo 3 frentes (2 de Dulcolax e 1 de Guttalax);<br><br>

                                            • Posicionado na categoria de laxantes ao lado de Lactopurga;<br><br>

                                            • Evitar posicionar ao lado de Bisalax;<br><br>

                                            • Principais concorrentes: Lactopurga, almeida prado e bisalax.

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
                                            • Minímo 3 frentes (2 de Dulcolax e 1 de Guttalax);<br><br>

                                            • Posicionado na categoria de laxantes ao lado de Lactopurga;<br><br>

                                            • Evitar posicionar ao lado de Bisalax;<br><br>

                                            • Principais concorrentes: Lactopurga, almeida prado e bisalax.

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
                                            • Minímo 3 frentes (2 de Dulcolax e 1 de Guttalax);<br><br>

                                            • Posicionado na categoria de laxantes ao lado de Lactopurga;<br><br>

                                            • Evitar posicionar ao lado de Bisalax;<br><br>

                                            • Principais concorrentes: Lactopurga, almeida prado e bisalax.

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
                        <div class="conteudoEducacao text-center"  style="margin-top: 70px;">
                            <img src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Edu-1.png"/>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-2 active-<?= $categoria ?>"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-1"></span>
                    </div>
                    <div data-layer-set=".EDUCACAO" class="EDUCACAO l2 layer">
                        <div class="conteudoEducacao text-center" style="margin-top: 70px;">
                            <img src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Edu-2.png"/>
                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-1 active-<?= $categoria ?>"></span>
                    </div>
                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>