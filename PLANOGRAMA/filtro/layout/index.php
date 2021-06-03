<?php include("../../../modules/funcoesModulo.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php head(); ?>
        
    </head>
    <body>
        <div id="bg-planograma-filtro" class="stage">
            <div class="quadro-produtos positionAbsolute">

            
            <div id="resetPage" class="btn-filtro d-flex j-content-center a-items-center campo-6">
                <p>Resetar Filtro</p>   
            </div>

            <form id="input-opt" class="d-flex j-content-s-around a-items-start" style="width:1024px;height: 405px;padding-top: 260px;" action="../../DPSP/layout/index.php" method="GET">
                
                <div class="btn-filtro d-flex j-content-center a-items-center">
                    <select id="REDE" name="REDE" class="text-filtro">
                        <option value="">redes</option>
                        <option value="DPSP">DPSP</option>
                        <option value="EXTRAFARMA">Extra Farma</option>
                        <option value="RAIA DROGASIL">Raia Drogasil</option>
                        <option value="PAGUEMENOS">Pague Menos</option>
                    </select>
                </div>
                <!-- <div class="btn-filtro d-flex j-content-center a-items-center">
                    <p class="text-filtro">categorias</p>
                </div>
                <div class="btn-filtro d-flex j-content-center a-items-center">
                    <p class="text-filtro">loja</p>
                </div>
                <div class="btn-filtro d-flex j-content-center a-items-center">
                    <p class="text-filtro">região</p>
                </div>
                <div class="btn-filtro d-flex j-content-center a-items-center">
                    <p class="text-filtro">nº de módulos</p>
                </div>
                <div class="btn-filtro d-flex j-content-center a-items-center">
                    <p class="text-filtro">altura do mobiliário</p>
                </div>
                <div class="btn-filtro d-flex j-content-center a-items-center">
                    <p class="text-filtro">tipo de mobiliário</p>
                </div> -->

            </form>
        

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <div id="content-plan-geral">

        </div>

        <?php scripts(); ?>
        <script src="../../webroot/js/filtro.js"></script>
        

    </body>
</html>