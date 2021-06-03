<?php require("../../listaSku/puranList.php") ?>

<div class="areaHeroi positionAbsolute">
    <div class="logo">
        <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
    </div>
    <img class="positionAbsolute" src="../../webroot/img/heroi/capitaoAmerica.png"/>
</div>

<?php for($pag = 0; $pag < $numero_de_paginas; $pag++): ?>
    <div data-layer-set=".SKU" class="SKU l<?= $index; ?> layer <?php if($index == 1){echo "show";} ?>">
        <div class="conteudoSku">
            <div class="linhaPack d-table">
                <div class="d-table-cell v-align-middle">
                    <img src="../../webroot/img/produtos/cronicos/<?php echo "$produto/$produto" ?>Sku-<?= $pag+1 ?>.png"/>
                </div>
            </div>
            <?php if($total_sku > 4){ ?>

                <div class="linhaTabela d-table">
                    <div class="d-table-cell v-align-middle">
                        <table class="table-ajuste col-table col-table-sku">
                            <tr>
                                <th>SKU</th>
                            </tr>
                            <?php for($linha = 0; $linha < 4; $linha++): ?>
                                <tr>
                                    <td><?= $list_sku[$sku]["DESCRICAO_SAP"] ?></td>
                                </tr>
                            <?php $sku++; endfor; ?>
                        </table>
                    </div>
                    <div class="d-table-cell v-align-middle">
                        <table class="table-ajuste col-table col-table-cod_comercial">
                            <tr>
                                <th>CÓD. COMERCIAL</th>
                            </tr>
                            <?php for($linha = 0; $linha < 4; $linha++): ?>
                                <tr>
                                    <td><?= $list_sku[$cod_comercial]["COD_COMERCIAL"] ?></td>
                                </tr>
                            <?php $cod_comercial++; endfor; ?>
                        </table>
                    </div>
                    <div class="d-table-cell v-align-middle">
                        <table class="table-ajuste col-table col-table-ean">
                            <tr>
                                <th>EAN</th>
                            </tr>
                            <?php for($linha = 0; $linha < 4; $linha++): ?>
                                <tr>
                                    <td><?= $list_sku[$ean]["EAN"] ?></td>
                                </tr>
                            <?php $ean++; endfor; ?>
                        </table>
                    </div>
                    <div class="d-table-cell v-align-middle">
                        <table class="table-ajuste col-table col-table-cx_embarque">
                            <tr>
                                <th>CX. EMBARQUE</th>
                            </tr>
                            <?php for($linha = 0; $linha < 4; $linha++): ?>
                                <tr>
                                    <td><?= $list_sku[$cx_embarque]["UNID_CAIXA"] ?></td>
                                </tr>
                            <?php $cx_embarque++; endfor; ?>
                        </table>
                    </div>
                </div>

            <?php $total_sku -= 4; } else { ?>

                <div class="linhaTabela d-table">
                    <div class="d-table-cell v-align-middle">
                        <table class="table-ajuste col-table col-table-sku">
                            <tr>
                                <th>SKU</th>
                            </tr>
                            <?php for($linha = 0; $linha < $total_sku; $linha++): ?>
                                <tr>
                                    <td><?= $list_sku[$sku]["DESCRICAO_SAP"] ?></td>
                                </tr>
                            <?php $sku++; endfor; ?>
                        </table>
                    </div>
                    <div class="d-table-cell v-align-middle">
                        <table class="table-ajuste col-table col-table-cod_comercial">
                            <tr>
                                <th>CÓD. COMERCIAL</th>
                            </tr>
                            <?php for($linha = 0; $linha < $total_sku; $linha++): ?>
                                <tr>
                                    <td><?= $list_sku[$cod_comercial]["COD_COMERCIAL"] ?></td>
                                </tr>
                            <?php $cod_comercial++; endfor; ?>
                        </table>
                    </div>
                    <div class="d-table-cell v-align-middle">
                        <table class="table-ajuste col-table col-table-ean">
                            <tr>
                                <th>EAN</th>
                            </tr>
                            <?php for($linha = 0; $linha < $total_sku; $linha++): ?>
                                <tr>
                                    <td><?= $list_sku[$ean]["EAN"] ?></td>
                                </tr>
                            <?php $ean++; endfor; ?>
                        </table>
                    </div>
                    <div class="d-table-cell v-align-middle">
                        <table class="table-ajuste col-table col-table-cx_embarque">
                            <tr>
                                <th>CX. EMBARQUE</th>
                            </tr>
                            <?php for($linha = 0; $linha < $total_sku; $linha++): ?>
                                <tr>
                                    <td><?= $list_sku[$cx_embarque]["UNID_CAIXA"] ?></td>
                                </tr>
                            <?php $cx_embarque++; endfor; ?>
                        </table>
                    </div>
                </div>

            <?php } ?>
        </div>
        <?php for($paginacao = 1; $paginacao <= $numero_de_paginas; $paginacao++): ?>
            <span data-layer=<?php $indice = (($numero_de_paginas - $paginacao)+1); echo ('".l'.$paginacao.'"') ?> 
                class="bts-layer-sku bt-layer-sku-<?php echo($indice." "); if($index == $paginacao){ echo"active"; } ?>"></span>
        <?php endfor; ?>
    </div>
<?php $index++; endfor; ?>

