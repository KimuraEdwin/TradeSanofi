var animation = function (currentLayer, nextLayer) {
    var 
    nomedoproduto = $(currentLayer).children(".letra-transicao-launch"),
    tabela1 = $(currentLayer).children(".table1-transicao-launch"),
    tabela2 = $(currentLayer).children(".table2-transicao-launch"),
    heroi = $(currentLayer).children(".heroi-transicao-launch"),
    pack = $(currentLayer).children(".pack-transicao-launch"),
    btn = $(".bts-layer"),
    bola = $("#universo-lasunch");

    bola.animate({
        left: -100
    });

    pack.animate({
        left: -250,
        opacity: 0,
    }, 800);

    nomedoproduto.delay(100).animate({
        left: -250,
        opacity: 0
    }, 1000);

    heroi.delay(400).animate({
        left: -250,
        opacity: 0
    }, 1000);

    tabela2.delay(600).animate({
        left: -250,
        opacity: 0
    }, 1000);

    tabela1.delay(900).animate({
        left: -250,
        opacity: 0
    }, 1000, function() {
        $(currentLayer).removeClass("show");
        $(nextLayer).addClass("show");

        $(".texto-top").animate({
            left: 0,
            opacity: 1
        }, 1000);

        $(".pack-preco").delay(200).animate({
            left: 0,
            opacity: 1
        }, 1000);

        $(".tabela-concorrentes").delay(400).animate({
            left: 0,
            opacity: 1
        }, 1000);
    });
};

$(document).ready(function() {
    /* $("[data-next-layer-launch]").click(function(){
        var set = $(this).parent().attr("data-layer-set");
        var nextlayer = $(this).attr("data-next-layer-launch");

        animation($(this).parent(), (set + nextlayer));
    });

    $("[data-prev-layer-launch]").click(function(){
        var set = $(this).parent().attr("data-layer-set");
        var nextlayer = $(this).attr("data-layer-launch");

        animation($(this).parent(), (set+nextlayer));
    }); */
});