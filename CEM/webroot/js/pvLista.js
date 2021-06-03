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
        }/*
        else if(linha.LIMITE_MES.toString().includes(p)){
            encontrou = true;
        }*/


        return encontrou;
    };


    var pesquisar = function () {
        var HTML = "";
        
        var area = $("#filtro-produto");

       var lista = [
        
          {
            "EAN": 7896422519908,
            "FAMILIA": "ALENTHUS",
            "APRESENTACAO": "37,5MG CAP GEL DURA LIB CONTROL C/ 30",
            "DESCONTO_PACIENTE": "65,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo e único"
          },
          {
            "EAN": 7891058002862,
            "FAMILIA": "ALLEGRA D",
            "APRESENTACAO": "24H180 MG  240 MG COMP X 5",
            "DESCONTO_PACIENTE": "25,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo"
          },
          {
            "EAN": 7891058022778,
            "FAMILIA": "ALLENASAL",
            "APRESENTACAO": "ALLENASAL 55MCG",
            "DESCONTO_PACIENTE": "26,50%",
            "CONDICOES_DE_DESCONTOS": "Fixo"
          },
          {
            "EAN": 7891058008116,
            "FAMILIA": "ARAVA",
            "APRESENTACAO": "20 MG COMP REV X 30",
            "DESCONTO_PACIENTE": "40,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo"
          },
          {
            "EAN": 7891058003210,
            "FAMILIA": "CLEXANE",
            "APRESENTACAO": "40 MG SOL INJ 2 SER X 0,4 ML",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo"
          },
          {
            "EAN": 7891058004460,
            "FAMILIA": "CLEXANE",
            "APRESENTACAO": "40 MG SOL INJ 6 SER X 0,4 ML",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo"
          },
          {
            "EAN": 7896070605268,
            "FAMILIA": "CLEXANE",
            "APRESENTACAO": "40 MG SOL INJ 10 SER X 0,4 ML",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo"
          },
          {
            "EAN": 7896070605268,
            "FAMILIA": "CLEXANE",
            "APRESENTACAO": "40 MG SOL INJ 10 SER X 0,4 ML",
            "DESCONTO_PACIENTE": "40,00%",
            "CONDICOES_DE_DESCONTOS": "Progressivo | 3° unidade em diante"
          },
          {
            "EAN": 7896070605268,
            "FAMILIA": "CLEXANE",
            "APRESENTACAO": "40 MG SOL INJ 10 SER X 0,4 ML",
            "DESCONTO_PACIENTE": "45,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 3 unidades"
          },
          {
            "EAN": 7891058004460,
            "FAMILIA": "CLEXANE",
            "APRESENTACAO": "40 MG SOL INJ 6 SER X 0,4 ML",
            "DESCONTO_PACIENTE": "40,00%",
            "CONDICOES_DE_DESCONTOS": "Progressivo | 3° unidade em diante"
          },
          {
            "EAN": 7891058022525,
            "FAMILIA": "DEPURA",
            "APRESENTACAO": "ODT 2000UI 30 CPR",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 3 unidades"
          },
          {
            "EAN": 7891058022549,
            "FAMILIA": "DEPURA",
            "APRESENTACAO": "ODT 7000UI BLI 8 CPR",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 3 unidades"
          },
          {
            "EAN": 7891058022471,
            "FAMILIA": "DEPURA",
            "APRESENTACAO": "7.000 UI 8 CAP GEL",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 3 unidades"
          },
          {
            "EAN": 7891058022488,
            "FAMILIA": "DEPURA",
            "APRESENTACAO": "1.000 UI 30 CAP GEL",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 3 unidades"
          },
          {
            "EAN": 7891058022501,
            "FAMILIA": "DEPURA",
            "APRESENTACAO": "50.000 UI 4 CAP GEL",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 2 unidades"
          },
          {
            "EAN": 7891058022563,
            "FAMILIA": "DEPURA",
            "APRESENTACAO": "ODT 50000UI BLI 4 CPR",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 2 unidades"
          },
          {
            "EAN": 7891058025137,
            "FAMILIA": "LANTUS",
            "APRESENTACAO": "LANTUS 100 UI/ml sol inj 3 ml",
            "DESCONTO_PACIENTE": "20,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo"
          },
          {
            "EAN": 7891058009205,
            "FAMILIA": "LANTUS",
            "APRESENTACAO": "LANTUS 100 UI/ml sol inj x 10 ml",
            "DESCONTO_PACIENTE": "24,32%",
            "CONDICOES_DE_DESCONTOS": "Fixo"
          },
          {
            "EAN": 7891058003029,
            "FAMILIA": "LANTUS",
            "APRESENTACAO": "LANTUS Lantus Solostar -3ML",
            "DESCONTO_PACIENTE": "27,58%",
            "CONDICOES_DE_DESCONTOS": "Fixo"
          },
          {
            "EAN": 7891058034092,
            "FAMILIA": "OS-CAL",
            "APRESENTACAO": "500 MG COMP REV X 60",
            "DESCONTO_PACIENTE": "33,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 3 unidades"
          },
          {
            "EAN": 7891058011550,
            "FAMILIA": "OS-CAL D",
            "APRESENTACAO": "500 MG + 400 UI COMP REV X 60",
            "DESCONTO_PACIENTE": "33,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 3 unidades"
          },
          {
            "EAN": 7891058020958,
            "FAMILIA": "SOLIQUA",
            "APRESENTACAO": "100 IU/ML + 0,05 MG/ML SOL INJ CARP X 3 ML + SIST APLIC",
            "DESCONTO_PACIENTE": "19,09%",
            "CONDICOES_DE_DESCONTOS": "Fixo"
          },
          {
            "EAN": 7891058020965,
            "FAMILIA": "SOLIQUA",
            "APRESENTACAO": "100 IU/ML + 0,033 MG/ML SOL INJ CARP X 3 ML + SIST APLIC",
            "DESCONTO_PACIENTE": "19,09%",
            "CONDICOES_DE_DESCONTOS": "Fixo"
          },
          {
            "EAN": 7891058020965,
            "FAMILIA": "SOLIQUA",
            "APRESENTACAO": "100 IU/ML + 0,033 MG/ML SOL INJ CARP X 3 ML + SIST APLIC",
            "DESCONTO_PACIENTE": "46,06%",
            "CONDICOES_DE_DESCONTOS": "Combo - 3 unidades"
          },
          {
            "EAN": 7891058020958,
            "FAMILIA": "SOLIQUA",
            "APRESENTACAO": "100 IU/ML + 0,05 MG/ML SOL INJ CARP X 3 ML + SIST APLIC",
            "DESCONTO_PACIENTE": "46,06%",
            "CONDICOES_DE_DESCONTOS": "Combo - 3 unidades"
          },
          {
            "EAN": 7891058006259,
            "FAMILIA": "STILNOX CR",
            "APRESENTACAO": "12,5 MG COMP MULT LIB PROL X 20",
            "DESCONTO_PACIENTE": "90,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo e único (primeira unidade)"
          },
          {
            "EAN": 7891058006235,
            "FAMILIA": "STILNOX CR",
            "APRESENTACAO": "6,25 MG COMP MULT LIB PROL X 20",
            "DESCONTO_PACIENTE": "90,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo e único (primeira unidade)"
          },
          {
            "EAN": 7891058020323,
            "FAMILIA": "TOUJEO",
            "APRESENTACAO": "TOUJEO 300 UI/ml sol inj carp x 1,5 ml + sist aplic",
            "DESCONTO_PACIENTE": "28,80%",
            "CONDICOES_DE_DESCONTOS": "Fixo"
          },
          {
            "EAN": 7896422508049,
            "FAMILIA": "ZANIDIP",
            "APRESENTACAO": "10MG COM REV C/ 30",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo"
          },
          {
            "EAN": 4015630067572,
            "FAMILIA": "Accu-Check",
            "APRESENTACAO": "ACCU-CHEK® GUIDE Kit",
            "DESCONTO_PACIENTE": "100,00%",
            "CONDICOES_DE_DESCONTOS": "Único, limitado a um CPF, disponível para pacientes ativos em Lantus, Toujeo ou Soliqua, cadastrados a partir de Janeiro de 2019."
          },
          {
            "EAN": 4015630066841,
            "FAMILIA": "Accu-Check",
            "APRESENTACAO": "ACCU-CHEK GUIDE TEST STRIP 50CT",
            "DESCONTO_PACIENTE": "20,00%",
            "CONDICOES_DE_DESCONTOS": "Desconto sobre o preço sugerido, não há limite de compra"
          },
          {
            "EAN": 382903204786,
            "FAMILIA": "BD Ultra-Fine",
            "APRESENTACAO": "Agulhas BD Ultra-Fine 4 mm",
            "DESCONTO_PACIENTE": "50%/20%",
            "CONDICOES_DE_DESCONTOS": "50% de deconto apenas na primeira compra e 20% nas demais. Limitado a 2cx / mês"
          },
          {
            "EAN": 382900147031,
            "FAMILIA": "BD Ultra-Fine",
            "APRESENTACAO": "Agulhas BD Ultra-Fine 5 mm",
            "DESCONTO_PACIENTE": "50%/20%",
            "CONDICOES_DE_DESCONTOS": "50% de deconto apenas na primeira compra e 20% nas demais. Limitado a 2cx / mês"
          },
          {
            "EAN": 382900121031,
            "FAMILIA": "BD Ultra-Fine",
            "APRESENTACAO": "Agulhas BD Ultra-Fine 8 mm",
            "DESCONTO_PACIENTE": "50%/20%",
            "CONDICOES_DE_DESCONTOS": "50% de deconto apenas na primeira compra e 20% nas demais. Limitado a 2cx / mês"
          },
          {
            "EAN": 382903204892,
            "FAMILIA": "BD Ultra-Fine",
            "APRESENTACAO": "Agulhas BD Ultra-FineTM PentaPointTM 4 mm",
            "DESCONTO_PACIENTE": "50%/20%",
            "CONDICOES_DE_DESCONTOS": "50% de deconto apenas na primeira compra e 20% nas demais. Limitado a 2cx / mês"
          }
        
       ];
      /* var lista = [
          {
            "EAN": 7896422519908,
            "FAMILIA": "ALENTHUS",
            "APRESENTACAO": "37,5MG CAP GEL DURA LIB CONTROL C/ 30",
            "DESCONTO_PACIENTE": "65,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo e único",
            "LIMITE_MES": "1 unidade"
          },
          {
            "EAN": 7891058169015,
            "FAMILIA": "ALLEGRA",
            "APRESENTACAO": "180 MG COMP REV X 10",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 3 unidades",
            "LIMITE_MES": "3 combos"
          },
          {
            "EAN": 7891058022280,
            "FAMILIA": "ALLEGRA",
            "APRESENTACAO": "180MG 30 COMP",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo",
            "LIMITE_MES": "3 unidades"
          },
          {
            "EAN": 7891058002862,
            "FAMILIA": "ALLEGRA D",
            "APRESENTACAO": "24H180 MG  240 MG COMP X 5",
            "DESCONTO_PACIENTE": "25,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo",
            "LIMITE_MES": "3 unidades"
          },
          {
            "EAN": 7891058022778,
            "FAMILIA": "ALLENASAL",
            "APRESENTACAO": "ALLENASAL 55MCG",
            "DESCONTO_PACIENTE": "26,50%",
            "CONDICOES_DE_DESCONTOS": "Combo - 2 Unidades",
            "LIMITE_MES": "3 unidades"
          },
          {
            "EAN": 7891058008116,
            "FAMILIA": "ARAVA",
            "APRESENTACAO": "20 MG COMP REV X 30",
            "DESCONTO_PACIENTE": "40,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo",
            "LIMITE_MES": "3 unidades"
          },
          {
            "EAN": 7891058003210,
            "FAMILIA": "CLEXANE",
            "APRESENTACAO": "40 MG SOL INJ 2 SER X 0,4 ML",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo",
            "LIMITE_MES": "30 unidades"
          },
          {
            "EAN": 7891058004460,
            "FAMILIA": "CLEXANE",
            "APRESENTACAO": "40 MG SOL INJ 6 SER X 0,4 ML",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo",
            "LIMITE_MES": "10 unidades"
          },
          {
            "EAN": 7896070605268,
            "FAMILIA": "CLEXANE",
            "APRESENTACAO": "40 MG SOL INJ 10 SER X 0,4 ML",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo",
            "LIMITE_MES": "6 unidades"
          },
          {
            "EAN": 7896070605268,
            "FAMILIA": "CLEXANE",
            "APRESENTACAO": "40 MG SOL INJ 10 SER X 0,4 ML",
            "DESCONTO_PACIENTE": "40,00%",
            "CONDICOES_DE_DESCONTOS": "Progressivo | 3ª unidade em diante",
            "LIMITE_MES": "-"
          },
          {
            "EAN": 7896070605268,
            "FAMILIA": "CLEXANE",
            "APRESENTACAO": "40 MG SOL INJ 10 SER X 0,4 ML",
            "DESCONTO_PACIENTE": "45,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 3 unidades",
            "LIMITE_MES": "2 combos"
          },
          {
            "EAN": 7891058004460,
            "FAMILIA": "CLEXANE",
            "APRESENTACAO": "40 MG SOL INJ 6 SER X 0,4 ML",
            "DESCONTO_PACIENTE": "40,00%",
            "CONDICOES_DE_DESCONTOS": "Progressivo | 3ª unidade em diante",
            "LIMITE_MES": "2 combos"
          },
          {
            "EAN": 7891058022525,
            "FAMILIA": "DEPURA",
            "APRESENTACAO": "ODT 2000UI 30 CPR",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 3 unidades",
            "LIMITE_MES": "3 unidades"
          },
          {
            "EAN": 7891058022549,
            "FAMILIA": "DEPURA",
            "APRESENTACAO": "ODT 7000UI BLI 8 CPR",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 3 unidades",
            "LIMITE_MES": "3 unidades"
          },
          {
            "EAN": 7891058022471,
            "FAMILIA": "DEPURA",
            "APRESENTACAO": "7.000 UI 8 CAP GEL",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 3 unidades",
            "LIMITE_MES": "3 unidades"
          },
          {
            "EAN": 7891058022488,
            "FAMILIA": "DEPURA",
            "APRESENTACAO": "1.000 UI 30 CAP GEL",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 3 unidades",
            "LIMITE_MES": "3 unidades"
          },
          {
            "EAN": 7891058022501,
            "FAMILIA": "DEPURA",
            "APRESENTACAO": "50.000 UI 4 CAP GEL",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 2 unidades",
            "LIMITE_MES": "2 unidades"
          },
          {
            "EAN": 7891058022563,
            "FAMILIA": "DEPURA",
            "APRESENTACAO": "ODT 50000UI BLI 4 CPR",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 2 unidades",
            "LIMITE_MES": "2 unidades"
          },
          {
            "EAN": 7891058025137,
            "FAMILIA": "LANTUS",
            "APRESENTACAO": "LANTUS 100 UI/ml sol inj 3 ml",
            "DESCONTO_PACIENTE": "24,02%",
            "CONDICOES_DE_DESCONTOS": "Fixo",
            "LIMITE_MES": "10 unidades"
          },
          {
            "EAN": 7891058009205,
            "FAMILIA": "LANTUS",
            "APRESENTACAO": "LANTUS 100 UI/ml sol inj x 10 ml",
            "DESCONTO_PACIENTE": "24,02%",
            "CONDICOES_DE_DESCONTOS": "Fixo",
            "LIMITE_MES": "10 unidades"
          },
          {
            "EAN": 7891058003029,
            "FAMILIA": "LANTUS",
            "APRESENTACAO": "LANTUS Lantus Solostar -3ML",
            "DESCONTO_PACIENTE": "31,20%",
            "CONDICOES_DE_DESCONTOS": "Fixo",
            "LIMITE_MES": "10 unidades"
          },
          {
            "EAN": 7891058034092,
            "FAMILIA": "OS-CAL",
            "APRESENTACAO": "500 MG COMP REV X 60",
            "DESCONTO_PACIENTE": "33,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 3 unidades",
            "LIMITE_MES": "3 combos"
          },
          {
            "EAN": 7891058011550,
            "FAMILIA": "OS-CAL D",
            "APRESENTACAO": "500 MG + 400 UI COMP REV X 60",
            "DESCONTO_PACIENTE": "33,00%",
            "CONDICOES_DE_DESCONTOS": "Combo - 3 unidades",
            "LIMITE_MES": "3 combos"
          },
          {
            "EAN": 7891058020958,
            "FAMILIA": "SOLIQUA",
            "APRESENTACAO": "100 IU/ML + 0,05 MG/ML SOL INJ CARP X 3 ML + SIST APLIC",
            "DESCONTO_PACIENTE": "16,40%",
            "CONDICOES_DE_DESCONTOS": "a partir da 7ª unidade",
            "LIMITE_MES": "-"
          },
          {
            "EAN": 7891058020965,
            "FAMILIA": "SOLIQUA",
            "APRESENTACAO": "100 IU/ML + 0,033 MG/ML SOL INJ CARP X 3 ML + SIST APLIC",
            "DESCONTO_PACIENTE": "16,40%",
            "CONDICOES_DE_DESCONTOS": "a partir da 7ª unidade",
            "LIMITE_MES": "-"
          },
          {
            "EAN": 7891058020965,
            "FAMILIA": "SOLIQUA",
            "APRESENTACAO": "100 IU/ML + 0,033 MG/ML SOL INJ CARP X 3 ML + SIST APLIC",
            "DESCONTO_PACIENTE": "41,50%",
            "CONDICOES_DE_DESCONTOS": "Da 1ª a 6ª unidade",
            "LIMITE_MES": "10 unidades"
          },
          {
            "EAN": 7891058020958,
            "FAMILIA": "SOLIQUA",
            "APRESENTACAO": "100 IU/ML + 0,05 MG/ML SOL INJ CARP X 3 ML + SIST APLIC",
            "DESCONTO_PACIENTE": "41,50%",
            "CONDICOES_DE_DESCONTOS": "Da 1ª a 6ª unidade",
            "LIMITE_MES": "10 unidades"
          },
          {
            "EAN": 7897595902146,
            "FAMILIA": "STILNOX",
            "APRESENTACAO": "10 MG COMP REV X 20",
            "DESCONTO_PACIENTE": "20,00%",
            "CONDICOES_DE_DESCONTOS": "Progressivo | 2ª unidade em diante",
            "LIMITE_MES": "2 unidades"
          },
          {
            "EAN": 7897595902146,
            "FAMILIA": "STILNOX",
            "APRESENTACAO": "10 MG COMP REV X 20",
            "DESCONTO_PACIENTE": "40,00%",
            "CONDICOES_DE_DESCONTOS": "Progressivo | 1ª unidade",
            "LIMITE_MES": "2 unidades"
          },
          {
            "EAN": 7891058006259,
            "FAMILIA": "STILNOX CR",
            "APRESENTACAO": "12,5 MG COMP MULT LIB PROL X 20",
            "DESCONTO_PACIENTE": "40,00%",
            "CONDICOES_DE_DESCONTOS": "Progressivo | 1ª unidade",
            "LIMITE_MES": "2 unidades"
          },
          {
            "EAN": 7891058006235,
            "FAMILIA": "STILNOX CR",
            "APRESENTACAO": "6,25 MG COMP MULT LIB PROL X 20",
            "DESCONTO_PACIENTE": "40,00%",
            "CONDICOES_DE_DESCONTOS": "Progressivo | 1ª unidade",
            "LIMITE_MES": "2 unidades"
          },
          {
            "EAN": 7891058006259,
            "FAMILIA": "STILNOX CR",
            "APRESENTACAO": "12,5 MG COMP MULT LIB PROL X 20",
            "DESCONTO_PACIENTE": "20,00%",
            "CONDICOES_DE_DESCONTOS": "Progressivo | 2ª unidade em diante",
            "LIMITE_MES": "2 unidades"
          },
          {
            "EAN": 7891058006235,
            "FAMILIA": "STILNOX CR",
            "APRESENTACAO": "6,25 MG COMP MULT LIB PROL X 20",
            "DESCONTO_PACIENTE": "20,00%",
            "CONDICOES_DE_DESCONTOS": "Progressivo | 2ª unidade em diante",
            "LIMITE_MES": "2 unidades"
          },
          {
            "EAN": 7891058020323,
            "FAMILIA": "TOUJEO",
            "APRESENTACAO": "TOUJEO 300 UI/ml sol inj carp x 1,5 ml + sist aplic",
            "DESCONTO_PACIENTE": "48,10%",
            "CONDICOES_DE_DESCONTOS": "Da 1ª a 6ª unidade",
            "LIMITE_MES": "-"
          },
          {
            "EAN": 7891058020347,
            "FAMILIA": "TOUJEO",
            "APRESENTACAO": "TOUJEO 300 UI/ml sol inj 3 carp x 1,5 ml + 3 sist aplic",
            "DESCONTO_PACIENTE": "48,10%",
            "CONDICOES_DE_DESCONTOS": "Da 1ª a 6ª unidade",
            "LIMITE_MES": "-"
          },
          {
            "EAN": 7891058020323,
            "FAMILIA": "TOUJEO",
            "APRESENTACAO": "TOUJEO 300 UI/ml sol inj carp x 1,5 ml + sist aplic",
            "DESCONTO_PACIENTE": "25,58%",
            "CONDICOES_DE_DESCONTOS": "a partir da 7ª unidade",
            "LIMITE_MES": "10 unidades"
          },
          {
            "EAN": 7891058020347,
            "FAMILIA": "TOUJEO",
            "APRESENTACAO": "TOUJEO 300 UI/ml sol inj 3 carp x 1,5 ml + 3 sist aplic",
            "DESCONTO_PACIENTE": "25,58%",
            "CONDICOES_DE_DESCONTOS": "a partir da 7ª unidade",
            "LIMITE_MES": "10 unidades"
          },
          {
            "EAN": 7896422508049,
            "FAMILIA": "ZANIDIP",
            "APRESENTACAO": "10MG COM REV C/ 30",
            "DESCONTO_PACIENTE": "30,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo",
            "LIMITE_MES": "3 unidades"
          },
          {
            "EAN": 7896422515719,
            "FAMILIA": "ZODEL",
            "APRESENTACAO": "ZODEL COMP REV 100MG - 28",
            "DESCONTO_PACIENTE": "43,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo",
            "LIMITE_MES": "3 unidades"
          },
          {
            "EAN": 7896422515504,
            "FAMILIA": "ZODEL",
            "APRESENTACAO": "ZODEL COMP REV 50MG - 28",
            "DESCONTO_PACIENTE": "40,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo",
            "LIMITE_MES": "3 unidades"
          },
          {
            "EAN": 7896422520539,
            "FAMILIA": "ZODEL",
            "APRESENTACAO": "COMP REV 50MG C/ 30",
            "DESCONTO_PACIENTE": "35,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo",
            "LIMITE_MES": "2 unidades"
          },
          {
            "EAN": 7896422520546,
            "FAMILIA": "ZODEL",
            "APRESENTACAO": "COMP REV 100MG C/ 30",
            "DESCONTO_PACIENTE": "38,00%",
            "CONDICOES_DE_DESCONTOS": "Fixo",
            "LIMITE_MES": "2 unidades"
          }
        ];
      */


        area.empty();

        lista.forEach(function(linha){
            if(encontrou(linha)){
                HTML += "<tr>";

                HTML += "<td class='font-9 text-center' style='width: 86px'>" + linha.EAN + "</td>";
                HTML += "<td class='font-9 text-center' style='width: 86px'>" + linha.FAMILIA + "</td>";
                HTML += "<td class='font-9 text-center' style='width: 56px'>" + linha.DESCONTO_PACIENTE + "</td>";
                HTML += "<td class='font-9 text-center' style='width: 213px'>" + linha.APRESENTACAO + "</td>";
                HTML += "<td class='font-9 text-center' style='width: 150px'>" + linha.CONDICOES_DE_DESCONTOS + "</td>";
                //HTML += "<td class='font-9 text-center' style='width: 86px'>" + linha.LIMITE_MES + "</td>";

                HTML += "</tr>";
            }
        }); 

        area.html(HTML);
    };

    $input.keyup(pesquisar);
    $("#btn-pesquisa-st").click(pesquisar);

    pesquisar();
});