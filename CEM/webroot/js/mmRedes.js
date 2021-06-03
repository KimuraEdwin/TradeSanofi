$(document).ready(function (b) {
    var $input = $("#txt-pesquisa-st");

    var encontrou = function(linha) {
        var p = $input.val().toUpperCase();
        var encontrou = false;

        if(linha.COD.toString().includes(p)){
            encontrou = true;
        }
        else if(linha.EAN.toString().includes(p)){
            encontrou = true;
        }
        else if(linha.FRANQUIA.toString().includes(p)){
            encontrou = true;
        }
        else if(linha.DESCRICAO.toString().includes(p)){
            encontrou = true;
        }
        else if(linha.FAMILIA.toString().includes(p)){
            encontrou = true;
        }
        else if(linha.CLASSIFICACAO.toString().includes(p)){
            encontrou = true;
        }


        return encontrou;
    };


    var pesquisar = function () {
        var HTML = "";
        
        var area = $("#filtro-produto");

        var lista = [
            {
              "COD": "ACO001",
              "EAN": 7896422505741,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ACICLOVIR CREME 50MG/G - BG C/ 10G",
              "FAMILIA": "ACICLOVIR",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ACL001",
              "EAN": 7896422504058,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ACICLOVIR COMPRIMIDO 200MG C/25",
              "FAMILIA": "ACICLOVIR",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ABZ001",
              "EAN": 7896422511728,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ALBENDAZOL COMP MASTIG 400MG - 1",
              "FAMILIA": "ALBENDAZOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ALO001",
              "EAN": 7896422516921,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ALOPURINOL COMP 100 MG C/ 30",
              "FAMILIA": "ALOPURINOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ALO002",
              "EAN": 7896422516945,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ALOPURINOL COMP 300 MG C/ 30",
              "FAMILIA": "ALOPURINOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ALP002",
              "EAN": 7896422517003,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ALPRAZOLAM COMP 0,5MG C/30 (B1)",
              "FAMILIA": "ALPRAZOLAM",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ALP003",
              "EAN": 7896422517034,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ALPRAZOLAM COMP 1MG C/ 30 (B1)",
              "FAMILIA": "ALPRAZOLAM",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ALP004",
              "EAN": 7896422517041,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ALPRAZOLAM COMP 2MG C/ 30 (B1)",
              "FAMILIA": "ALPRAZOLAM",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "BEA004",
              "EAN": 7896422505789,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "BES ANLODIPINO COMP 5MG C/ 30",
              "FAMILIA": "ANLODIPINO",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "AZI002",
              "EAN": 7896422514866,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "AZITROMICINA DI-HIDRAT. COM REV 500MG-3",
              "FAMILIA": "AZITROMICINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "AZI003",
              "EAN": 7896422514873,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "AZITROMICINA DI-HIDRAT. COMP REV 500MG-5",
              "FAMILIA": "AZITROMICINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "BRO003",
              "EAN": 7896422505963,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "BROMAZEPAM COMPR 3MG C/30 (B1)",
              "FAMILIA": "BROMAZEPAM",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "BRO004",
              "EAN": 7896422505970,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "BROMAZEPAM COMPR 6MG C/30 (B1)",
              "FAMILIA": "BROMAZEPAM",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "BRM001",
              "EAN": 7896422507158,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "BROMOPRIDA CAPSULAS 10MG - 20",
              "FAMILIA": "BROMOPRIDA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CVL004",
              "EAN": 7896422519373,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CARVEDILOL COMP 12,5MG - 30",
              "FAMILIA": "CARVEDILOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CVL006",
              "EAN": 7896422519403,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CARVEDILOL COMP 25MG - 30",
              "FAMILIA": "CARVEDILOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CVL010",
              "EAN": 7896422519342,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CARVEDILOL COMP 6,25MG - 30",
              "FAMILIA": "CARVEDILOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CDB003",
              "EAN": 7896422507301,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CETOCONA+D.BETAM+S.NEOMI CREME",
              "FAMILIA": "CETOCONAZ.+BETAM+NEOMI",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CDB004",
              "EAN": 7896422507318,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CETOCONA+D.BETAM+S.NEOMI POMADA",
              "FAMILIA": "CETOCONAZ.+BETAM+NEOMI",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CDB001",
              "EAN": 7896422506274,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CETOCONAZOL+DIP.BETAMETASONA CREME",
              "FAMILIA": "CETOCONAZOL+BETAMET.",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CDB002",
              "EAN": 7896422506250,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CETOCONAZOL+DIP BETAMETASONA POMADA",
              "FAMILIA": "CETOCONAZOL+BETAMET.",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CEN001",
              "EAN": 7896422507295,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CETOPROFENO COMP REV 100MG",
              "FAMILIA": "CETOPROFENO",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CEN004",
              "EAN": 7896422506649,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CETOPROFENO SOL 20MG/ML - GTS - SA",
              "FAMILIA": "CETOPROFENO",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CEN006",
              "EAN": 7891058002961,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CETOPROFENO COMP 150MG C/ 10",
              "FAMILIA": "CETOPROFENO",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CPF003",
              "EAN": 7891058001612,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CIPROFIBRATO 100MG X 30 SA",
              "FAMILIA": "CIPROFIBRATO",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CCI003",
              "EAN": 7896422507103,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL CIPROFLOXACINO COMP REV 500MG C/14",
              "FAMILIA": "CIPROFLOXACINO",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CIR002",
              "EAN": 7896422515580,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "BROMIDR. CITALOPRAM COMP 20MG C/30 (C1)",
              "FAMILIA": "CITALOPRAM",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CIT001",
              "EAN": 7896422515016,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLONAZEPAM COMP 0,5MG C/60(B1)",
              "FAMILIA": "CLONAZEPAM",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CIT002",
              "EAN": 7896422515023,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLONAZEPAM COMP 2MG C/60 (B1)",
              "FAMILIA": "CLONAZEPAM",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CIT003",
              "EAN": 7896422511865,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLONAZEPAM GOTAS 2,5MG/ML (B1)",
              "FAMILIA": "CLONAZEPAM",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CIT006",
              "EAN": 7896422514644,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLONAZEPAM COMP 0,5MG C/30(B1)",
              "FAMILIA": "CLONAZEPAM",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CIT007",
              "EAN": 7896422514651,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLONAZEPAM COMP 2MG C/30 (B1)",
              "FAMILIA": "CLONAZEPAM",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ACC001",
              "EAN": 7896422515399,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "AC CLOSTEBOL+SULF NEOM CR DERM",
              "FAMILIA": "CLOSTEBOL+NEOMICINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ACC002",
              "EAN": 7896422515405,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "AC CLOSTEBOL+SULF NEOM CR VAG",
              "FAMILIA": "CLOSTEBOL+NEOMICINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "SIM003",
              "EAN": 7896422505550,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "SIMETICONA COMPRIMIDO 40MG- 20",
              "FAMILIA": "SIMETICONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "SIM007",
              "EAN": 7896422520669,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "SIMETICONA CAP GEL MOLE 125MG-10",
              "FAMILIA": "SIMETICONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "DPO001",
              "EAN": 7896422507066,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DIPIRONA MONOIDRATADA COMP 500MG-240",
              "FAMILIA": "DIPIRONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "DPO003",
              "EAN": 7896422507059,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DIPIRONA MONOIDRATADA COMP 500MG- 30",
              "FAMILIA": "DIPIRONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "DPO004",
              "EAN": 7896422506243,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DIPIRONA MONO SOL ORAL 50MG/ML - SA",
              "FAMILIA": "DIPIRONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "DPO006",
              "EAN": 7896422506236,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DIPIRONA MONO 500MG/ML GTS C/20 ML - SA",
              "FAMILIA": "DIPIRONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "DOM002",
              "EAN": 7896422513173,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DOMPERIDONA SUSP 1MG/ML 100 ML",
              "FAMILIA": "DOMPERIDONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ESI001",
              "EAN": 7896422525398,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "OXAL ESCITALOPRAM 10MG COM REV 30 (C1)",
              "FAMILIA": "ESCITALOPRAM",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ESI002",
              "EAN": 7896422525466,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "OXAL ESCITALOPRAM 20MG COM REV 30 (C1)",
              "FAMILIA": "ESCITALOPRAM",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ESI003",
              "EAN": 7896422522632,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "OXAL ESCITALOPRAM 15MG COMP REV C/30(C1)",
              "FAMILIA": "ESCITALOPRAM",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ESO001",
              "EAN": 7896206425852,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ESOMEPRAZOL MAG COMP REV 20 MG C/14 - AZ",
              "FAMILIA": "ESOMEPRAZOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ESO002",
              "EAN": 7896206425869,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ESOMEPRAZOL MAG COMP REV 20 MG C/28 - AZ",
              "FAMILIA": "ESOMEPRAZOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ESO003",
              "EAN": 7896206425890,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ESOMEPRAZOL MAG COMP REV 40 MG C/14 - AZ",
              "FAMILIA": "ESOMEPRAZOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ESO004",
              "EAN": 7896206425906,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ESOMEPRAZOL MAG COMP REV 40 MG C/28 - AZ",
              "FAMILIA": "ESOMEPRAZOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "FLZ002",
              "EAN": 7896422505062,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "FLUCONAZOL CAPSULA 150MG C/1",
              "FAMILIA": "FLUCONAZOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "FLZ003",
              "EAN": 7896422505079,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "FLUCONAZOL CAPSULA 150MG C/2",
              "FAMILIA": "FLUCONAZOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "GDA002",
              "EAN": 7896422505307,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "GLIMEPIRIDA COM 2MG C/30",
              "FAMILIA": "GLIMEPIRIDA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "IBU001",
              "EAN": 7896422519793,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "IBUPROFENO 50 MG/ML SUSP ORAL 30 ML",
              "FAMILIA": "IBUPROFENO",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "IBU002",
              "EAN": 7896422519830,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "IBUPROFENO 100 MG/ML SUSP ORAL 20 ML",
              "FAMILIA": "IBUPROFENO",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "LFX001",
              "EAN": 7896422504218,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LEVOFLOXACINO COMP REV 500MG C/ 7",
              "FAMILIA": "LEVOFLOXACINO",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "LFX002",
              "EAN": 7896422504225,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LEVOFLOXACINO COMP REV 500MG C/ 10",
              "FAMILIA": "LEVOFLOXACINO",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "LNA002",
              "EAN": 7896422509565,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LOSART+HCTZ 100+25MG COMP-30",
              "FAMILIA": "LOSARTANA+HCTZ",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CMN002",
              "EAN": 7896422520591,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR MEMANTINA COMP REV 10MG (C1) C/ 30",
              "FAMILIA": "MEMANTINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "MMZ001",
              "EAN": 7896422517621,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "MAL MIDAZOLAM COMP REV 15MG C/30 (B1)",
              "FAMILIA": "MIDAZOLAM",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "NIS003",
              "EAN": 7896422519229,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "NISTATINA+OXIDO ZINCO POM 60G",
              "FAMILIA": "NISTATINA+ÓXIDO ZINCO",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "OXC001",
              "EAN": 7896422511902,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "OXCARBAZEP COMP REV300MG-30 (C1)",
              "FAMILIA": "OXCARBAZEPINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "OXC002",
              "EAN": 7896422511940,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "OXCARBAZEP COMP REV 600MG-30 (C1)",
              "FAMILIA": "OXCARBAZEPINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "PAN003",
              "EAN": 7896422517263,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PANTOPRAZOL SOD. SESQ.COMP 20MG C/42-ALU",
              "FAMILIA": "PANTOPRAZOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "PAN005",
              "EAN": 7896422506595,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PANTOPRAZOL SOD. SESQ.COMP 20MG C/28-ALU",
              "FAMILIA": "PANTOPRAZOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "PAN007",
              "EAN": 7896422517287,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PANTOPRAZOL SOD. SESQ.COMP 40MG C/42-ALU",
              "FAMILIA": "PANTOPRAZOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "PAN009",
              "EAN": 7896422506625,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PANTOPRAZOL SOD. SESQ.COMP 40MG C/28-ALU",
              "FAMILIA": "PANTOPRAZOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "PXE002",
              "EAN": 7896422515894,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL PAROXETINA COM 20MG C/30 (C1)",
              "FAMILIA": "PAROXETINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "DCA005",
              "EAN": 7896422504386,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DICLOFENACO POTASSICO COM C/20",
              "FAMILIA": "POTASSICO",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "PRD001",
              "EAN": 7896422517447,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PREDNISONA COMP 20MG C/ 10",
              "FAMILIA": "PREDNISONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "PRD003",
              "EAN": 7896422517485,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PREDNISONA COMP 5MG C/ 20",
              "FAMILIA": "PREDNISONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "PGB002",
              "EAN": 7896422501187,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PREGABALINA 75MG X 30 CAPS (C1)",
              "FAMILIA": "PREGABALINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "PGB003",
              "EAN": 7896422501330,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PREGABALINA 150MG X 30 CAPS (C1)",
              "FAMILIA": "PREGABALINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "HQT005",
              "EAN": 7896422500500,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "HEMIFUM.QUETIAPINA COMP REV 25MGC/30(C1)",
              "FAMILIA": "QUETIAPINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "RIS002",
              "EAN": 7896422504072,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "RISPERIDONA COMP REV 2MG C/30  (C1)",
              "FAMILIA": "RISPERIDONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "RIS001",
              "EAN": 7896422504188,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "RISPERIDONA COMP REV 1MG C/30  (C1)",
              "FAMILIA": "RISPERIDONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "SEZ001",
              "EAN": 7896422505680,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "SECNIDAZOL COMP REV 1000MG C/2",
              "FAMILIA": "SECNIDAZOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "SEZ002",
              "EAN": 7896422505697,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "SECNIDAZOL COMP REV 1000MG C/4",
              "FAMILIA": "SECNIDAZOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "SER001",
              "EAN": 7896422506304,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL SERTRALINA 50MG COMP REV C/30 (C1)",
              "FAMILIA": "SERTRALINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CSI007",
              "EAN": 7896422525183,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CITRATO SILDENAFILA 50MG COMP REV C/2",
              "FAMILIA": "SILDENAFILA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CSI009",
              "EAN": 7896422525190,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CITRATO SILDENAFILA 50 MG COMP REV C/4",
              "FAMILIA": "SILDENAFILA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CSI010",
              "EAN": 7896422525206,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CITRATO SILDENAFILA 50 MG COMP REV C/8",
              "FAMILIA": "SILDENAFILA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "SIM008",
              "EAN": 7896422504744,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "SIMETICONA EMUL ORAL 75MG/ML GT",
              "FAMILIA": "SIMETICONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "DCA007",
              "EAN": 7896422504492,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DICLOFENACO SODICO COMP C/20",
              "FAMILIA": "SODICO",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "TAD001",
              "EAN": 7896422501668,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "TADALAFILA 20 MG COM REV C/ 1",
              "FAMILIA": "TADALAFILA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "TAD002",
              "EAN": 7896422501675,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "TADALAFILA 20 MG COM REV C/ 2",
              "FAMILIA": "TADALAFILA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "TAD003",
              "EAN": 7896422501682,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "TADALAFILA 20 MG COM REV C/ 4",
              "FAMILIA": "TADALAFILA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "TAD004",
              "EAN": 7896422501651,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "TADALAFILA 5 MG COM REV C/ 30",
              "FAMILIA": "TADALAFILA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CTA001",
              "EAN": 7899095236509,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR.TANSULOSINA CÁPSULAS 0,4MG C/ 30",
              "FAMILIA": "TANSULOZINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "TVP001",
              "EAN": 7896422533713,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "TRAVOPROSTA 0,04 MG/ML FR PLAS X 2,5 ML",
              "FAMILIA": "TRAVOPROSTA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "VEN001",
              "EAN": 7896422513951,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL VENLAFAXINA CAP 75MG-30(C1)",
              "FAMILIA": "VENLAFAXINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "VEN002",
              "EAN": 7896422513968,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL VENLAFAXINA CAP 150MG-30(C1)",
              "FAMILIA": "VENLAFAXINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "MIR001",
              "EAN": 7896422506052,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "MIRTAZAPINA COMP. ORODISP 45MG C/30 (C1)",
              "FAMILIA": "MIRTAZAPINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "MIR002",
              "EAN": 7896422506069,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "MIRTAZAPINA COMP. ORODISP 30MG C/30 (C1)",
              "FAMILIA": "MIRTAZAPINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "MIR003",
              "EAN": 7896422506076,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "MIRTAZAPINA COMP. ORODISP 15MG C/30 (C1)",
              "FAMILIA": "MIRTAZAPINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CEX001",
              "EAN": 7896422506083,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CEFUROXIMA AXETIL COMP. 500MG C/14",
              "FAMILIA": "CEFUROXIMA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CLE010",
              "EAN": 7891058003210,
              "FRANQUIA": "HOSPITALAR",
              "DESCRICAO": "CLEXANE SAFETY LOCK 40MG 2 SERINGAS",
              "FAMILIA": "CLEXANE",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CLE011",
              "EAN": 7896070605268,
              "FRANQUIA": "HOSPITALAR",
              "DESCRICAO": "CLEXANE SAFETY LOCK 40MG 10 SERINGAS",
              "FAMILIA": "CLEXANE",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CLE015",
              "EAN": 7891058004460,
              "FRANQUIA": "HOSPITALAR",
              "DESCRICAO": "CLEXANE SAFETY LOCK 40MG 6 SERINGAS",
              "FAMILIA": "CLEXANE",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "LAN007",
              "EAN": 7891058003029,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "LANTUS SOLOSTAR 1 X 3 ML",
              "FAMILIA": "LANTUS",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "LAN006",
              "EAN": 7891058025137,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "LANTUS 100UI CARP 1 X 3 ML",
              "FAMILIA": "LANTUS",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PRO005",
              "EAN": 7896070601765,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "PROFENID ENTERICO 100MG 20 COMPR.",
              "FAMILIA": "PROFENID",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PRO001",
              "EAN": 7896070601772,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "BI-PROFENID 150MG 10 COMPR.",
              "FAMILIA": "PROFENID",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PRO007",
              "EAN": 7896070601895,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "PROFENID GOTAS DOSING TUBE 20ML",
              "FAMILIA": "PROFENID",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PRO013",
              "EAN": 7891058011499,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "PROFENID PROTECT 10 CAPS",
              "FAMILIA": "PROFENID",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PUR001",
              "EAN": 7897595901033,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "PURAN T4 100MCG CPR 2X15 V",
              "FAMILIA": "PURAN T4",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PUR002",
              "EAN": 7897595903372,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "PURAN T4 112MCG 2X15 S VD",
              "FAMILIA": "PURAN T4",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PUR007",
              "EAN": 7897595901309,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "PURAN T4 25MCG CPR 2X15 V",
              "FAMILIA": "PURAN T4",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PUR008",
              "EAN": 7897595901316,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "PURAN T4 50MCG CPR 2X15 V",
              "FAMILIA": "PURAN T4",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PUR009",
              "EAN": 7897595901323,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "PURAN T4 75MCG CPR 2X15 V",
              "FAMILIA": "PURAN T4",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PUR010",
              "EAN": 7897595903365,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "PURAN T4 88MCG 2X15 S VD",
              "FAMILIA": "PURAN T4",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PUR022",
              "EAN": 7891058003562,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "PURAN T4 37,5MCG COMP 2 X 15 VD",
              "FAMILIA": "PURAN T4",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PUR023",
              "EAN": 7891058003579,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "PURAN T4 62,5MCG COMP 2 X 15 VD",
              "FAMILIA": "PURAN T4",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "STL002",
              "EAN": 7897595902146,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "STILNOX CPR 1X20 V (B1)",
              "FAMILIA": "STILNOX",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "STL006",
              "EAN": 7891058006259,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "STILNOX CR 12,5 MG CX 20 CPRS (B1)",
              "FAMILIA": "STILNOX",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "STL004",
              "EAN": 7891058006235,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "STILNOX CR 6,25 MG CX 20 CPRS (B1)",
              "FAMILIA": "STILNOX",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "TOU002",
              "EAN": 7891058020323,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "TOUJEO 450 U/1,5 ML CANETA SOLOSTAR X 1",
              "FAMILIA": "TOUJEO",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ATH001",
              "EAN": 7896422514460,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "ALENTHUS XR CAP 150MG C/30(C1)",
              "FAMILIA": "ALENTHUS",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ATH002",
              "EAN": 7896422514484,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "ALENTHUS XR CAP 75MG C/30 (C1)",
              "FAMILIA": "ALENTHUS",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ATH007",
              "EAN": 7896422519908,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "ALENTHUS XR CAP 37,5MG C/30(C1)",
              "FAMILIA": "ALENTHUS",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "LAL005",
              "EAN": 7896422504409,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "LANELI DHA CAP GEL C/ 60",
              "FAMILIA": "LANELI",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PYL001",
              "EAN": 7896422507769,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "PYLORIPAC IBP 7+28 LANSO 30MG",
              "FAMILIA": "PYLORIPAC",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PYL004",
              "EAN": 7896422518710,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "PYLORIPAC RETRAT C/ 10 BL",
              "FAMILIA": "PYLORIPAC",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PYL005",
              "EAN": 7896422519489,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "PYLORIPAC C/ 14",
              "FAMILIA": "PYLORIPAC",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ZPS001",
              "EAN": 7896422528719,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "ZINPASS COMP REV 10MG - 30",
              "FAMILIA": "ZINPASS",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ZPS002",
              "EAN": 7896422528764,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "ZINPASS COMP REV 20MG - 30",
              "FAMILIA": "ZINPASS",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ZPS007",
              "EAN": 7896422528771,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "ZINPASS COMP REV 20MG C/ 60",
              "FAMILIA": "ZINPASS",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ZPS006",
              "EAN": 7896422528726,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "ZINPASS COMP REV 10MG C/ 60",
              "FAMILIA": "ZINPASS",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ZOD004",
              "EAN": 7896422520539,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "ZODEL COMP REV 50MG C/ 30 (C1)",
              "FAMILIA": "ZODEL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ZOD005",
              "EAN": 7896422520546,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "ZODEL COMP REV 100MG C/ 30 (C1)",
              "FAMILIA": "ZODEL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "SLQ001",
              "EAN": 7891058020958,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "SOLIQUA 300IU/150 MCG/3 ML SOLOSTAR",
              "FAMILIA": "SOLIQUA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "SLQ002",
              "EAN": 7891058020965,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "SOLIQUA 300IU/99 MCG/3 ML SOLOSTAR",
              "FAMILIA": "SOLIQUA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "",
              "EAN": 7896422544917,
              "FRANQUIA": "",
              "DESCRICAO": "BARISTAR CAP GEL MOLE X 100",
              "FAMILIA": "",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "",
              "EAN": 7896422544894,
              "FRANQUIA": "",
              "DESCRICAO": "BARISTAR CAP GEL MOLE X 30",
              "FAMILIA": "",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "",
              "EAN": 7896422513265,
              "FRANQUIA": "",
              "DESCRICAO": "OSTEONUTRI COMP REV 600MG+400UI C/30",
              "FAMILIA": "",
              "CLASSIFICACAO": ""
            }
          ];


        area.empty();

        lista.forEach(function(linha){
            if(encontrou(linha)){
                HTML += "<tr>";

                HTML += "<td class='font-9 text-center' style='width: 86px'>" + linha.COD + "</td>";
                HTML += "<td class='font-9 text-center' style='width: 86px'>" + linha.EAN + "</td>";
                HTML += "<td class='font-9 text-center' style='width: 56px'>" + linha.FRANQUIA + "</td>";
                HTML += "<td class='font-9 text-center' style='width: 213px'>" + linha.DESCRICAO + "</td>";
                HTML += "<td class='font-9 text-center' style='width: 150px'>" + linha.FAMILIA + "</td>";
                HTML += "<td class='font-9 text-center' style='width: 86px'>" + linha.CLASSIFICACAO + "</td>";

                HTML += "</tr>";
            }
        }); 

        area.html(HTML);
    };

    $input.keyup(pesquisar);
    $("#btn-pesquisa-st").click(pesquisar);

    pesquisar();
});