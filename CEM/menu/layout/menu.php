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

            <?php headerDefault() ?>

            <?php menu($link) ?>

        </div><!-- fim stage -->

        <?php scripts(); ?>
        
    </body>
</html>