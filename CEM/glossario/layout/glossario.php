<?php 

include("../../../modules/funcoesModulo.php"); 

$categoria = "agudos";
$produto = "alenthus";
$heroi = "alenthus";
$paginas = [1,3];
$guiaMenu = ['sku', 'dgmpe', 'educacao', 'argumentosVendas'];

?>

<?php 
    if($produto != 'profenid'){
        $sizeLogo = getimagesize("../../webroot/img/logo/".$categoria."/".$produto."Logo.png");
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
        <div id="bg-menu" class="stage">
            <?php navBarMenu() ?>

            <div class="bg-active-glo-search">
                <a href="../../glossario/layout/glossario.php">
                    <div class="btn-glossario-menu" style="top:unset!important">
                        <img class="positionAbsolute iconeNote" src="../../webroot/img/icones/note.png"/>
                    </div>
                </a>
            </div>

            <div class="quadro-pesquisa positionAbsolute" style="height: 575px;top:85px">

                <div class="content-page skus show">

                <p class="font-24 colorWhite positionAbsolute">&nbsp;GLOSSÁRIO</p>
                
                    <div data-layer-set=".GLO" class="GLO l1 layer show">

                        <div class="linhaBtnGlossario d-inline-block text-right">
                            <div class="d-inline-block">
                                <div data-layer-glo=".l1" class="bg-btn-glossario btn-padrao btn-acesso-geral btn-acesso-sku d-table active-side-glossario">
                                    <p class="d-table-cell v-align-middle font-9">A—————D</p>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div data-layer-glo=".l2" class="bg-btn-glossario btn-padrao btn-acesso-geral btn-acesso-dgmpe d-table">
                                    <p class="d-table-cell v-align-middle font-9">E—————M</p>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div data-layer-glo=".l3" class="bg-btn-glossario btn-padrao btn-acesso-geral btn-acesso-educacao d-table">
                                    <p class="d-table-cell v-align-middle font-9">O—————S</p>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div data-layer-glo=".l4" class="bg-btn-glossario btn-padrao btn-acesso-geral btn-acesso-estrategia d-table">
                                    <p class="d-table-cell v-align-middle font-9">U—————Z</p>
                                </div>
                            </div>
                        </div>


                        <div class="linhaCimaIndice d-inline-block">
                            <div class="boxIndice d-inline-block">
                                <div class="texto_indice d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p>A</p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxIndice d-inline-block">
                                <div class="texto_indice d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p>B</p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxIndice d-inline-block">
                                <div class="texto_indice d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p>C</p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxIndice d-inline-block" style="margin-right:unset">
                                <div class="texto_indice d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p>D</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="linhaCimaIndice d-inline-block">
                            <div class="boxConteudoGlossario d-inline-block">
                                <div class="text_conteudo_glossario d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="titulo uppercase font-14">alimentar</p>
                                        <p class="font-12">
                                            Hipermercados, 
                                            supermercados 
                                            e redes alimentares.
                                        </p>
                                        <br>
                                        <br>
                                        <p class="titulo uppercase font-14">associativismo</p>
                                        <p class="font-12">
                                            Trata-se de um grupo de farmácias com o objetivo de 
                                            superar desafios por meio de ajuda mútua, 
                                            gerando benefícios econômicos e sociais em prol 
                                            de todo o grupo.
                                        </p>
                                        <br>
                                        <br>
                                        <p class="titulo uppercase font-14">Autosserviço</p>
                                        <p class="font-12">
                                            Modelo de loja que permite que 
                                            os clientes escolha seus produtos 
                                            sem a necessidade de auxílio 
                                            direto de atendentes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxConteudoGlossario d-inline-block">
                                <div class="text_conteudo_glossario d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="titulo uppercase font-24">Biossimilar</p>
                                        <p class="font-16">
                                            Produto cópia de um produto referência 
                                            de origem biológica identificado por uma marca. 
                                            (Não pode ser considerado uma 
                                            cópia exata)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxConteudoGlossario d-inline-block">
                                <div class="text_conteudo_glossario d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="titulo uppercase font-14">Controlados</p>
                                        <p class="font-12">
                                            Produtos vendidos somente 
                                            com prescrição médica, confinados no armário 
                                            de controlados atrás do balcão.
                                        </p>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <p class="titulo uppercase font-14">Cross merchandising</p>
                                        <p class="font-12">
                                            Merchandising utilizado 
                                            para cruzar categorias 
                                            não naturalmente expostas 
                                            em conjunto. Ex: Produtos 
                                            de cólica em absorventes descartáveis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxConteudoGlossario d-inline-block"style="margin-right:unset">
                                <div class="text_conteudo_glossario d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="titulo uppercase font-14">DGMPE </p>
                                        <p class="font-12">
                                            Distribuição, Gôndola, Merchandising, Preço 
                                            e Educação
                                        </p>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <p class="titulo uppercase font-14">Distribuição</p>
                                        <p class="font-12">
                                            Garantir a presença do produto na loja, evitando faltas. Reduzir 
                                            a ruptura, aumentar a demanda, 
                                            ter o item certo no PDV certo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                
                    <div data-layer-set=".GLO" class="GLO l2 layer">

                        <div class="linhaBtnGlossario d-inline-block text-right">
                            <div class="d-inline-block">
                                <div data-layer-glo=".l1" class="bg-btn-glossario btn-padrao btn-acesso-geral btn-acesso-sku d-table">
                                    <p class="d-table-cell v-align-middle font-9">A—————D</p>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div data-layer-glo=".l2" class="bg-btn-glossario btn-padrao btn-acesso-geral btn-acesso-dgmpe d-table active-side-glossario">
                                    <p class="d-table-cell v-align-middle font-9">E—————M</p>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div data-layer-glo=".l3" class="bg-btn-glossario btn-padrao btn-acesso-geral btn-acesso-educacao d-table">
                                    <p class="d-table-cell v-align-middle font-9">O—————S</p>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div data-layer-glo=".l4" class="bg-btn-glossario btn-padrao btn-acesso-geral btn-acesso-estrategia d-table">
                                    <p class="d-table-cell v-align-middle font-9">U—————Z</p>
                                </div>
                            </div>
                        </div>


                        <div class="linhaCimaIndice d-inline-block">
                            <div class="boxIndice d-inline-block">
                                <div class="texto_indice d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p>E</p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxIndice d-inline-block">
                                <div class="texto_indice d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p>G</p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxIndice d-inline-block">
                                <div class="texto_indice d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p>H</p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxIndice positionAbsolute" style="left: 465px;top: 285px;">
                                <div class="texto_indice d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p>I</p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxIndice d-inline-block" style="margin-right:unset">
                                <div class="texto_indice d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p>M</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="linhaCimaIndice d-inline-block">
                            <div class="boxConteudoGlossario d-inline-block">
                                <div class="text_conteudo_glossario d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="titulo uppercase font-14">Educação</p>
                                        <p class="font-12">
                                            Treinar e informar o PDV sobre as características 
                                            e benefícios das marcas Sanofi e Medley, 
                                            através de vídeos e materiais informativos.
                                        </p>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <p class="titulo uppercase font-14">Espaço A-Z</p>
                                        <p class="font-12">
                                            Espaço atrás do balção
                                        </p>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="boxConteudoGlossario d-inline-block">
                                <div class="text_conteudo_glossario d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="titulo uppercase font-14">Genérico</p>
                                        <p class="font-12">
                                            Produto cópia 
                                            de um produto 
                                            referência identificado 
                                            pelo princípio ativo 
                                            e sem marca própria.
                                        </p>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <p class="titulo uppercase font-14">Gondôla</p>
                                        <p class="font-12">
                                            Ter a correta exposição do posicionamento do produto 
                                            em gôndola com número 
                                            de frentes em linha com participação de mercado 
                                            dos produtos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxConteudoGlossario ajusteGlossarioTopo d-inline-block">
                                <div class="text_conteudo_glossario d-table" style="height: 152px;">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="titulo uppercase font-14">Higiene / beleza</p>
                                        <p class="font-12">
                                            Produtos que podem ser livremente vendidos
                                            em farmácias.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxConteudoGlossario ajusteGlossarioBaixo d-inline-block">
                                <div class="text_conteudo_glossario d-table" style="height: 152px;">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="font-12">
                                            Imposto sobre circulação de mercadorias e serviços
                                        </p>
                                        <br>
                                        <p class="titulo uppercase font-14">Independentes</p>
                                        <p class="font-12">
                                            Farmácias de pequeno 
                                            e médio porte.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxConteudoGlossario d-inline-block"style="margin-right:unset">
                                <div class="text_conteudo_glossario d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="titulo uppercase font-14">Market share</p>
                                        <p class="font-12">
                                            Participação de mercado
                                        </p>
                                        <br>
                                        <p class="titulo uppercase font-14">Medicamento referência</p>
                                        <p class="font-12">
                                            Produto original do princípio 
                                            ativo, referência utilizada para 
                                            as cópias genéricas ou similares.
                                        </p>
                                        <br>
                                        <p class="titulo uppercase font-14">Merchandising</p>
                                        <p class="font-12">
                                            Garantir ações que chamem atenção do 
                                            consumidor no PDV e que estimulem a compra 
                                            por impulso através da aplicação 
                                            e posicionamento correto 
                                            dos materiais.
                                        </p>
                                        <br>
                                        <p class="titulo uppercase font-14">MPDV</p>
                                        <p class="font-12">
                                            Material de ponto de venda
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                
                    <div data-layer-set=".GLO" class="GLO l3 layer">

                        <div class="linhaBtnGlossario d-inline-block text-right">
                            <div class="d-inline-block">
                                <div data-layer-glo=".l1" class="bg-btn-glossario btn-padrao btn-acesso-geral btn-acesso-sku d-table">
                                    <p class="d-table-cell v-align-middle font-9">A—————D</p>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div data-layer-glo=".l2" class="bg-btn-glossario btn-padrao btn-acesso-geral btn-acesso-dgmpe d-table">
                                    <p class="d-table-cell v-align-middle font-9">E—————M</p>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div data-layer-glo=".l3" class="bg-btn-glossario btn-padrao btn-acesso-geral btn-acesso-educacao d-table active-side-glossario">
                                    <p class="d-table-cell v-align-middle font-9">O—————S</p>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div data-layer-glo=".l4" class="bg-btn-glossario btn-padrao btn-acesso-geral btn-acesso-estrategia d-table">
                                    <p class="d-table-cell v-align-middle font-9">U—————Z</p>
                                </div>
                            </div>
                        </div>


                        <div class="linhaCimaIndice d-inline-block">
                            <div class="boxIndice d-inline-block">
                                <div class="texto_indice d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p>O</p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxIndice d-inline-block">
                                <div class="texto_indice d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p>P</p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxIndice d-inline-block">
                                <div class="texto_indice d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p>R</p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxIndice d-inline-block" style="margin-right:unset">
                                <div class="texto_indice d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p>S</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="linhaCimaIndice d-inline-block">
                            <div class="boxConteudoGlossario d-inline-block">
                                <div class="text_conteudo_glossario d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="titulo uppercase font-24">OTC</p>
                                        <p class="font-16">
                                            Produto de venda sem prescrição médica, vendidos 
                                            fora do balcão
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxConteudoGlossario d-inline-block">
                                <div class="text_conteudo_glossario d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="titulo uppercase font-14">PDV</p>
                                        <p class="font-12">
                                            Ponto de venda
                                        </p>
                                        <br>
                                        <p class="titulo uppercase font-14">PF</p>
                                        <p class="font-12">
                                            Preço de fábrica 
                                        </p>
                                        <br>
                                        <p class="titulo uppercase font-14">Planograma</p>
                                        <p class="font-12">
                                            Imagem que orienta o posição de um produto na gôndola 
                                        </p>
                                        <br>
                                        <p class="titulo uppercase font-14">PMC</p>
                                        <p class="font-12">
                                            Preço máximo ao consumidor 
                                        </p>
                                        <br>
                                        <p class="titulo uppercase font-14">Ponto natural</p>
                                        <p class="font-12">
                                            Ponto principal de venda do produto analisado. 
                                        </p>
                                        <br>
                                        <p class="titulo uppercase font-14">PPP</p>
                                        <p class="font-12">
                                            Venda valor calculada com base 
                                            no desconto médio de mercado. 
                                        </p>
                                        <br>
                                        <p class="titulo uppercase font-14">PX</p>
                                        <p class="font-12">
                                            Resultado do período de <br>
                                            1/jan - até a data atual
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="boxConteudoGlossario d-inline-block">
                                <div class="text_conteudo_glossario d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="titulo uppercase font-14">Redes</p>
                                        <p class="font-12">
                                            Clientes estruturados que fazem parte de uma mesma bandeira. 
                                            Na Sanofi a clusterização é dividida em Redes / Corporativas 
                                            / Regionais / Distritais.
                                        </p>
                                        <br><br>
                                        <p class="titulo uppercase font-14">Ruptura</p>
                                        <p class="font-12">
                                            Falta de produto na loja
                                        </p>
                                        <br><br>
                                        <p class="titulo uppercase font-14">RX/ Prescrição</p>
                                        <p class="font-12">
                                            Produtos que precisam 
                                            de receita médica para serem 
                                            vendidos e posicionados atrás 
                                            do balção
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxConteudoGlossario d-inline-block"style="margin-right:unset">
                                <div class="text_conteudo_glossario d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="titulo uppercase font-14">Shopper</p>
                                        <p class="font-12">
                                            Cliente
                                        </p>
                                        <br>
                                        <p class="titulo uppercase font-14">Similar (BGX)</p>
                                        <p class="font-12">
                                            Produto cópia de um produto referência identificado por 
                                            uma marca
                                        </p>
                                        <br>
                                        <p class="titulo uppercase font-14">SKU</p>
                                        <p class="font-12">
                                            Apresentação
                                        </p>
                                        <br>
                                        <p class="titulo uppercase font-14">Switch</p>
                                        <p class="font-12">
                                            Movimento em que produtos RX se tornam produtos OTC
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                
                    <div data-layer-set=".GLO" class="GLO l4 layer">

                        <div class="linhaBtnGlossario d-inline-block text-right">
                            <div class="d-inline-block">
                                <div data-layer-glo=".l1" class="bg-btn-glossario btn-padrao btn-acesso-geral btn-acesso-sku d-table">
                                    <p class="d-table-cell v-align-middle font-9">A—————D</p>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div data-layer-glo=".l2" class="bg-btn-glossario btn-padrao btn-acesso-geral btn-acesso-dgmpe d-table">
                                    <p class="d-table-cell v-align-middle font-9">E—————M</p>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div data-layer-glo=".l3" class="bg-btn-glossario btn-padrao btn-acesso-geral btn-acesso-educacao d-table">
                                    <p class="d-table-cell v-align-middle font-9">O—————S</p>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div data-layer-glo=".l4" class="bg-btn-glossario btn-padrao btn-acesso-geral btn-acesso-estrategia d-table active-side-glossario">
                                    <p class="d-table-cell v-align-middle font-9">U—————Z</p>
                                </div>
                            </div>
                        </div>


                        <div class="linhaCimaIndice d-inline-block">
                            <div class="boxIndiceUltima d-inline-block">
                                <div class="texto_indice d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="font-24">u</p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxIndiceUltima d-inline-block">
                                <div class="texto_indice d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p>V</p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxIndiceUltima d-inline-block" style="margin:unset">
                                <div class="texto_indice d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p>Y</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="linhaCimaIndice d-inline-block">
                            <div class="boxConteudoGlossarioUltima d-inline-block">
                                <div class="text_conteudo_glossario d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="titulo font-32">u<span class="font-23" style="font-family: 'KulimPark Bold'!important;">I</span></p>
                                        <p class="font-16">
                                            Produto de venda sem prescrição médica, vendidos 
                                            fora do balcão
                                        </p>
                                        <br><br><br><br>
                                        <br><br><br>
                                    </div>
                                </div>
                            </div>
                            <div class="boxConteudoGlossarioUltima d-inline-block">
                                <div class="text_conteudo_glossario d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="titulo uppercase font-24">VB</p>
                                        <p class="font-16">
                                            Volume base de produto na loja
                                        </p>
                                        <br><br><br><br>
                                        <br><br><br>
                                    </div>
                                </div>
                            </div>
                            <div class="boxConteudoGlossarioUltima d-inline-block" style="margin:unset">
                                <div class="text_conteudo_glossario d-table">
                                    <div class="d-table-cell v-align-middle">
                                        <p class="titulo uppercase font-24">YTD</p>
                                        <p class="font-16">
                                            Produto de venda sem prescrição médica, vendidos fora do balcão
                                        </p>
                                        <br><br><br><br>
                                        <br><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                

                </div>

            </div><!-- fim Quadro -->
        </div><!-- fim stage -->

        <?php scripts(); ?>
    </body>
</html>