$(document).ready(function (b) {
    var $input = $("#txt-pesquisa-st");

    var encontrou = function(linha) {
        var p = $input.val().toUpperCase();
        var encontrou = false;

        if(linha.EAN.toString().includes(p)){
            encontrou = true;
        }
        else if(linha.FAMILIA.toString().includes(p)){
            encontrou = true;
        }
        else if(linha.APRESENTACAO.toString().includes(p)){
            encontrou = true;
        }
        else if(linha.DESCONTO_PACIENTE.toString().includes(p)){
            encontrou = true;
        }
        else if(linha.CONDICOES_DE_DESCONTOS.toString().includes(p)){
            encontrou = true;
        }
        else if(linha.LIMITE_MES.toString().includes(p)){
            encontrou = true;
        }


        return encontrou;
    };


    var pesquisar = function () {
        var HTML = "";
        
        var area = $("#filtro-produto");

        var lista = [
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "BAIXA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": "1,7",
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "POP | BAIXA RENDA",
            "PLANOGRAMA": "MG_Caixa Blister_POP e Baixa Renda_1,7MC",
            "PRATELEIRA": 1,
            "EAN": 7891058004354,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 150ML",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "BAIXA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": "1,7",
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "POP | BAIXA RENDA",
            "PLANOGRAMA": "MG_Caixa Blister_POP e Baixa Renda_1,7MC",
            "PRATELEIRA": 1,
            "EAN": 7891058004347,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 60ML",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "BAIXA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": "1,7",
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "POP | BAIXA RENDA",
            "PLANOGRAMA": "MG_Caixa Blister_POP e Baixa Renda_1,7MC",
            "PRATELEIRA": 2,
            "EAN": 7891058169015,
            "NOME": "ALLEGRA 180MG 10CP",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "BAIXA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": "1,7",
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "POP | BAIXA RENDA",
            "PLANOGRAMA": "MG_Caixa Blister_POP e Baixa Renda_1,7MC",
            "PRATELEIRA": 2,
            "EAN": 7891058223900,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 150ML",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "BAIXA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": 2,
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "POP | BAIXA RENDA",
            "PLANOGRAMA": "MG_Caixa Blister_POP e Baixa Renda_1,7MC",
            "PRATELEIRA": 1,
            "EAN": 7891058306230,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 60ML",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "BAIXA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": 2,
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "POP | BAIXA RENDA",
            "PLANOGRAMA": "MG_Caixa Blister_POP e Baixa Renda_1,7MC",
            "PRATELEIRA": 1,
            "EAN": 7891058388561,
            "NOME": "ALLEGRA 180MG 10CP",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "BAIXA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": 2,
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "POP | BAIXA RENDA",
            "PLANOGRAMA": "MG_Caixa Blister_POP e Baixa Renda_1,7MC",
            "PRATELEIRA": 2,
            "EAN": 7891058470891,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 150ML",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "BAIXA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": 3,
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "POP | BAIXA RENDA",
            "PLANOGRAMA": "MG_Caixa Blister_POP e Baixa Renda_1,7MC",
            "PRATELEIRA": 1,
            "EAN": 7891058553222,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 60ML",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "BAIXA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": 3,
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "POP | BAIXA RENDA",
            "PLANOGRAMA": "MG_Caixa Blister_POP e Baixa Renda_1,7MC",
            "PRATELEIRA": 1,
            "EAN": 7891058635552,
            "NOME": "ALLEGRA 180MG 10CP",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "BAIXA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": 3,
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "POP | BAIXA RENDA",
            "PLANOGRAMA": "MG_Caixa Blister_POP e Baixa Renda_1,7MC",
            "PRATELEIRA": 2,
            "EAN": 7891058717883,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 150ML",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "BAIXA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": 3,
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "POP | BAIXA RENDA",
            "PLANOGRAMA": "MG_Caixa Blister_POP e Baixa Renda_1,7MC",
            "PRATELEIRA": 3,
            "EAN": 7891058800213,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 60ML",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "ALTA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": "1,7",
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "AA",
            "PLANOGRAMA": "MG+RJ+ES_AA e Alta Renda_1,7MC",
            "PRATELEIRA": 1,
            "EAN": 7891058800214,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 60ML",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "ALTA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": "1,7",
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "AA",
            "PLANOGRAMA": "MG+RJ+ES_AA e Alta Renda_1,7MC",
            "PRATELEIRA": 1,
            "EAN": 7891058800215,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 60ML",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "ALTA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": "1,7",
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "AA",
            "PLANOGRAMA": "MG+RJ+ES_AA e Alta Renda_1,7MC",
            "PRATELEIRA": 1,
            "EAN": 7891058800216,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 60ML",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "ALTA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": "1,7",
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "AA",
            "PLANOGRAMA": "MG+RJ+ES_AA e Alta Renda_1,7MC",
            "PRATELEIRA": 2,
            "EAN": 7891058800217,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 60ML",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "ALTA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": "1,7",
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "AA",
            "PLANOGRAMA": "MG+RJ+ES_AA e Alta Renda_1,7MC",
            "PRATELEIRA": 2,
            "EAN": 7891058800218,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 60ML",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "ALTA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": "1,7",
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "AA",
            "PLANOGRAMA": "MG+RJ+ES_AA e Alta Renda_1,7MC",
            "PRATELEIRA": 2,
            "EAN": 7891058800219,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 60ML",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "ALTA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": "1,7",
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "AA",
            "PLANOGRAMA": "MG+RJ+ES_AA e Alta Renda_1,7MC",
            "PRATELEIRA": 3,
            "EAN": 7891058800220,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 60ML",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "ALTA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": 2,
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "AA",
            "PLANOGRAMA": "MG+RJ+ES_AA e Alta Renda_1,7MC",
            "PRATELEIRA": 1,
            "EAN": 7891058800221,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 60ML",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "ALTA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": 2,
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "AA",
            "PLANOGRAMA": "MG+RJ+ES_AA e Alta Renda_1,7MC",
            "PRATELEIRA": 1,
            "EAN": 7891058800222,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 60ML",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "ALTA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": 3,
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "AA",
            "PLANOGRAMA": "MG+RJ+ES_AA e Alta Renda_1,7MC",
            "PRATELEIRA": 2,
            "EAN": 7891058800223,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 60ML",
            "FRENTE": 1
          },
          {
            "REDE": "DPSP",
            "CATEGORIA": "DOR E FEBRE",
            "PERFIL_LOJA": "ALTA RENDA",
            "REGIAO": "MG",
            "NUMERO_DE_MODULOS": 3,
            "ALTURA_DO_MOBILIARIO": "MC(CENTRAL)",
            "TIPO_DE_MOBILIARIO": "AA",
            "PLANOGRAMA": "MG+RJ+ES_AA e Alta Renda_1,7MC",
            "PRATELEIRA": 2,
            "EAN": 7891058800224,
            "NOME": "ALLEGRA PEDIATRICO SUSPENSAO 60ML",
            "FRENTE": 1
          }
        ];

        area.empty();

        lista.forEach(function(linha){
            if(encontrou(linha)){
                HTML += "<tr>";

                HTML += "<td class='font-9 text-center' style='width: 86px'>" + linha.EAN + "</td>";
                HTML += "<td class='font-9 text-center' style='width: 86px'>" + linha.FAMILIA + "</td>";
                HTML += "<td class='font-9 text-center' style='width: 56px'>" + linha.DESCONTO_PACIENTE + "</td>";
                HTML += "<td class='font-9 text-center' style='width: 213px'>" + linha.APRESENTACAO + "</td>";
                HTML += "<td class='font-9 text-center' style='width: 150px'>" + linha.CONDICOES_DE_DESCONTOS + "</td>";
                HTML += "<td class='font-9 text-center' style='width: 86px'>" + linha.LIMITE_MES + "</td>";

                HTML += "</tr>";
            }
        }); 

        area.html(HTML);
    };

    $input.keyup(pesquisar);
    $("#btn-pesquisa-st").click(pesquisar);

    pesquisar();
});