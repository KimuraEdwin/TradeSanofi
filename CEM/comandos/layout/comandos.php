<?php 

include("../../../modules/funcoesModulo.php"); 

?>



<!DOCTYPE html>
<html>
    <head>
        <?php head(); ?>
    </head>
    <body>
        <div id="bg" class="stage">
            <?php navBar() ?>

            <div class="box-titulo-comandos positionAbsolute">
                <p class="text-center colorWhite font-16">
                    BEM-VINDOS, QUE 2020 SEJA UM ANO DE INÚMERAS CONQUISTAS!<br>
                    Aqui você encontrará as estratégias das marcas e DGMPE dos produtos para auxiliá-lo em uma execução impecável.
                </p>
            </div>

            <div class="quadro-comandos quadro-border positionAbsolute">

                <div data-layer-set=".REDESINDEP" class="REDESINDEP l-redes layer show">
                    <p class="comandosMesTitulo font-24 margin-texto margin-left-texto positionAbsolute">COMANDOS DO MÊS</p>
                    <div data-layer=".l-redes" class="btn-padrao btn-acesso-geral btn-comandos-redes margin-texto d-table positionAbsolute active-side">
                        <p class="d-table-cell v-align-middle">REDES</p>
                    </div>
                    <div data-layer=".l-indep" class="btn-padrao btn-acesso-geral btn-comandos-independentes margin-texto d-table positionAbsolute">
                        <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                    </div>

                    <img class="positionAbsolute" src="../../webroot/img/comandos/redes/comandos.png" style="top: 50px;left:0px;right:0px">

                    <!--div class="areaConteudoComandos text-center d-inline-block">
                        <div class="box-comandos-lateral d-inline-block">
                            <div class="header-box-comandos header-bg-degrade positionRelative d-table">
                                <p class="font-12 positionAbsolute centralizar-texto colorWhite">LANÇAMENTOS</p>
                            </div>
                            <img src="../../webroot/img/comandos/redes/comandos-1.png">
                        </div>
                        <div class="box-comandos-central d-inline-block">
                            <div class="header-box-comandos header-bg positionRelative d-table">
                                <p class="font-12 positionAbsolute centralizar-texto colorWhite">ABASTECIMENTO</p>
                            </div>
                            <img src="../../webroot/img/comandos/redes/comandos-2.png">
                        </div>
                        <div class="box-comandos-central d-inline-block">
                            <div class="header-box-comandos header-bg positionRelative d-table">
                                <p class="font-12 positionAbsolute centralizar-texto colorWhite">REBAIXA DE PREÇOS</p>
                            </div>
                            <img src="../../webroot/img/comandos/redes/comandos-3.png">
                        </div>
                        <div class="box-comandos-central d-inline-block">
                            <div class="header-box-comandos header-bg positionRelative d-table">
                                <p class="font-12 positionAbsolute centralizar-texto colorWhite">CAMPANHAS</p>
                            </div>
                            <img src="../../webroot/img/comandos/redes/comandos-4.png">
                        </div>
                        <div class="box-comandos-central d-inline-block">
                            <div class="header-box-comandos header-bg positionRelative d-table">
                                <p class="font-12 positionAbsolute centralizar-texto colorWhite">PROGRAMA VIVA</p>
                            </div>
                            <img src="../../webroot/img/comandos/redes/comandos-5.png">
                        </div>
                        <div class="box-comandos-lateral d-inline-block">
                            <div class="header-box-comandos header-bg-degrade positionRelative d-table">
                                <p class="font-12 positionAbsolute centralizar-texto colorWhite">DESCONTOS PROGRESSIVOS</p>
                            </div>
                            <img src="../../webroot/img/comandos/redes/comandos-6.png">
                        </div>
                    </div-->
                </div>

                <div data-layer-set=".REDESINDEP" class="REDESINDEP l-indep layer">
                    <p class="comandosMesTitulo font-24 margin-texto margin-left-texto positionAbsolute">COMANDOS DO MÊS</p>
                    <div data-layer=".l-redes" class="btn-padrao btn-acesso-geral btn-comandos-redes margin-texto d-table positionAbsolute">
                        <p class="d-table-cell v-align-middle">REDES</p>
                    </div>
                    <div data-layer=".l-indep" class="btn-padrao btn-acesso-geral btn-comandos-independentes margin-texto d-table positionAbsolute active-side">
                        <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                    </div>

                    <img class="positionAbsolute" src="../../webroot/img/comandos/indep/comandos.png" style="top: 50px;left:0px;right:0px">

                    <!--div class="areaConteudoComandos text-center d-inline-block">
                        <div class="box-comandos-lateral d-inline-block">
                            <div class="header-box-comandos header-bg-degrade positionRelative d-table">
                                <p class="font-12 positionAbsolute centralizar-texto colorWhite">LANÇAMENTOS</p>
                            </div>
                            <img src="../../webroot/img/comandos/indep/comandos-1.png">
                        </div>
                        <div class="box-comandos-central d-inline-block">
                            <div class="header-box-comandos header-bg positionRelative d-table">
                                <p class="font-12 positionAbsolute centralizar-texto colorWhite">ABASTECIMENTO</p>
                            </div>
                            <img src="../../webroot/img/comandos/indep/comandos-2.png">
                        </div>
                        <div class="box-comandos-central d-inline-block">
                            <div class="header-box-comandos header-bg positionRelative d-table">
                                <p class="font-12 positionAbsolute centralizar-texto colorWhite">PREÇOS</p>
                            </div>
                            <img src="../../webroot/img/comandos/indep/comandos-3.png">
                        </div>
                        <div class="box-comandos-central d-inline-block">
                            <div class="header-box-comandos header-bg positionRelative d-table">
                                <p class="font-12 positionAbsolute centralizar-texto colorWhite">CAMPANHAS</p>
                            </div>
                            <img src="../../webroot/img/comandos/indep/comandos-4.png">
                        </div>
                        <div class="box-comandos-central d-inline-block">
                            <div class="header-box-comandos header-bg positionRelative d-table">
                                <p class="font-12 positionAbsolute centralizar-texto colorWhite">PROGRAMA VIVA</p>
                            </div>
                            <img src="../../webroot/img/comandos/indep/comandos-5.png">
                        </div>
                        <div class="box-comandos-lateral d-inline-block">
                            <div class="header-box-comandos header-bg-degrade positionRelative d-table">
                                <p class="font-12 positionAbsolute centralizar-texto colorWhite">ACELERADOR</p>
                            </div>
                            <img src="../../webroot/img/comandos/indep/comandos-6.png">
                        </div>
                    </div-->
                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>