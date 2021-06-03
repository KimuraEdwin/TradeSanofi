<div class="menuCtrl positionAbsolute">
    <div class="btnProdutos btn-padrao btn-menu-superior positionAbsolute d-table">
        <p data-control=".produtosMenu" class="d-table-cell v-align-middle">PRODUTOS</p>
        <div id="produtos">
            <div id="produtosMenu" data-menu-close-bg class="menu produtosMenu positionAbsolute">

                <!--a href="#">
                    <div class="positionAbsolute menu-cascade menu-lancamentos d-table">
                        <p class="d-table-cell v-align-middle"><strong>LANÇAMENTOS</strong></p>
                    </div>
                </a-->

                <a href="<?php echo linkInterno('PrimaryCare');?>">
                    <div class="positionAbsolute menu-cascade-produtos menu-cronicos d-table">
                        <p class="d-table-cell v-align-middle">PRIMARY CARE</p>
                    </div>
                </a>

                <a href="<?php echo linkInterno('Otc');?>" >
                    <div class="positionAbsolute menu-cascade-produtos menu-otc d-table">
                        <p class="d-table-cell v-align-middle">OTC</p>
                    </div>
                </a>
                
                <a href="<?php echo linkInterno('NaoPromovidos');?>" >
                    <div class="positionAbsolute menu-cascade-produtos menu-nao-promovidos d-table">
                        <p class="d-table-cell v-align-middle">NÃO PROMOVIDOS</p>
                    </div>
                </a>

                <a href="<?php echo linkInterno('Genericos');?>" >
                    <div class="positionAbsolute menu-cascade-produtos menu-genericos d-table">
                        <p class="d-table-cell v-align-middle">GENÉRICOS</p>
                    </div>
                </a>
                <!--div class="positionAbsolute menu-cascade menu-fechar d-table">
                    <p data-menu-close="#produtoMenu" class="d-table-cell v-align-middle"><strong>FECHAR</strong></p>
                </div-->
            </div>
        </div>
    </div>

    <div class="btnStoreCheck btn-padrao btn-menu-superior positionAbsolute d-table">
        <p data-control=".storecheckMenu" class="d-table-cell v-align-middle">MAX MIX</p>
        <div id="storecheck">
            <div id="storecheckMenu" data-menu-close-bg class="menu storecheckMenu positionAbsolute">
                <a href="<?php echo linkInternoStoreCheck('Redes');?>">
                    <div class="positionAbsolute menu-cascade menu-regionais d-table">
                        <p class="d-table-cell v-align-middle">REDES</p>
                    </div>
                </a>
                <a href="<?php echo linkInternoStoreCheck('Independentes');?>">
                    <div class="positionAbsolute menu-cascade menu-hibridas d-table">
                        <p class="d-table-cell v-align-middle">INDEPENDENTES</p>
                    </div>
                </a>
                <a href="<?php echo linkInternoStoreCheck('Atacado');?>">
                    <div class="positionAbsolute menu-cascade menu-associativismo d-table">
                        <p class="d-table-cell v-align-middle">ATACADO</p>
                    </div>
                </a>
                <a href="<?php echo linkInternoStoreCheck('ListaCompleta');?>">
                    <div class="positionAbsolute menu-cascade menu-independentes d-table">
                        <p class="d-table-cell v-align-middle">LISTA COMPLETA</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <a href="../../programaViva/layout/programaViva.php">
        <span class="btnProgramaViva btn-padrao btn-menu-superior positionAbsolute d-table">
            <p class="d-table-cell v-align-middle">PROGRAMA VIVA</p>
        </span>
    </a>
    <a href="../../wininstore/layout/wininstore.php">
        <span class="btnWinInStore btn-padrao btn-menu-superior positionAbsolute d-table">
            <p class="d-table-cell v-align-middle">WIN IN STORE</p>
        </span>
    </a>
</div>
