<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "cronicos";
$produto = "fluxocor";
$heroi = "fluxocor";
$paginas = [2];
$guiaMenu = ['sku'];

?>



<!DOCTYPE html>
<html>
    <head>
        <?php head(); ?>
    </head>
    <body>
        <div id="bg" class="stage">
            <?php headerSku($guiaMenu) ?>
            <div class="quadro positionAbsolute">

                <div class="content-page skus show">
                    <?php sku($heroi, $paginas, $categoria, $produto) ?>
                </div>

                <div class="content-page dgmpe">

                    <div data-layer-set=".DGMP" class="DGMP l1 layer show">
                        <div class="areaHeroi positionAbsolute">
                            <div class="logo">
                                <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                            </div>
                            
                            <div class="area-icone-dgmpe area-icone-ditribuicao d-table">
                                <div class="d-table-cell v-align-middle">
                                    <img src="../../webroot/img/icones/decentralized.png"/>
                                    <p class="icone-texto">Distribuição</p>
                                </div>
                            </div>
                            <div class="area-icone-dgmpe area-icone-gondola d-table">
                                <div class="d-table-cell v-align-middle">
                                    <img src="../../webroot/img/icones/shelf.png"/>
                                    <p class="icone-texto">Gôndola</p>
                                </div>
                            </div>
                            <div class="area-icone-dgmpe area-icone-merchandising d-table">
                                <div class="d-table-cell v-align-middle">
                                    <img src="../../webroot/img/icones/shopping-cart.png"/>
                                    <p class="icone-texto">Merchandising</p>
                                </div>
                            </div>
                            <div class="area-icone-dgmpe area-icone-preco d-table">
                                <div class="d-table-cell v-align-middle">
                                    <img src="../../webroot/img/icones/tag.png"/>
                                    <p class="icone-texto">Preço</p>
                                </div>
                            </div>

                        </div>

                        <div class="conteudoDgmpe">

                            <div class="area-conteudo-dgmpe area-conteudo-ditribuicao d-table positionAbsolute">
                                <div class="d-table-cell v-align-middle">
                                    <p class="conteudo-texto uppercase">&nbsp;GARANTIR A PRESENÇA DE PURAN T4 - 14 APRESENTAÇÕES</p>
                                </div>
                            </div>

                            <div class="area-conteudo-dgmpe area-conteudo-gondola d-table positionAbsolute">
                                <div class="d-table-cell v-align-middle">
                                    <table class="table-conteudo-dgmpe">
                                        <tr>
                                            <th>Cluster</th>
                                        </tr>
                                        <tr>
                                            <td>CCO</td>
                                        </tr>
                                        <tr>
                                            <td>Regionais</td>
                                        </tr>
                                        <tr>
                                            <td>Distritais / Híbridas / Alimentar</td>
                                        </tr>
                                        <tr>
                                            <td>Associativismo / Independentes</td>
                                        </tr>
                                    </table>
                                    <table class="table-conteudo-dgmpe-vb">
                                        <tr>
                                            <th>VB</th>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                        </tr>
                                    </table>
                                    <div class="texto-conteudo-dgmpe-gondola d-table">
                                        <p class="d-table-cell v-align-middle">Garantir que respeitem o planograma</p>
                                    </div>
                                </div>
                            </div>

                            <div class="area-conteudo-dgmpe area-conteudo-merchandising d-table positionAbsolute">
                                <div class="d-table-cell v-align-middle">
                                    <p class="conteudo-texto uppercase">&nbsp;Novidades para 2020 - novos MPDVs</p>
                                </div>
                            </div>

                            <div class="area-conteudo-dgmpe area-conteudo-preco positionAbsolute">
                                <div class="conteudo-dgmpe-preco d-table">
                                    <p class="d-table-cell v-align-middle">Rebaixa de preço nos principais clientes</p>
                                </div>
                                <div class="conteudo-dgmpe-preco-dir d-table">
                                    <p class="d-table-cell v-align-middle">Atenção a implementação da rebaixa (50% na 2 Unidade)</p>
                                </div>
                            </div>

                        </div>

                        <div data-layer-ir=".l1" class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute active-IR">
                            <p class="d-table-cell v-align-middle">REDES</p>
                        </div>
                        <div data-layer-ir=".l2" class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute">
                            <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                        </div>
                    </div>

                    <div data-layer-set=".DGMP" class="DGMP l2 layer">
                        <div class="areaHeroi positionAbsolute">
                            <div class="logo">
                                <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                            </div>
                            
                            <div class="area-icone-dgmpe area-icone-ditribuicao d-table">
                                <div class="d-table-cell v-align-middle">
                                    <img src="../../webroot/img/icones/decentralized.png"/>
                                    <p class="icone-texto">Distribuição</p>
                                </div>
                            </div>
                            <div class="area-icone-dgmpe area-icone-gondola d-table">
                                <div class="d-table-cell v-align-middle">
                                    <img src="../../webroot/img/icones/shelf.png"/>
                                    <p class="icone-texto">Gôndola</p>
                                </div>
                            </div>
                            <div class="area-icone-dgmpe area-icone-merchandising d-table">
                                <div class="d-table-cell v-align-middle">
                                    <img src="../../webroot/img/icones/shopping-cart.png"/>
                                    <p class="icone-texto">Merchandising</p>
                                </div>
                            </div>
                            <div class="area-icone-dgmpe area-icone-preco d-table">
                                <div class="d-table-cell v-align-middle">
                                    <img src="../../webroot/img/icones/tag.png"/>
                                    <p class="icone-texto">Preço</p>
                                </div>
                            </div>

                        </div>

                        <div class="conteudoDgmpe">

                            <div class="area-conteudo-dgmpe area-conteudo-ditribuicao d-table positionAbsolute">
                                <div class="d-table-cell v-align-middle">
                                    <p class="conteudo-texto uppercase">&nbsp;GARANTIR A PRESENÇA DE PURAN T4 - 14 APRESENTAÇÕES</p>
                                </div>
                            </div>

                            <div class="area-conteudo-dgmpe area-conteudo-gondola d-table positionAbsolute">
                                <div class="d-table-cell v-align-middle">
                                    <table class="table-conteudo-dgmpe">
                                        <tr>
                                            <th>Cluster</th>
                                        </tr>
                                        <tr>
                                            <td>CCO</td>
                                        </tr>
                                        <tr>
                                            <td>Regionais</td>
                                        </tr>
                                        <tr>
                                            <td>Distritais / Híbridas / Alimentar</td>
                                        </tr>
                                        <tr>
                                            <td>Associativismo / Independentes</td>
                                        </tr>
                                    </table>
                                    <table class="table-conteudo-dgmpe-vb">
                                        <tr>
                                            <th>VB</th>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                        </tr>
                                    </table>
                                    <div class="texto-conteudo-dgmpe-gondola d-table">
                                        <p class="d-table-cell v-align-middle">Garantir que respeitem o planograma</p>
                                    </div>
                                </div>
                            </div>

                            <div class="area-conteudo-dgmpe area-conteudo-merchandising d-table positionAbsolute">
                                <div class="d-table-cell v-align-middle">
                                    <p class="conteudo-texto uppercase">&nbsp;Novidades para 2020 - novos MPDVs</p>
                                </div>
                            </div>

                            <div class="area-conteudo-dgmpe area-conteudo-preco positionAbsolute">
                                <div class="conteudo-dgmpe-preco d-table">
                                    <p class="d-table-cell v-align-middle">Rebaixa de preço nos principais clientes</p>
                                </div>
                                <div class="conteudo-dgmpe-preco-dir d-table">
                                    <p class="d-table-cell v-align-middle">Atenção a implementação da rebaixa (50% na 2 Unidade)</p>
                                </div>
                            </div>
                        </div>

                        <div data-layer-ir=".l1" class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute">
                            <p class="d-table-cell v-align-middle">REDES</p>
                        </div>
                        <div data-layer-ir=".l2" class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute active-IR">
                            <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                        </div>
                    </div>

                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>