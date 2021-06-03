<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "vitamedley";
$produto = "vitamedley";
$heroi = "genericos";
$paginas = [1,1];
$guiaMenu = ['sku', 'dgmpe', 'educacao'];

?>

<?php 
    if($produto == 'profenid'){
        $sizeLogo = getimagesize("../../webroot/img/logo/".$categoria."/".$produto."Logo-2.png");
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
    } 
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

                        <div data-layer-set=".IR" class="IR redes1 layer show">

                            <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/redes/$produto" ?>Dgmpe-1.png" style="z-index:1;top:30px;left:17px">

                            <div class="areaHeroi positionAbsolute">
                                <div class="logo d-table">
                                    <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                        <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="conteudoDgmpe">
                            </div>

                            <div class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute active-IR" data-ir=".redes1">
                                <p class="d-table-cell v-align-middle">REDES</p>
                            </div>
                            <div class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute" data-ir=".indep1">
                                <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                            </div>

                        </div>

                        <div data-layer-set=".IR" class="IR indep1 layer">

                            <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/independentes/$produto" ?>Dgmpe-1.png" style="z-index:1;top:30px;left:17px">

                            <div class="areaHeroi positionAbsolute">
                                <div class="logo d-table">
                                    <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                        <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="conteudoDgmpe">
                            </div>

                            <div class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute" data-ir=".redes1">
                                <p class="d-table-cell v-align-middle">REDES</p>
                            </div>
                            <div class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute active-IR" data-ir=".indep1">
                                <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                            </div>

                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-7 active"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-6"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l6" class="bts-layer-sku bt-layer-sku-2 "></span>
                        <span data-layer=".l7" class="bts-layer-sku bt-layer-sku-1"></span>

                    </div>

                    <div data-layer-set=".DGMP" class="DGMP l2 layer">

                        <div data-layer-set=".IR2" class="IR2 redes2 layer show">

                            <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/redes/$produto" ?>Dgmpe-2.png" style="z-index:1;top:30px;left:17px">

                            <div class="areaHeroi positionAbsolute">
                                <div class="logo d-table">
                                    <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                        <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="conteudoDgmpe">
                            </div>

                            <div class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute active-IR" data-ir=".redes2">
                                <p class="d-table-cell v-align-middle">REDES</p>
                            </div>
                            <div class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute" data-ir=".indep2">
                                <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                            </div>

                        </div>

                        <div data-layer-set=".IR2" class="IR2 indep2 layer">

                            <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/independentes/$produto" ?>Dgmpe-2.png" style="z-index:1;top:30px;left:17px">

                            <div class="areaHeroi positionAbsolute">
                                <div class="logo d-table">
                                    <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                        <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="conteudoDgmpe">
                            </div>

                            <div class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute" data-ir=".redes2">
                                <p class="d-table-cell v-align-middle">REDES</p>
                            </div>
                            <div class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute active-IR" data-ir=".indep2">
                                <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                            </div>

                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-7"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-6 active"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l6" class="bts-layer-sku bt-layer-sku-2 "></span>
                        <span data-layer=".l7" class="bts-layer-sku bt-layer-sku-1"></span>

                    </div>

                    <div data-layer-set=".DGMP" class="DGMP l3 layer">

                        <div data-layer-set=".IR3" class="IR3 redes3 layer show">

                            <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/redes/$produto" ?>Dgmpe-3.png" style="z-index:1;top:30px;left:17px">

                            <div class="areaHeroi positionAbsolute">
                                <div class="logo d-table">
                                    <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                        <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="conteudoDgmpe">
                            </div>

                            <div class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute active-IR" data-ir=".redes3">
                                <p class="d-table-cell v-align-middle">REDES</p>
                            </div>
                            <div class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute" data-ir=".indep3">
                                <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                            </div>

                        </div>

                        <div data-layer-set=".IR3" class="IR3 indep3 layer">

                            <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/independentes/$produto" ?>Dgmpe-3.png" style="z-index:1;top:30px;left:17px">

                            <div class="areaHeroi positionAbsolute">
                                <div class="logo d-table">
                                    <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                        <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="conteudoDgmpe">
                            </div>

                            <div class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute" data-ir=".redes3">
                                <p class="d-table-cell v-align-middle">REDES</p>
                            </div>
                            <div class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute active-IR" data-ir=".indep3">
                                <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                            </div>

                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-7"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-6"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-5 active"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l6" class="bts-layer-sku bt-layer-sku-2 "></span>
                        <span data-layer=".l7" class="bts-layer-sku bt-layer-sku-1"></span>

                    </div>

                    <div data-layer-set=".DGMP" class="DGMP l4 layer">

                        <div data-layer-set=".IR4" class="IR4 redes4 layer show">

                            <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/redes/$produto" ?>Dgmpe-4.png" style="z-index:1;top:30px;left:17px">

                            <div class="areaHeroi positionAbsolute">
                                <div class="logo d-table">
                                    <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                        <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="conteudoDgmpe">
                            </div>

                            <div class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute active-IR" data-ir=".redes4">
                                <p class="d-table-cell v-align-middle">REDES</p>
                            </div>
                            <div class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute" data-ir=".indep4">
                                <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                            </div>

                        </div>

                        <div data-layer-set=".IR4" class="IR4 indep4 layer">

                            <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/independentes/$produto" ?>Dgmpe-4.png" style="z-index:1;top:30px;left:17px">

                            <div class="areaHeroi positionAbsolute">
                                <div class="logo d-table">
                                    <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                        <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="conteudoDgmpe">
                            </div>

                            <div class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute" data-ir=".redes4">
                                <p class="d-table-cell v-align-middle">REDES</p>
                            </div>
                            <div class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute active-IR" data-ir=".indep4">
                                <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                            </div>

                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-7"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-6"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-4 active"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l6" class="bts-layer-sku bt-layer-sku-2 "></span>
                        <span data-layer=".l7" class="bts-layer-sku bt-layer-sku-1"></span>

                    </div>

                    <div data-layer-set=".DGMP" class="DGMP l5 layer">

                        <div data-layer-set=".IR5" class="IR5 redes5 layer show">

                            <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/redes/$produto" ?>Dgmpe-5.png" style="z-index:1;top:30px;left:17px">

                            <div class="areaHeroi positionAbsolute">
                                <div class="logo d-table">
                                    <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                        <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="conteudoDgmpe">
                            </div>

                            <div class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute active-IR" data-ir=".redes5">
                                <p class="d-table-cell v-align-middle">REDES</p>
                            </div>
                            <div class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute" data-ir=".indep5">
                                <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                            </div>

                        </div>

                        <div data-layer-set=".IR5" class="IR5 indep5 layer">

                            <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/independentes/$produto" ?>Dgmpe-5.png" style="z-index:1;top:30px;left:17px">

                            <div class="areaHeroi positionAbsolute">
                                <div class="logo d-table">
                                    <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                        <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="conteudoDgmpe">
                            </div>

                            <div class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute" data-ir=".redes5">
                                <p class="d-table-cell v-align-middle">REDES</p>
                            </div>
                            <div class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute active-IR" data-ir=".indep5">
                                <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                            </div>

                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-7"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-6"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-3 active"></span>
                        <span data-layer=".l6" class="bts-layer-sku bt-layer-sku-2 "></span>
                        <span data-layer=".l7" class="bts-layer-sku bt-layer-sku-1"></span>

                    </div>

                    <div data-layer-set=".DGMP" class="DGMP l6 layer">

                        <div data-layer-set=".IR6" class="IR6 redes6 layer show">

                            <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/redes/$produto" ?>Dgmpe-6.png" style="z-index:1;top:30px;left:17px">

                            <div class="areaHeroi positionAbsolute">
                                <div class="logo d-table">
                                    <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                        <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="conteudoDgmpe">
                            </div>

                            <div class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute active-IR" data-ir=".redes6">
                                <p class="d-table-cell v-align-middle">REDES</p>
                            </div>
                            <div class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute" data-ir=".indep6">
                                <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                            </div>

                        </div>

                        <div data-layer-set=".IR6" class="IR6 indep6 layer">

                            <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/independentes/$produto" ?>Dgmpe-6.png" style="z-index:1;top:30px;left:17px">

                            <div class="areaHeroi positionAbsolute">
                                <div class="logo d-table">
                                    <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                        <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="conteudoDgmpe">
                            </div>

                            <div class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute" data-ir=".redes6">
                                <p class="d-table-cell v-align-middle">REDES</p>
                            </div>
                            <div class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute active-IR" data-ir=".indep6">
                                <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                            </div>

                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-7"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-6"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l6" class="bts-layer-sku bt-layer-sku-2 active"></span>
                        <span data-layer=".l7" class="bts-layer-sku bt-layer-sku-1"></span>

                    </div>

                    <div data-layer-set=".DGMP" class="DGMP l7 layer">

                        <div data-layer-set=".IR7" class="IR7 redes7 layer show">

                            <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/redes/$produto" ?>Dgmpe-7.png" style="z-index:1;top:30px;left:17px">

                            <div class="areaHeroi positionAbsolute">
                                <div class="logo d-table">
                                    <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                        <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="conteudoDgmpe">
                            </div>

                            <div class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute active-IR" data-ir=".redes7">
                                <p class="d-table-cell v-align-middle">REDES</p>
                            </div>
                            <div class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute" data-ir=".indep7">
                                <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                            </div>

                        </div>

                        <div data-layer-set=".IR7" class="IR7 indep7 layer">

                            <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/independentes/$produto" ?>Dgmpe-7.png" style="z-index:1;top:30px;left:17px">

                            <div class="areaHeroi positionAbsolute">
                                <div class="logo d-table">
                                    <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                        <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="conteudoDgmpe">
                            </div>

                            <div class="btn-padrao btn-acesso-geral btn-redes d-table positionAbsolute" data-ir=".redes7">
                                <p class="d-table-cell v-align-middle">REDES</p>
                            </div>
                            <div class="btn-padrao btn-acesso-geral btn-independentes d-table positionAbsolute active-IR" data-ir=".indep7">
                                <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                            </div>

                        </div>

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-7"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-6"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-5"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l5" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l6" class="bts-layer-sku bt-layer-sku-2 "></span>
                        <span data-layer=".l7" class="bts-layer-sku bt-layer-sku-1 active"></span>

                    </div>
                </div>

                <div class="content-page educacao">

                    <div data-layer-set=".EDUCACAO" class="EDUCACAO ledu1 layer show">

                        <span data-layer=".ledu1" class="bts-layer-sku bt-layer-sku-3 active"></span>
                        <span data-layer=".ledu2" class="bts-layer-sku bt-layer-sku-2 "></span>
                        <span data-layer=".ledu3" class="bts-layer-sku bt-layer-sku-1"></span>

                        <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Educacao-1.png" style="z-index:1;top:20px;left:3px">
                    
                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                    <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                </div>
                            </div>
                        </div>

                        <div class="conteudoDgmpe">
                        </div>
                    </div>
                    <div data-layer-set=".EDUCACAO" class="EDUCACAO ledu2 layer">

                        <span data-layer=".ledu1" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".ledu2" class="bts-layer-sku bt-layer-sku-2 active"></span>
                        <span data-layer=".ledu3" class="bts-layer-sku bt-layer-sku-1"></span>

                        <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Educacao-2.png" style="z-index:1;top:20px;left:1px">
                    
                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                    <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                </div>
                            </div>
                        </div>

                        <div class="conteudoDgmpe">
                        </div>
                    </div>
                    <div data-layer-set=".EDUCACAO" class="EDUCACAO ledu3 layer">

                        <span data-layer=".ledu1" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".ledu2" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".ledu3" class="bts-layer-sku bt-layer-sku-1 active"></span>

                        <img class="positionAbsolute" src="../../webroot/img/produtos/<?php echo "$categoria/$produto/$produto" ?>Educacao-3.png" style="z-index:1;top:30px;left:2px">
                    
                        <div class="areaHeroi positionAbsolute">
                            <div class="logo d-table">
                                <div class="<?= $classLogo ?> logoCenter d-table-cell v-align-middle">
                                    <img src="../../webroot/img/logo/<?php echo "$categoria/$produto" ?>Logo.png"/>
                                </div>
                            </div>
                        </div>

                        <div class="conteudoDgmpe">
                        </div>
                    </div>
                </div>


            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>