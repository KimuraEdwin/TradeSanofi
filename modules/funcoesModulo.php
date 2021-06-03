<?php

 /********************************* inicio sessão *******************************/

    session_start();

 /********************************* cabeçalho UNIVERSAL *******************************/
    function head(){ 
        include("../../../modules/headers/head.php");
    }

    function scripts(){ 
        include("../../../modules/headers/scripts.php");
    }

/********************************* cabeçalho CEM *******************************/

    function headerDefault(){ 
        include("../../../modules/headers/CEM/headerLayout.php");
    }

    function headerDefaultGen(){ 
        include("../../../modules/headers/CEM/headerLayoutGen.php");
    }

    function headerSku($guiaMenu){ 
        include("../../../modules/headers/CEM/headerLayoutProduto.php");
    }

    function navBar(){
        include("../../../modules/headers/CEM/navBarLayout.php");
    }

    function navBarMenu(){
        include("../../../modules/headers/CEM/navBarLayoutMenu.php");
    }

    function navBarMenuGen(){
        include("../../../modules/headers/CEM/navBarLayoutMenuGen.php");
    }

    function navBarbtnTop(){
        include("../../../modules/headers/CEM/headerBotoesTop.php");
    }

    function navBarbtnTopGen(){
        include("../../../modules/headers/CEM/headerBotoesTopGen.php");
    }

    /********************************* cabeçalho CHC *******************************/

    function navBarCHC($menuActive){
        $GLOBALS['$_CTRLGLOBAL']=$menuActive;
        include("../../../modules/headers/CHC/navBarLayout.php");
    }

    function navBarbtnTopCHC(){
        include("../../../modules/headers/CHC/headerBotoesTop.php");
    }

    function headerSkuCHC($guiaMenu, $categoria){ 
        include("../../../modules/headers/CHC/headerLayoutProduto.php");
    }


   
    /******************************* menu ******************************************/

    function linkInterno($link){
        echo ("../../menu/layout/menu".$link.".php");
    }

    function linkInternoStoreCheck($linkSC){
        //echo ("../../storecheck/layout/".$linkSC.".php");
        echo ("../../maxMix/layout/maxMix".$linkSC.".php");
    }

    function menu(){
        include("../../../modules/menus/CEM/menuPV.php");
    }

    function menuStarBem(){
        include("../../../modules/menus/CEM/menuPVStarBem.php");
    }

    function menuInfoImportante(){
        include("../../../modules/menus/CEM/menuPVInfoImportante.php");
    }

    function menuCHC(){
        include("../../../modules/menus/CHC/menuPV.php");
    }

    function menuStarBemCHC(){
        include("../../../modules/menus/CHC/menuPVStarBem.php");
    }

    function menuInfoImportanteCHC(){
        include("../../../modules/menus/CHC/menuPVInfoImportante.php");
    }


    /*********************************** sku ******************************************/
    
    function sku($heroi, $paginas, $categoria, $produto){ 
        include("../../../modules/produto/CEM/skuLayout.php");
    }
    function skuGen($heroi, $paginas, $categoria, $produto){ 
        include("../../../modules/produto/CEM/skuLayoutGenerico.php");
    }

    function skuQuad($categoria, $produto){ 
        include("../../../modules/produto/CEM/skuLayoutQuad.php");
        require("../../../modules/calculoSku/calculoSku.php");
    }

    function skuLogo($classLogo,$categoria,$produto,$heroi,$logo){ 
        include("../../../modules/produto/CEM/skuLogo.php");
    }
    
    function skuCHC($paginas, $categoria, $produto){ 
        include("../../../modules/produto/CHC/skuLayout.php");
    }

    function distCHC($paginas, $categoria, $produto){ 
        include("../../../modules/produto/CHC/distribuicaoLayout.php");
    }

    function skuGenCHC($heroi, $paginas, $categoria, $produto){ 
        include("../../../modules/produto/CHC/skuLayoutGenerico.php");
    }

    function skuQuadCHC($categoria, $produto){ 
        include("../../../modules/produto/CHC/skuLayoutQuad.php");
        require("../../../modules/calculoSku/calculoSku.php");
    }

    function skuLogoCHC($classLogo,$categoria,$produto,$logo){ 
        include("../../../modules/produto/CHC/skuLogo.php");
    }

    /********************************* Win in Store ***********************************/

    function winInStore(){
        include("../../../modules/wininstore/CEM/winLayout.php");
    }
    function winInStoreCHC(){
        include("../../../modules/wininstore/CHC/winLayout.php");
    }

    /********************************* Programa Viva ***********************************/

    function programaViva(){
        include("../../../modules/programaViva/CEM/pvLayout.php");
    }
    function programaVivaCHC(){
        include("../../../modules/programaViva/CHC/pvLayout.php");
    }


?>