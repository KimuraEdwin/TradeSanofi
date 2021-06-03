<div class="menuCtrl positionAbsolute">
    <a href="../../menu/layout/menuPdv.php">
        <span class="btnPdv btn-padrao btn-menu-superior positionAbsolute d-table">
            <p class="d-table-cell v-align-middle">PDV</p>
        </span>
    </a>

    <div class="btnProdutosGen btn-padrao btn-menu-superior positionAbsolute d-table">
        <p data-control=".produtosMenuGen" class="d-table-cell v-align-middle">PRODUTOS</p>
        <div id="produtos">
            <div id="produtosMenu" data-menu-close-bg class="menu produtosMenuGen positionAbsolute">

                <!--a href="#">
                    <div class="positionAbsolute menu-cascade menu-lancamentos d-table">
                        <p class="d-table-cell v-align-middle"><strong>LANÇAMENTOS</strong></p>
                    </div>
                </a-->

                <a href="<?php echo linkInterno('Cronicos');?>">
                    <div class="positionAbsolute menu-cascade-produtos menu-cronicos d-table">
                        <p class="d-table-cell v-align-middle">CRÔNICOS</p>
                    </div>
                </a>

                <a href="<?php echo linkInterno('Agudos');?>">
                    <div class="positionAbsolute menu-cascade-produtos menu-agudos d-table">
                        <p class="d-table-cell v-align-middle">AGUDOS</p>
                    </div>
                </a>

                <a href="<?php echo linkInterno('Hospitalar');?>">
                    <div class="positionAbsolute menu-cascade-produtos menu-hospitalar d-table">
                        <p class="d-table-cell v-align-middle">HOSPITALAR</p>
                    </div>
                </a>

                <a href="<?php echo linkInterno('Genericos');?>" >
                    <div class="positionAbsolute menu-cascade-produtos menu-genericos d-table">
                        <p class="d-table-cell v-align-middle">GENÉRICOS</p>
                    </div>
                </a>

                <a href="<?php echo linkInterno('Otc');?>" >
                    <div class="positionAbsolute menu-cascade-produtos menu-otc d-table">
                        <p class="d-table-cell v-align-middle">OTC</p>
                    </div>
                </a>
                
                <a href="<?php echo linkInterno('NaoPromovidos');?>" >
                    <div class="positionAbsolute menu-cascade-produtos menu-nao-promovidos d-table">
                        <p class="d-table-cell v-align-middle">NÃO<br>PROMOVIDOS</p>
                    </div>
                </a>
                <!--div class="positionAbsolute menu-cascade menu-fechar d-table">
                    <p data-menu-close="#produtoMenu" class="d-table-cell v-align-middle"><strong>FECHAR</strong></p>
                </div-->
            </div>
        </div>
    </div>

    <div class="btnStoreCheckGen btn-padrao btn-menu-superior positionAbsolute d-table">
        <p data-control=".storecheckMenuGen" class="d-table-cell v-align-middle">STORE CHECK</p>
        <div id="storecheck">
            <div id="storecheckMenu" data-menu-close-bg class="menu storecheckMenuGen positionAbsolute">
                <a href="<?php echo linkInternoStoreCheck('Regionais');?>">
                    <div class="positionAbsolute menu-cascade menu-regionais d-table">
                        <p class="d-table-cell v-align-middle">REGIONAIS</p>
                    </div>
                </a>
                <a href="<?php echo linkInternoStoreCheck('Hibridas');?>">
                    <div class="positionAbsolute menu-cascade menu-hibridas d-table">
                        <p class="d-table-cell v-align-middle">HIBRIDAS</p>
                    </div>
                </a>
                <a href="<?php echo linkInternoStoreCheck('Associativismo');?>">
                    <div class="positionAbsolute menu-cascade menu-associativismo d-table">
                        <p class="d-table-cell v-align-middle">ASSOCIATIVISMO</p>
                    </div>
                </a>
                <a href="<?php echo linkInternoStoreCheck('Independentes');?>">
                    <div class="positionAbsolute menu-cascade menu-independentes d-table">
                        <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                    </div>
                </a>
                <a href="<?php echo linkInternoStoreCheck('Corporativas');?>">
                    <div class="positionAbsolute menu-cascade menu-corporativas d-table">
                        <p class="d-table-cell v-align-middle">CORPORATIVAS</p>
                    </div>
                </a>
                <a href="<?php echo linkInternoStoreCheck('Distritais');?>">
                    <div class="positionAbsolute menu-cascade menu-distritais d-table">
                        <p class="d-table-cell v-align-middle">DISTRITAIS</p>
                    </div>
                </a>
                <a href="<?php echo linkInternoStoreCheck('Alimentares');?>">
                    <div class="positionAbsolute menu-cascade menu-alimentares d-table">
                        <p class="d-table-cell v-align-middle">ALIMENTARES</p>
                    </div>
                </a>
                <a href="<?php echo linkInternoStoreCheck('ListaCompleta');?>">
                    <div class="positionAbsolute menu-cascade menu-fechar d-table">
                        <p class="d-table-cell v-align-middle">LISTA COMPLETA</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <a href="../../programaViva/layout/programaViva.php">
        <span class="btnProgramaVivaGen btn-padrao btn-menu-superior positionAbsolute d-table">
            <p class="d-table-cell v-align-middle">PROGRAMA VIVA</p>
        </span>
    </a>
    <a href="../../wininstore/layout/wininstore.php">
        <span class="btnWinInStoreGen btn-padrao btn-menu-superior positionAbsolute d-table">
            <p class="d-table-cell v-align-middle">WIN IN STORE</p>
        </span>
    </a>
</div>
