<?php 

include("../../../modules/funcoesModulo.php"); 

?>

<!DOCTYPE html>
<html>
    <head>
        <?php head(); ?>
        
    </head>
    <body>
        <div id="bg-menu" class="stage">
            <?php headerDefault(); ?>

            <div class="conteudoMM">
                <div class="areaCtrConteudoMM positionAbsolute d-table">
                    <div class="areaConteudoPV d-table-cell v-align-middle">
                        <div class="quadroPV">

                            <button class="positionAbsolute" id="btn-pesquisa-st" style="top: 22px; left:153px; border:unset; border-right: 1px solid white; ">
                                <img src="../../webroot/img/icones/magnifying-glass.png" />
                            </button>

                            <input class="positionAbsolute uppercase" id="txt-pesquisa-st" type="text" style="top: 22px; left: 185px; width: 400px;"  placeholder="PESQUISE AQUI">

                            <div class="controle-table-st-mm positionAbsolute" style="top: 80px; overflow:auto; height: 432px;width: 850px;"> 
                                <table class="border-spacing " width="100%">

                                    <thead>
                                        <tr>
                                            <th class="font-9" style="width: 86px">CÓD COMERCIAL</td>
                                            <th class="font-9" style="width: 86px">EAN</td>
                                            <th class="font-9" style="width: 56px">FRANQUIA</td>
                                            <th class="font-9" style="width: 213px">DESCRIÇÃO SAP</td>
                                            <th class="font-9" style="width: 150px">FAMÍLIA</td>
                                            <th class="font-9" style="width: 86px">CLASSIFICAÇÃO</td>
                                        </tr>
                                        <tr>
                                            <th class="font-9" style="width: 86px"><br></td>
                                            <th class="font-9" style="width: 86px"><br></td>
                                            <th class="font-9" style="width: 56px"></td>
                                            <th class="font-9" style="width: 213px"></td>
                                            <th class="font-9" style="width: 150px"></td>
                                            <th class="font-9" style="width: 86px"></td>
                                        </tr>
                                    </thead>

                                    <tbody id="filtro-produto">


                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div><!-- fim stage -->

        <?php scripts(); ?>
        <script src="../../webroot/js/mmAtacado.js"></script>
    </body>
</html>