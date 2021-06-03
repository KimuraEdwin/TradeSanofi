<?php 

include("../../../modules/funcoesModulo.php"); 

$menuActive = "";

?>

<!DOCTYPE html>
<html>
    <head>
        <?php head(); ?>
    </head>
    <body>
        <div id="bg" class="stage">
            <?php navBarCHC($menuActive) ?>

            <div class="bg-active-glo-search" style="top: 0px;z-index:3">
                <a href="../../comandos/layout/index.php">
                    <div class="btn-lupa-menu"  style="top: unset!important">
                        <img class="positionAbsolute iconeHome" src="../../webroot/img/icones/home.png"/>
                    </div>
                </a>
            </div>

            <div class="box-titulo-comandos positionAbsolute">
                <p class="comandosMesTitulo font-32 colorWhite margin-texto margin-left-texto positionAbsolute">COMANDOS DO MÊS</p>
            </div>

            <div class="quadro-comandos positionAbsolute">

                <div data-layer-set=".COMANDOSMES" class="COMANDOSMES l-tqt layer show">
                    
                    <div data-layer=".l-tqt" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-1 margin-texto d-table positionAbsolute active-menugondola-tqt">
                        <p class="d-table-cell v-align-middle">TEM QUE TER</p>
                    </div>
                    <div data-layer=".l-octoberfast" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-2 margin-texto d-table positionAbsolute">
                        <p class="d-table-cell v-align-middle">BLACK NOVEMBER</p>
                    </div>
                    <!-- <div data-layer=".l-marca" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-2 margin-texto d-table positionAbsolute">
                        <p class="d-table-cell v-align-middle">MARCAS FOCO</p>
                    </div>
                    <div data-layer=".l-promopacks" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-3 margin-texto d-table positionAbsolute ">
                        <p class="d-table-cell v-align-middle">PROMOPACKS</p>
                    </div>
                    <div data-layer=".l-midias" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-4 margin-texto d-table positionAbsolute">
                        <p class="d-table-cell v-align-middle">MÍDIAS</p>
                    </div>
                    <div data-layer=".l-estra" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-5 margin-texto d-table positionAbsolute ">
                        <p class="d-table-cell v-align-middle">ESTRATÉGIAS</p>
                    </div>
                    <div data-layer=".l-lanc" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-6 margin-texto d-table positionAbsolute" style="width: 105px;">
                        <p class="d-table-cell v-align-middle" style="font-size: 8px!important">SITUAÇÃO LANÇAMENTOS</p>
                    </div> -->

                    <div data-layer-set=".COMANDOSGASTRO" class="COMANDOSGASTRO gastro-1 layer show">
                        <div class="box-comandos-novo positionAbsolute text-center" style="right:0px">
                            <img src="../../webroot/img/comandos/tqt/tqt.png"/>
                        </div>
                    </div>
                    
                    
                </div>

                <div data-layer-set=".COMANDOSMES" class="COMANDOSMES l-octoberfast layer">

                    <div data-layer=".l-tqt" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-1 margin-texto d-table positionAbsolute ">
                        <p class="d-table-cell v-align-middle">TEM QUE TER</p>
                    </div>
                    <div data-layer=".l-octoberfast" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-2 margin-texto d-table positionAbsolute active-menugondola-tqt">
                        <p class="d-table-cell v-align-middle">BLACK NOVEMBER</p>
                    </div>


                    <div data-layer-set=".COMANDOSMESOCTOBER" class="COMANDOSMESOCTOBER l1 layer show">

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-4 active-menugondola-tqt"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-1"></span>
                    
                        <div class="box-comandos-novo positionAbsolute">
                            <img src="../../webroot/img/comandos/octoberfast/october1.png"/>
                        </div>  
                              
                    </div>  
                              
                    <div data-layer-set=".COMANDOSMESOCTOBER" class="COMANDOSMESOCTOBER l2 layer">

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-3 active-menugondola-tqt"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-1"></span>
                    
                        <div class="box-comandos-novo positionAbsolute">
                            <img src="../../webroot/img/comandos/octoberfast/october2.png"/>
                        </div>  
                              
                    </div>            

                    <div data-layer-set=".COMANDOSMESOCTOBER" class="COMANDOSMESOCTOBER l3 layer">

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-2 active-menugondola-tqt"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-1"></span>
                    
                        <div class="box-comandos-novo positionAbsolute">
                            <img src="../../webroot/img/comandos/octoberfast/october3.png"/>
                        </div>  
                              
                    </div>    

                    <div data-layer-set=".COMANDOSMESOCTOBER" class="COMANDOSMESOCTOBER l4 layer">

                        <span data-layer=".l1" class="bts-layer-sku bt-layer-sku-4"></span>
                        <span data-layer=".l2" class="bts-layer-sku bt-layer-sku-3"></span>
                        <span data-layer=".l3" class="bts-layer-sku bt-layer-sku-2"></span>
                        <span data-layer=".l4" class="bts-layer-sku bt-layer-sku-1 active-menugondola-tqt"></span>
                    
                        <div class="box-comandos-novo positionAbsolute">
                            <img src="../../webroot/img/comandos/octoberfast/october4.png"/>
                        </div>  
                              
                    </div>            
                    
                </div>

                <div data-layer-set=".COMANDOSMES" class="COMANDOSMES l-marca layer">
                    
                    <div data-layer=".l-tqt" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-1 margin-texto d-table positionAbsolute ">
                        <p class="d-table-cell v-align-middle">TEM QUE TER</p>
                    </div>
                    <div data-layer=".l-marca" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-2 margin-texto d-table positionAbsolute active-menugondola-tqt">
                        <p class="d-table-cell v-align-middle">MARCAS FOCO</p>
                    </div>
                    <div data-layer=".l-promopacks" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-3 margin-texto d-table positionAbsolute ">
                        <p class="d-table-cell v-align-middle">PROMOPACKS</p>
                    </div>
                    <div data-layer=".l-midias" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-4 margin-texto d-table positionAbsolute">
                        <p class="d-table-cell v-align-middle">MÍDIAS</p>
                    </div>
                    <div data-layer=".l-estra" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-5 margin-texto d-table positionAbsolute ">
                        <p class="d-table-cell v-align-middle">ESTRATÉGIAS</p>
                    </div>
                    <div data-layer=".l-lanc" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-6 margin-texto d-table positionAbsolute" style="width: 105px;">
                        <p class="d-table-cell v-align-middle" style="font-size: 8px!important">SITUAÇÃO LANÇAMENTOS</p>
                    </div>

                    <div class="box-comandos-novo positionAbsolute">
                        <img src="../../webroot/img/comandos/geral/comandos1.png"/>
                    </div>                    
                    
                </div>

                <div data-layer-set=".COMANDOSMES" class="COMANDOSMES l-promopacks layer">
                    
                    <div data-layer=".l-tqt" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-1 margin-texto d-table positionAbsolute ">
                        <p class="d-table-cell v-align-middle">TEM QUE TER</p>
                    </div>
                    <div data-layer=".l-marca" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-2 margin-texto d-table positionAbsolute">
                        <p class="d-table-cell v-align-middle">MARCAS FOCO</p>
                    </div>
                    <div data-layer=".l-promopacks" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-3 margin-texto d-table positionAbsolute active-menugondola-tqt">
                        <p class="d-table-cell v-align-middle">PROMOPACKS</p>
                    </div>
                    <div data-layer=".l-midias" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-4 margin-texto d-table positionAbsolute">
                        <p class="d-table-cell v-align-middle">MÍDIAS</p>
                    </div>
                    <div data-layer=".l-estra" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-5 margin-texto d-table positionAbsolute ">
                        <p class="d-table-cell v-align-middle">ESTRATÉGIAS</p>
                    </div>
                    <div data-layer=".l-lanc" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-6 margin-texto d-table positionAbsolute" style="width: 105px;">
                        <p class="d-table-cell v-align-middle" style="font-size: 8px!important">SITUAÇÃO LANÇAMENTOS</p>
                    </div>

                    <div class="box-comandos-novo positionAbsolute">
                        <img src="../../webroot/img/comandos/geral/comandos2.png"/>
                    </div>  
                    
                    
                </div>

                <div data-layer-set=".COMANDOSMES" class="COMANDOSMES l-midias layer">
                    
                    <div data-layer=".l-tqt" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-1 margin-texto d-table positionAbsolute ">
                        <p class="d-table-cell v-align-middle">TEM QUE TER</p>
                    </div>
                    <div data-layer=".l-marca" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-2 margin-texto d-table positionAbsolute">
                        <p class="d-table-cell v-align-middle">MARCAS FOCO</p>
                    </div>
                    <div data-layer=".l-promopacks" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-3 margin-texto d-table positionAbsolute ">
                        <p class="d-table-cell v-align-middle">PROMOPACKS</p>
                    </div>
                    <div data-layer=".l-midias" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-4 margin-texto d-table positionAbsolute active-menugondola-tqt">
                        <p class="d-table-cell v-align-middle">MÍDIAS</p>
                    </div>
                    <div data-layer=".l-estra" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-5 margin-texto d-table positionAbsolute ">
                        <p class="d-table-cell v-align-middle">ESTRATÉGIAS</p>
                    </div>
                    <div data-layer=".l-lanc" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-6 margin-texto d-table positionAbsolute" style="width: 105px;">
                        <p class="d-table-cell v-align-middle" style="font-size: 8px!important">SITUAÇÃO LANÇAMENTOS</p>
                    </div>

                    <div class="box-comandos-novo positionAbsolute">
                        <img src="../../webroot/img/comandos/geral/comandos3.png"/>
                    </div>  
                    
                    
                </div>

                <div data-layer-set=".COMANDOSMES" class="COMANDOSMES l-estra layer">
                    
                    <div data-layer=".l-tqt" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-1 margin-texto d-table positionAbsolute">
                        <p class="d-table-cell v-align-middle">TEM QUE TER</p>
                    </div>
                    <div data-layer=".l-marca" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-2 margin-texto d-table positionAbsolute">
                        <p class="d-table-cell v-align-middle">MARCAS FOCO</p>
                    </div>
                    <div data-layer=".l-promopacks" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-3 margin-texto d-table positionAbsolute ">
                        <p class="d-table-cell v-align-middle">PROMOPACKS</p>
                    </div>
                    <div data-layer=".l-midias" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-4 margin-texto d-table positionAbsolute">
                        <p class="d-table-cell v-align-middle">MÍDIAS</p>
                    </div>
                    <div data-layer=".l-estra" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-5 margin-texto d-table positionAbsolute active-menugondola-tqt">
                        <p class="d-table-cell v-align-middle">ESTRATÉGIAS</p>
                    </div>
                    <div data-layer=".l-lanc" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-6 margin-texto d-table positionAbsolute" style="width: 105px;">
                        <p class="d-table-cell v-align-middle" style="font-size: 8px!important">SITUAÇÃO LANÇAMENTOS</p>
                    </div>

                    <div class="box-comandos-novo positionAbsolute" style="margin-left: -15px">
                        <img src="../../webroot/img/comandos/geral/comandos4.png"/>
                    </div>  
                    
                </div>

                <div data-layer-set=".COMANDOSMES" class="COMANDOSMES l-lanc layer">
                    
                    <div data-layer=".l-tqt" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-1 margin-texto d-table positionAbsolute">
                        <p class="d-table-cell v-align-middle">TEM QUE TER</p>
                    </div>
                    <div data-layer=".l-marca" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-2 margin-texto d-table positionAbsolute">
                        <p class="d-table-cell v-align-middle">MARCAS FOCO</p>
                    </div>
                    <div data-layer=".l-promopacks" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-3 margin-texto d-table positionAbsolute ">
                        <p class="d-table-cell v-align-middle">PROMOPACKS</p>
                    </div>
                    <div data-layer=".l-midias" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-4 margin-texto d-table positionAbsolute">
                        <p class="d-table-cell v-align-middle">MÍDIAS</p>
                    </div>
                    <div data-layer=".l-estra" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-5 margin-texto d-table positionAbsolute ">
                        <p class="d-table-cell v-align-middle">ESTRATÉGIAS</p>
                    </div>
                    <div data-layer=".l-lanc" class="btn-padrao-submenu btn-acesso-geral btn-submenu-geral btn-submenu-6 margin-texto d-table positionAbsolute active-menugondola-tqt" style="width: 105px;">
                        <p class="d-table-cell v-align-middle" style="font-size: 8px!important">SITUAÇÃO LANÇAMENTOS</p>
                    </div>

                    <div class="box-comandos-novo positionAbsolute">
                        <img src="../../webroot/img/comandos/geral/comandos5.png"/>
                    </div>  
                    
                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>