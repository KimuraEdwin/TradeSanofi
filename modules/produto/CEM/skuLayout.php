<?php require("../../listaSku/".$categoria."/".$produto.".php") ?>

<?php

$index = 1;
$sku = 0;
$cod_comercial = 0;
$ean = 0;
$cx_embarque = 0;
$numero_de_paginas = count($paginas);
$logo = $produto."Logo"; 

?>

<?php 
    if($produto != 'profenid'){
        $sizeLogo = getimagesize("../../webroot/img/logo/".$categoria."/".$logo.".png");
        $proporcaoLogo = $sizeLogo[0]/$sizeLogo[1];
        $proporcaoGuia = 2.05;
        
        
        if(($sizeLogo[0] <= 119) && ($sizeLogo[1] <= 63)){
            $classLogo = "neutroLogo";
        }
        else if($proporcaoLogo > $proporcaoGuia){
            $classLogo = "horizontalLogo";
        }
        else if($proporcaoLogo < $proporcaoGuia){
            $classLogo = "verticalLogo";
        }

        skuLogo($classLogo,$categoria,$produto,$heroi,$logo);
    } 
?>

<?php for($pag = 0; $pag < $numero_de_paginas; $pag++): ?>
    <div data-layer-set=".SKU"
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
         class="SKU l<?= $index; ?> layer <?php if($index == 1){echo "show";} ?>">
        <?php 
            if($produto == 'profenid'){
                $logo = $produto."Logo"; 
                $logo = $logo."-".$index;

                $sizeLogo = getimagesize("../../webroot/img/logo/".$categoria."/".$logo.".png");
                $proporcaoLogo = $sizeLogo[0]/$sizeLogo[1];
                $proporcaoGuia = 2.05;


                if(($sizeLogo[0] <= 119) && ($sizeLogo[1] <= 63)){
                    $classLogo = "neutroLogo";
                }
                else if($proporcaoLogo > $proporcaoGuia){
                    $classLogo = "horizontalLogo";
                }
                else if($proporcaoLogo < $proporcaoGuia){
                    $classLogo = "verticalLogo";
                }

                skuLogo($classLogo,$categoria,$produto,$heroi,$logo);
            } 
        ?>
        <div class="conteudoSku">
            <div class="linhaPack">
                <div class="linhaPackCenter d-table">
                    <div class="d-table-cell v-align-top paddingPack">
                        <?php 
                            $sizeSku = getimagesize("../../webroot/img/produtos/".$categoria."/".$produto."/".$produto."Sku-".$index.".png");
                            if(($sizeSku[0] <= 757) && ($sizeSku[1] <= 237)){
                                $classAjusteSku = 'oi';
                            }
                            else if(($sizeSku[0] > 757) && ($sizeSku[1] > 237)){
                                $proporcaoSku = $sizeSku[0]/$sizeSku[1];
                                $proporcaoSkuCalculo = ((100*3.27)/$proporcaoSku)/100;
                                if($proporcaoSkuCalculo > 1){
                                    $proporcaoSkuCalculo = $proporcaoSkuCalculo-1;
                                    $proporcaoSkuCalculo = 1-$proporcaoSkuCalculo;
                                }
                                $classAjusteSku = 'style="transform:scale('.$proporcaoSkuCalculo.')"';
                            }
                            else if($sizeSku[0] > 757){
                                $classAjusteSku = 'class="skuAjusteHorizontal"';
                            }
                            else if ($sizeSku[1] > 237){
                                $classAjusteSku = '';
                            }
                        ?>
                        <img <?= $classAjusteSku; ?> src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Sku-<?= $pag+1 ?>.png"/>

                    </div>
                </div>
            </div>

            <div class="linhaTabela d-table">
                <p class="funcaoSku uppercase positionAbsolute font-16"><?php echo $list_sku[0]["FUNCAO"] ?></p>
                <div class="d-table-cell v-align-middle">
                    <table class="table-ajuste col-table col-table-sku">
                        <tr>
                            <th>SKU</th>
                        </tr>
                        <?php for($linha = 0; $linha < $paginas[$pag]; $linha++): ?>
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
                        <?php for($linha = 0; $linha < $paginas[$pag]; $linha++): ?>
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
                        <?php for($linha = 0; $linha < $paginas[$pag]; $linha++): ?>
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
                        <?php for($linha = 0; $linha < $paginas[$pag]; $linha++): ?>
                            <tr>
                                <td><?= $list_sku[$cx_embarque]["UNID_CAIXA"] ?></td>
                            </tr>
                        <?php $cx_embarque++; endfor; ?>
                    </table>
                </div>
            </div>


        </div>
        <?php for($paginacao = 1; $paginacao <= $numero_de_paginas; $paginacao++): ?>
            <span data-layer=<?php $indice = (($numero_de_paginas - $paginacao)+1); echo ('".l'.$paginacao.'"') ?>
                class="bts-layer-sku bt-layer-sku-<?php echo($indice." "); if($index == $paginacao){ echo"active"; } ?>"></span>
        <?php endfor; ?>
    </div>
<?php $index++; endfor; ?>

