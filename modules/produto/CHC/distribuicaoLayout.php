<?php require("../../listaDist/".$categoria."/".$produto.".php") ?>

<?php

$index = 1;
$sku = 0;
$cod_comercial = 0;
$ean = 0;
$cx_embarque = 0;
$numero_de_paginas = count($paginas);
$logo = $produto."Logo"; 


?>

<?php for($pag = 0; $pag < $numero_de_paginas; $pag++): ?>
    <div data-layer-set=".DIST"
        <?php 

            if($numero_de_paginas > 1){

                $skuSwipeNext = $index+1;
                $skuSwipeBack = $index-1;

                if($numero_de_paginas == 1){
                    
                    echo ("data-swipe-to-top='.l".$skuSwipeNext."'");
                }
                else if($numero_de_paginas > 1){
                    if($index == 1){
                        echo ("data-swipe-to-top='.l".$skuSwipeNext."'");
                    }
                    else if (($index > 1) && ($index < $numero_de_paginas)){
                        echo ("data-swipe-to-top='.l".$skuSwipeNext."'");
                        echo ("data-swipe-to-bottom='.l".$skuSwipeBack."'");
                    }
                    else if ($index == $numero_de_paginas){
                        echo ("data-swipe-to-bottom='.l".$skuSwipeBack."'");
                    }
                }
            }
             
          ?>
        class="DIST l<?= $index; ?> layer <?php if($index == 1){echo "show";} ?>"
    >
        

        <div class="conteudoSku">
            <div class="linhaPack-dist">
                <div class="d-table">
                    <div class="d-table-cell v-align-top paddingPack">
                        <p class="font-32 colorWhite">SORTIMENTO POR CANAL</p>
                    </div>
                </div>
            </div>

            <div class="linha-dist-content d-table">
                <div class="d-table-cell v-align-middle" style="width:360px">
                    <table class="table-ajuste-dist col-table-dist col-table-sku-dist">
                        <tr>
                            <th style="color: #53EFC9!important">SKUs</th>
                        </tr>
                        <?php for($linha = 0; $linha < $paginas[$pag]; $linha++): ?>
                            <?php 
                                if($paginas[$pag] == 4){$ajusteTableHeight = "height:65px"; $ajusteImgHeight = "height:59px";}
                                else if ($paginas[$pag] == 3){$ajusteTableHeight = "height:92px"; $ajusteImgHeight = "height:90px";}
                                else if ($paginas[$pag] == 2){$ajusteTableHeight = "height:130px"; $ajusteImgHeight = "height:128px";}
                                else if ($paginas[$pag] == 1){$ajusteTableHeight = "height:265px"; $ajusteImgHeight = "";}
                            ?>
                            <tr>
                                <td style="<?= $ajusteTableHeight ?>">
                                    <table class="table-visto">
                                        <tr>
                                            <td style="border-top:none;">
                                                <?php $imgindexDist = $sku+1; echo "<img style='$ajusteImgHeight' src='".$list_dist[$sku]["IMG"].$categoria."/".$produto."/".$produto."Dist-".$imgindexDist.".png'/>";?>
                                            </td>
                                            <td style="border-top:none; padding-left: 10px">
                                                <?=  "<p style='color:#53EFC9!important'>".$list_dist[$sku]["DESCRICAO_DIST"]."</p>" ?>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        <?php $sku++; endfor; ?>
                    </table>
                </div>
                <div class="d-table-cell v-align-middle" style="width:163px">
                    <table class="table-ajuste-dist col-table-dist col-table-cod_comercial-dist">
                        <tr>
                            <th>REDES</th>
                        </tr>
                        <?php for($linha = 0; $linha < $paginas[$pag]; $linha++): ?>
                            <tr>
                                <td style="<?= $ajusteTableHeight ?>"><?= "<img src='".$list_dist[$cod_comercial]["REDES"]."'/>"?></td>
                            </tr>
                        <?php $cod_comercial++; endfor; ?>
                    </table>
                </div>
                <div class="d-table-cell v-align-middle" style="width:163px">
                    <table class="table-ajuste-dist col-table-dist col-table-ean-dist">
                        <tr>
                            <th>INDEPENDENTES<br>VISITADO</th>
                        </tr>
                        <?php for($linha = 0; $linha < $paginas[$pag]; $linha++): ?>
                            <tr>
                                <td style="<?= $ajusteTableHeight ?>"><?= "<img src='".$list_dist[$ean]["INDEP_VISIT"]."'/>" ?></td>
                            </tr>
                        <?php $ean++; endfor; ?>
                    </table>
                </div>
                <div class="d-table-cell v-align-middle" style="width:163px">
                    <table class="table-ajuste-dist col-table-dist col-table-cx_embarque-dist" style="margin-right: 25px!important">
                        <tr>
                            <th>INDEPENDENTES<br>NÃO VISITADO</th>
                        </tr>
                        <?php for($linha = 0; $linha < $paginas[$pag]; $linha++): ?>
                            <tr>
                                <td style="<?= $ajusteTableHeight ?>"><?= "<img src='".$list_dist[$cx_embarque]["INDEP_NAO_VISIT"]."'/>" ?></td>
                            </tr>
                        <?php $cx_embarque++; endfor; ?>
                    </table>
                </div>
            </div>


        </div>
        <?php for($paginacao = 1; $paginacao <= $numero_de_paginas; $paginacao++): ?>
            <span data-layer=<?php $indice = (($numero_de_paginas - $paginacao)+1); echo ('".l'.$paginacao.'"') ?>
                class="bts-layer-sku bt-layer-sku-<?php echo($indice." "); if($index == $paginacao){ echo"active-".$categoria; } ?>"></span>
        <?php endfor; ?>
    </div>
<?php $index++; endfor; ?>

