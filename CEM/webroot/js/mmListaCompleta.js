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
              "COD": "HXT001",
              "EAN": 7891058022457,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "HEXAMEDINA+TETRACAINA COL 50ML (C1)",
              "FAMILIA": "HEXAMEDINA+TETRACAINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "RFM001",
              "EAN": 7896422520980,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "RIFAMICINA SV SODICA 10MG/ML SPRAY 20ML",
              "FAMILIA": "RIFAMICINA",
              "CLASSIFICACAO": "Must Win"
            },
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
              "COD": "ACL002",
              "EAN": 7896422504065,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ACICLOVIR COMPRIMIDO 400MG C/30",
              "FAMILIA": "ACICLOVIR",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ADA001",
              "EAN": 7896422515122,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ADAPALENO GEL TOP 1 MG/G",
              "FAMILIA": "ADAPALENO",
              "CLASSIFICACAO": ""
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
              "COD": "ALP001",
              "EAN": 7896422516990,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ALPRAZOLAM COMP 0,25MG C/30 (B1)",
              "FAMILIA": "ALPRAZOLAM",
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
              "COD": "AMT001",
              "EAN": 7896422511964,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL AMITRIPTILI COMP 25MG-20 (C1)",
              "FAMILIA": "AMITRIPTILINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "AMT002",
              "EAN": 7896422511995,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL AMITRIPTILI COMP 75MG-20 (C1)",
              "FAMILIA": "AMITRIPTILINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "AMO007",
              "EAN": 7896422504119,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "AMOXICILINA CAPSULA 500MG C/ 15",
              "FAMILIA": "AMOXICILINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "AMO008",
              "EAN": 7896422504126,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "AMOXICILINA CAPSULA 500MG C/ 21",
              "FAMILIA": "AMOXICILINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "AMO009",
              "EAN": 7896422504133,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "AMOXICILINA CAPSULA 500MG C/ 30",
              "FAMILIA": "AMOXICILINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "BEA002",
              "EAN": 7896422505802,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "BES ANLODIPINO COMP 10MG C/ 30",
              "FAMILIA": "ANLODIPINO",
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
              "COD": "ATE006",
              "EAN": 7896422506366,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ATENOLOL COMPRIMIDO 100MG",
              "FAMILIA": "ATENOLOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ATE007",
              "EAN": 7896422506342,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ATENOLOL COMPRIMIDO 25MG C/30",
              "FAMILIA": "ATENOLOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ATE008",
              "EAN": 7896422506359,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ATENOLOL COMPRIMIDO 50MG",
              "FAMILIA": "ATENOLOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ATE001",
              "EAN": 7896422515658,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ATENOLOL+CLORTALIDONA 100+25MG C/30",
              "FAMILIA": "ATENOLOL+CLORTALIDONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ATE002",
              "EAN": 7896422516075,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ATENOLOL+CLORTALIDONA 100+25MG C/60",
              "FAMILIA": "ATENOLOL+CLORTALIDONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ATE003",
              "EAN": 7896422515641,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ATENOLOL+CLORTALIDONA 50+12,5MG C/30",
              "FAMILIA": "ATENOLOL+CLORTALIDONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ATE004",
              "EAN": 7896422516068,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ATENOLOL+CLORTALIDONA 50+12,5MG C/60",
              "FAMILIA": "ATENOLOL+CLORTALIDONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ATO001",
              "EAN": 7896422520959,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ATORVASTATINA CALCICA COMP REV 10MG - 30",
              "FAMILIA": "ATORVASTATINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ATO003",
              "EAN": 7896422525848,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ATORVASTATINA CALCICA COMP REV 40MG-30",
              "FAMILIA": "ATORVASTATINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "AZI001",
              "EAN": 7896422513630,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "AZITROMICINA DI-HIDRAT COMP REV 500MG -2",
              "FAMILIA": "AZITROMICINA",
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
              "COD": "VBE004",
              "EAN": 7896422505345,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "VAL BETAMETASONA CR 1MG/G - 30G",
              "FAMILIA": "BETAMETASONA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "VBE007",
              "EAN": 7896422505338,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "VAL BETAMETASONA POM 1MG/G - 30G",
              "FAMILIA": "BETAMETASONA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "DBS001",
              "EAN": 7896422506830,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DIP BETAMETASO+SULF GENTA CREME",
              "FAMILIA": "BETAMETASONA+GENTA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "DBS002",
              "EAN": 7896422506847,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DIP BETAMETASON+SULF GENTA POM",
              "FAMILIA": "BETAMETASONA+GENTA",
              "CLASSIFICACAO": ""
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
              "COD": "CBO001",
              "EAN": 7896422505147,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR BROMEXINA XAROPE PED.",
              "FAMILIA": "BROMEXINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CBO002",
              "EAN": 7896422505154,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR BROMEXINA XAROPE ADULTO",
              "FAMILIA": "BROMEXINA",
              "CLASSIFICACAO": ""
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
              "COD": "CAP008",
              "EAN": 7896422503709,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CAPTOPRIL 25 MG C/ 30",
              "FAMILIA": "CAPTOPRIL",
              "CLASSIFICACAO": ""
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
              "COD": "CFM002",
              "EAN": 7891058022112,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CEFALEXINA MONOIDRATADA 500MG 10 CAPS",
              "FAMILIA": "CEFALEXINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CFM001",
              "EAN": 7891058022105,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CEFALEXINA MONOIDRATADA 500MG 8 CAPS",
              "FAMILIA": "CEFALEXINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "DCE001",
              "EAN": 7896422507028,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DICL CETIRIZINA COMP 10MG C/12",
              "FAMILIA": "CETIRIZINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CTO001",
              "EAN": 7896422507523,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CETOCONAZOL COMP 200MG C/ 10",
              "FAMILIA": "CETOCONAZOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CTO002",
              "EAN": 7896422507530,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CETOCONAZOL COMP 200MG C/ 30",
              "FAMILIA": "CETOCONAZOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CTO003",
              "EAN": 7896422506267,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CETOCONAZOL CREME TOP 20MG/G",
              "FAMILIA": "CETOCONAZOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CTO004",
              "EAN": 7896422506823,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CETOCONAZOL SHAMPOO 20MG/G",
              "FAMILIA": "CETOCONAZOL",
              "CLASSIFICACAO": ""
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
              "COD": "CEN002",
              "EAN": 7896422506656,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CETOPROFENO GEL TOPICO 25MG/G",
              "FAMILIA": "CETOPROFENO",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CEN005",
              "EAN": 7896422507349,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CETOPROFENO CAPSULA 50MG C/24",
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
              "COD": "CIO001",
              "EAN": 7896422512169,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CICLOPIROX OLAMINA CREME 10MG/G",
              "FAMILIA": "CICLOPIROX",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CIO002",
              "EAN": 7896422512145,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CICLOPIROX OLAMINA SOL 10MG/ML 15ML - SA",
              "FAMILIA": "CICLOPIROX",
              "CLASSIFICACAO": ""
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
              "COD": "CPB001",
              "EAN": 7891721030017,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CIPROFIBRATO 100MG 30 CPR - MERCK",
              "FAMILIA": "CIPROFIBRATO",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CPB002",
              "EAN": 7891317001322,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CIPROFIBRATO 100MG 30 CPR - EUROFARMA",
              "FAMILIA": "CIPROFIBRATO",
              "CLASSIFICACAO": ""
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
              "COD": "CCI004",
              "EAN": 7896422507097,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL CIPROFLOXACINO COMP REV 500MG C/7",
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
              "COD": "CTT001",
              "EAN": 7896422503600,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLARITROMICINA COMP 500MG C/10",
              "FAMILIA": "CLARITROMICINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CTT005",
              "EAN": 7896422503617,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLARITROMICINA COMP 500MG C/14",
              "FAMILIA": "CLARITROMICINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PCL002",
              "EAN": 7896422505369,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PROP CLOBETASOL CREME 0,5MG/G",
              "FAMILIA": "CLOBETASOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PCL003",
              "EAN": 7896422505352,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PROP CLOBETASOL POMADA 0,5MG/G",
              "FAMILIA": "CLOBETASOL",
              "CLASSIFICACAO": ""
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
              "COD": "CPI002",
              "EAN": 7896422516112,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "BISSULF CLOPIDOGREL 75MG C/28",
              "FAMILIA": "CLOPIDOGREL",
              "CLASSIFICACAO": ""
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
              "COD": "CTI001",
              "EAN": 7896422506427,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOTRIMAZOL CREME VAGINAL 10MG/G",
              "FAMILIA": "CLOTRIMAZOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CTI002",
              "EAN": 7896422506434,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOTRIMAZOL CREME VAGINAL 20MG/G",
              "FAMILIA": "CLOTRIMAZOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CTI003",
              "EAN": 7896422504812,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOTRIMAZOL CREME TOP 10MG/G",
              "FAMILIA": "CLOTRIMAZOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CAD001",
              "EAN": 7896422507202,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOTRIMAZOL + AC DEXAMETASONA CREME",
              "FAMILIA": "CLOTRIMAZOL+DEXAMETAS.",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "DCA002",
              "EAN": 7896422507264,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DICLOF COLESTIRAMINA CAP 70MG - 14",
              "FAMILIA": "COLESTIRAMINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "DCA003",
              "EAN": 7896422507271,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DICLOF COLESTIRAMINA CAP 70MG - 20",
              "FAMILIA": "COLESTIRAMINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "DSL001",
              "EAN": 7896422521260,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DESLORATADINA 0,5MG/ML XAROPE 60ML",
              "FAMILIA": "DESLORATADINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "DSL002",
              "EAN": 7896422521277,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DESLORATADINA 0,5MG/ML XAROPE 100ML",
              "FAMILIA": "DESLORATADINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "DSO001",
              "EAN": 7896422508957,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DESONIDA CREME TOP 0,5MG/G - 30G",
              "FAMILIA": "DESONIDA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "DSO002",
              "EAN": 7896422511087,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DESONIDA POMADA TOP 0,5MG/G - 30G",
              "FAMILIA": "DESONIDA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "DSV004",
              "EAN": 7896422504010,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "SUC DESVENLAFAXINA COMP REV 100MG-30(C1)",
              "FAMILIA": "DESVENLAFAXINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "DSV005",
              "EAN": 7896422503990,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "SUC DESVENLAFAXINA COMP REV 50MG-30(C1)",
              "FAMILIA": "DESVENLAFAXINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "MDB002",
              "EAN": 7896422506786,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "MAL DEXCLORFENIRAMINA SOL ORAL",
              "FAMILIA": "DEXCLOFENIRAMINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "MDB001",
              "EAN": 7896422506441,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "MAL DEXCLORFEN+BETAMETASON XPE",
              "FAMILIA": "DEXCLOFENIR.+BETAMET.",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "DCA004",
              "EAN": 7896422504256,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DICLOFENACO DIETIL GEL CREME",
              "FAMILIA": "DIETILAMONIO",
              "CLASSIFICACAO": ""
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
              "COD": "SIM006",
              "EAN": 7896422520652,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "SIMETICONA CAP GEL MOLE 125MG-90",
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
              "COD": "DPO005",
              "EAN": 7896422506229,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DIPIRONA MONO 500MG/ML GTS C/10ML - SA",
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
              "COD": "MNA003",
              "EAN": 7896422514248,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "MAL ENALAPRIL 10MG C/30 - ALU",
              "FAMILIA": "ENALAPRIL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "MNA004",
              "EAN": 7896422514262,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "MAL ENALAPRIL 20MG C/30 - ALU",
              "FAMILIA": "ENALAPRIL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "MNA005",
              "EAN": 7896422514286,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "MAL ENALAPRIL 5MG C/30 - ALU",
              "FAMILIA": "ENALAPRIL",
              "CLASSIFICACAO": ""
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
              "COD": "FIN001",
              "EAN": 7896422509398,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "FINASTERIDA COMP REV 1MG - 30",
              "FAMILIA": "FINASTERIDA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "FIN002",
              "EAN": 7896422509411,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "FINASTERIDA COMP REV 1MG - 60",
              "FAMILIA": "FINASTERIDA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "FIN003",
              "EAN": 7896422509428,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "FINASTERIDA COMP REV 5MG - 30",
              "FAMILIA": "FINASTERIDA",
              "CLASSIFICACAO": ""
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
              "COD": "GEZ001",
              "EAN": 7896422508209,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "GENFIBROZILA COMP REV 600MG-30",
              "FAMILIA": "GENFIBROZILA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "GEZ002",
              "EAN": 7896422508216,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "GENFIBROZILA COMP REV 900 MG-15",
              "FAMILIA": "GENFIBROZILA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "GLA001",
              "EAN": 7896422522571,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "GLIBENCLAMIDA 5MG COMP C/ 30",
              "FAMILIA": "GLIBLENCLAMIDA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "GDA001",
              "EAN": 7896422505291,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "GLIMEPIRIDA COM 1MG C/30",
              "FAMILIA": "GLIMEPIRIDA",
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
              "COD": "GDA003",
              "EAN": 7896422513463,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "GLIMEPIRIDA COM 2MG C/60",
              "FAMILIA": "GLIMEPIRIDA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "GDA004",
              "EAN": 7896422505314,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "GLIMEPIRIDA COM 4MG C/30",
              "FAMILIA": "GLIMEPIRIDA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "GDA005",
              "EAN": 7896422513517,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "GLIMEPIRIDA COM 4MG C/60",
              "FAMILIA": "GLIMEPIRIDA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "HDZ004",
              "EAN": 7891058002657,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "HIDROCLOROTIAZIDA 25 MG X 30 CPRS SA",
              "FAMILIA": "HIDROCLOROTIAZIDA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "HDZ005",
              "EAN": 7891058002664,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "HIDROCLOROTIAZIDA 50 MG X 20 CPRS SA",
              "FAMILIA": "HIDROCLOROTIAZIDA",
              "CLASSIFICACAO": ""
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
              "COD": "LAM005",
              "EAN": 7896422546775,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LAMOTRIGINA COMP 25MG C/ 30 (C1)",
              "FAMILIA": "LAMOTRIGINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "LAM006",
              "EAN": 7896422546751,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LAMOTRIGINA COMP 50MG C/ 30(C1)",
              "FAMILIA": "LAMOTRIGINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "LAM004",
              "EAN": 7896422546782,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LAMOTRIGINA COMP 100MG C/ 30 (C1)",
              "FAMILIA": "LAMOTRIGINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "LSM002",
              "EAN": 7896422505253,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LANSOPRAZOL CAPSULAS 15MG C/28",
              "FAMILIA": "LANSOPRAZOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "LSM004",
              "EAN": 7896422507431,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LANSOPRAZOL CAPSULAS 30MG C/28",
              "FAMILIA": "LANSOPRAZOL",
              "CLASSIFICACAO": ""
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
              "COD": "LIS001",
              "EAN": 7896422506755,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LISINOPRIL COMP 10MG C/ 30",
              "FAMILIA": "LISINOPRIL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "LIS003",
              "EAN": 7896422506779,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LISINOPRIL COMP 20MG C/ 30",
              "FAMILIA": "LISINOPRIL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "LIS004",
              "EAN": 7896422506731,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LISINOPRIL COMP 5MG C/ 30",
              "FAMILIA": "LISINOPRIL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "LOR002",
              "EAN": 7896422507257,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LORAZEPAM COMPRIMIDO 2MG (B1)",
              "FAMILIA": "LORAZEPAM",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "LNA006",
              "EAN": 7896422516853,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LOSARTANA COMP 100MG C/ 30",
              "FAMILIA": "LOSARTANA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "LOS002",
              "EAN": 7896422507738,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LOSARTANA COMP 50MG C/30",
              "FAMILIA": "LOSARTANA",
              "CLASSIFICACAO": ""
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
              "COD": "LNA003",
              "EAN": 7896422509572,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LOSART+HCTZ 100+25MG COMP - 60",
              "FAMILIA": "LOSARTANA+HCTZ",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "LNA004",
              "EAN": 7896422509589,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LOSART+HCTZ 50+12,5MG COMP-30",
              "FAMILIA": "LOSARTANA+HCTZ",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "LNA005",
              "EAN": 7896422509596,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LOSART+HCTZ 50+12,5 MG COMP-60",
              "FAMILIA": "LOSARTANA+HCTZ",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "AME001",
              "EAN": 7896422516877,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "AC MEFENAMICO COMP 500 MG-C/12",
              "FAMILIA": "MEFENAMICO",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "AME002",
              "EAN": 7896422517195,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "AC MEFENAMICO COMP 500 MG-C/24",
              "FAMILIA": "MEFENAMICO",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "MEL001",
              "EAN": 7896422505666,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "MELOXICAM COMP 15MG - 10",
              "FAMILIA": "MELOXICAM",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "MEL002",
              "EAN": 7896422505659,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "MELOXICAM COMP 7,5MG - 10",
              "FAMILIA": "MELOXICAM",
              "CLASSIFICACAO": ""
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
              "COD": "CMN001",
              "EAN": 7896422520584,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR MEMANTINA COMP REV 10MG (C1) C/ 60",
              "FAMILIA": "MEMANTINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CME002",
              "EAN": 7896422507943,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL METFORMINA COMP REV 500MG-30",
              "FAMILIA": "METFORMINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CME004",
              "EAN": 7896422507950,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL METFORMINA COMP REV 850MG-30",
              "FAMILIA": "METFORMINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "MPL001",
              "EAN": 7896206407445,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "SUCCINATO DE METOPROLOL COMP 100MG C/30",
              "FAMILIA": "METOPROLOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "MPL002",
              "EAN": 7896206407384,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "SUCCINATO DE METOPROLOL COMP 50MG C/30",
              "FAMILIA": "METOPROLOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "MPL003",
              "EAN": 7896206407308,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "SUCCINATO DE METOPROLOL COMP 25MG C/30",
              "FAMILIA": "METOPROLOL",
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
              "COD": "FUM001",
              "EAN": 7896422515344,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "FUROATO MOMETASONA CREME 1MG/G",
              "FAMILIA": "MOMETASONA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "FUM002",
              "EAN": 7896422515368,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "FUROATO MOMETASONA POM 1MG/G",
              "FAMILIA": "MOMETASONA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "MTC002",
              "EAN": 7896422530088,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "MONTELUCASTE DE SÓDIO 10MG X 30 COMP",
              "FAMILIA": "MONTELUCASTE",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "SNB001",
              "EAN": 7896422504454,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "SULF NEOMICI+BACITRACI POM-15G",
              "FAMILIA": "NEOMICINA+BACITRACINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "SNB002",
              "EAN": 7896422504478,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "SULF NEOMICI+BACITRACI POM-50G",
              "FAMILIA": "NEOMICINA+BACITRACINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "NIS004",
              "EAN": 7896422504577,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "NISTATINA CREME VAGINAL 60G C/14",
              "FAMILIA": "NISTATINA",
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
              "COD": "NOX002",
              "EAN": 7896422507400,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "NORFLOXACINO COMP REV 400MG C/14",
              "FAMILIA": "NORFLOXACINO",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "NOX003",
              "EAN": 7896422507394,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "NORFLOXACINO COMP REV 400MG C/ 6",
              "FAMILIA": "NORFLOXACINO",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "NOT001",
              "EAN": 7896422516303,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL NORTRIPTILINA 75MG C/30 (C1)",
              "FAMILIA": "NORTRIPTILINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "OZL003",
              "EAN": 7896422506533,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "OMEPRAZOL CAPSULAS 10 MG C/14",
              "FAMILIA": "OMEPRAZOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "OZL004",
              "EAN": 7896422504362,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "OMEPRAZOL CAPSULAS 20 MG C/14",
              "FAMILIA": "OMEPRAZOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "OZL005",
              "EAN": 7896422504355,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "OMEPRAZOL CAPSULAS 20 MG C/ 7",
              "FAMILIA": "OMEPRAZOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "OZL006",
              "EAN": 7896422504379,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "OMEPRAZOL CAPSULAS 20 MG C/28",
              "FAMILIA": "OMEPRAZOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "OZL007",
              "EAN": 7896422504614,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "OMEPRAZOL CAPSULAS 40 MG C/ 7",
              "FAMILIA": "OMEPRAZOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "OZL008",
              "EAN": 7896422517843,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "OMEPRAZOL CAPSULAS 20 MG C/42",
              "FAMILIA": "OMEPRAZOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ORL001",
              "EAN": 3664798020281,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ORLISTATE CAPSULAS 120MG C/42",
              "FAMILIA": "ORLISTATE",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ORL002",
              "EAN": 7896422501842,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ORLISTATE CAPSULAS 120MG C/84",
              "FAMILIA": "ORLISTATE",
              "CLASSIFICACAO": ""
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
              "COD": "PAN004",
              "EAN": 7896422506588,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PANTOPRAZOL SOD. SESQ. COMP 20MG C/14-AL",
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
              "COD": "PAN008",
              "EAN": 7896422506618,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PANTOPRAZOL SOD. SESQ.COMP 40MG C/14-ALU",
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
              "COD": "PAR006",
              "EAN": 7896422505390,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PARACETAMOL GTS 200MG/ML - 15ML",
              "FAMILIA": "PARACETAMOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PAR007",
              "EAN": 7896422504911,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PARACETAMOL COMP REV 750MG-20",
              "FAMILIA": "PARACETAMOL",
              "CLASSIFICACAO": ""
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
              "COD": "PNA001",
              "EAN": 7896422519168,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PRAVASTATINA SODICA COMP 20MG C/ 30",
              "FAMILIA": "PRAVASTATINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PNA002",
              "EAN": 7896422519175,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PRAVASTATINA SODICA COMP 40MG C/ 30",
              "FAMILIA": "PRAVASTATINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PNA003",
              "EAN": 7896422519151,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PRAVASTATINA SODICA COMP 10MG C/ 30",
              "FAMILIA": "PRAVASTATINA",
              "CLASSIFICACAO": ""
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
              "COD": "PRD002",
              "EAN": 7896422517423,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PREDNISONA COMP 20 MG C/ 30",
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
              "COD": "CPR001",
              "EAN": 7896422515511,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL PROPRANOLOL COMP 10MG C/30",
              "FAMILIA": "PROPRANOLOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CPR002",
              "EAN": 7896422515535,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL PROPRANOLOL COMP 40MG C/30",
              "FAMILIA": "PROPRANOLOL",
              "CLASSIFICACAO": ""
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
              "COD": "HQT006",
              "EAN": 7896422500531,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "HEMIFUM.QUETIAPINA COMPREV 100MGC/30(C1)",
              "FAMILIA": "QUETIAPINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "HQT007",
              "EAN": 7896422500562,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "HEMIFUM.QUETIAPINA COMPREV 200MGC/30(C1)",
              "FAMILIA": "QUETIAPINA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "RAM003",
              "EAN": 7896422518673,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "RAMIPRIL COMP 5MG C/ 30",
              "FAMILIA": "RAMIPRIL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "RAM004",
              "EAN": 7896422518987,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "RAMIPRIL COMP 5MG C/ 60",
              "FAMILIA": "RAMIPRIL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "RAM005",
              "EAN": 7891058002404,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "RAMIPRIL COMP 2,5MG C/ 30 SA",
              "FAMILIA": "RAMIPRIL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "RAM005",
              "EAN": 7891058002404,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "RAMIPRIL COMP 2,5MG C/ 30",
              "FAMILIA": "RAMIPRIL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "RAM006",
              "EAN": 7891058002411,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "RAMIPRIL COMP 2,5MG C/ 60",
              "FAMILIA": "RAMIPRIL",
              "CLASSIFICACAO": ""
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
              "COD": "ROS001",
              "EAN": 7896422528580,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ROSUVASTATINA CALCICA COMP REV 10MG-30",
              "FAMILIA": "ROSUVASTATINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ROS002",
              "EAN": 7896422528627,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ROSUVASTATINA CALCICA COMP REV 20MG - 30",
              "FAMILIA": "ROSUVASTATINA",
              "CLASSIFICACAO": ""
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
              "COD": "CSI001",
              "EAN": 7896422525879,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CITRATO SILDENAFILA 100MG COMP REV C/1",
              "FAMILIA": "SILDENAFILA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CSI002",
              "EAN": 7896422525220,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CITRATO SILDENAFILA 100 MG COMP REV C/2",
              "FAMILIA": "SILDENAFILA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CSI003",
              "EAN": 7896422525237,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CITRATO SILDENAFILA 100MG COMP REV C/4",
              "FAMILIA": "SILDENAFILA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "CSI006",
              "EAN": 7896422525862,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CITRATO SILDENAFILA 50MG COMP REV C/1",
              "FAMILIA": "SILDENAFILA",
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
              "COD": "SIN002",
              "EAN": 7896422507837,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "SINVASTATINA COMP REV 10MG-30",
              "FAMILIA": "SINVASTATINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "SIN003",
              "EAN": 7896422507844,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "SINVASTATINA COMP REV 20MG-30",
              "FAMILIA": "SINVASTATINA",
              "CLASSIFICACAO": ""
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
              "COD": "CTA001",
              "EAN": "-",
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL TANSULOSINA CAPSULAS 0,4MG C/30",
              "FAMILIA": "TANSULOZINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "TER001",
              "EAN": 7896422504669,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR TERBINAFINA CREME TOP 1%",
              "FAMILIA": "TERBINAFINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "TER004",
              "EAN": 7896422504713,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR TERBINAFINA COMP 250MG C/ 14",
              "FAMILIA": "TERBINAFINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "TER005",
              "EAN": 7896422504720,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR TERBINAFINA COMP 250MG C/28",
              "FAMILIA": "TERBINAFINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "TCP002",
              "EAN": 7896422515801,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL TICLOPIDINA COMP 250MG C/30",
              "FAMILIA": "TICLOPIDINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "TIO001",
              "EAN": 7896422505727,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "TIOCONAZOL+TINIDAZOL CREME 1BG",
              "FAMILIA": "TIOCONAZOL+TINIDAZOL",
              "CLASSIFICACAO": ""
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
              "COD": "VEM002",
              "EAN": 7896422519922,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL VENLAFAXINA CAP 37,5MG C/30(C1)",
              "FAMILIA": "VENLAFAXINA",
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
              "COD": "OXP001",
              "EAN": 7896422567268,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "OXALIPLATINA 100MG/20ML INJ 1 FA",
              "FAMILIA": "OXALIPLATIN",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "OXP002",
              "EAN": 7896422567275,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "OXALIPLATINA 50MG/10ML INJ 1 FA",
              "FAMILIA": "OXALIPLATIN",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "DOC001",
              "EAN": 7896422567282,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DOCETAXEL TRI-HID 20MG/1ML INJ 1 FA",
              "FAMILIA": "DOCETAXEL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "DOC002",
              "EAN": 7896422567299,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "DOCETAXEL TRI-HID 80MG/4ML INJ 1 FA",
              "FAMILIA": "DOCETAXEL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "BPL001",
              "EAN": 7896422522663,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "Hemif Bisoprolol Comp Rev 2,5mg c/30",
              "FAMILIA": "BISOPROLOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "BPL002",
              "EAN": 7896422522670,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "Hemif Bisoprolol Comp Rev 5mg c/30",
              "FAMILIA": "BISOPROLOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "BPL003",
              "EAN": 7896422522687,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "Hemif Bisoprolol Comp Rev 10mg c/30",
              "FAMILIA": "BISOPROLOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "_762921",
              "EAN": 7896422504089,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "RISPERIDONE 3MG TABCO BL3X10 M23 BR",
              "FAMILIA": "RISPERIDONE",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "_762919",
              "EAN": 7896422504072,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "RISPERIDONE 2MG TABCO BL3X10 M23 BR",
              "FAMILIA": "RISPERIDONE",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "_768898",
              "EAN": "-",
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ROSUVASTATINA CA 20MG TABCO BL4X15 BR",
              "FAMILIA": "ROSUVASTATINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "_768899",
              "EAN": "-",
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ROSUVASTATINA CA 10MG TABCO BL4X15 BR",
              "FAMILIA": "ROSUVASTATINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "_767594",
              "EAN": "-",
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "VIT D MEDLEY 7KIU CAPSG BL2X4 M24 BR",
              "FAMILIA": "-",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "_767595",
              "EAN": "-",
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "VIT D MEDLEY 50KIU CAPSG BL4 M24 BR",
              "FAMILIA": "-",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "AMT003",
              "EAN": "-",
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL AMITRIPTILINA 25MG TABCO BL3X10 BR",
              "FAMILIA": "CL AMITRIPTILINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "AMT004",
              "EAN": "-",
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL AMITRIPTILINA 75MG TABCO BL3X10 BR",
              "FAMILIA": "CL AMITRIPTILINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "_768896",
              "EAN": "-",
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ALBENDAZOL 400MG TABCW BL1 M23 BR",
              "FAMILIA": "ALBENDAZOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "_757732",
              "EAN": "-",
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LOSARTANA HCT 50-12.5MG TABCO BL2X15 BR",
              "FAMILIA": "LOSARTANA HCT",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "_759615",
              "EAN": "-",
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LOSARTANA HCT 50-12.5MG TABCO BL4X15 BR TIN",
              "FAMILIA": "LOSARTANA HCT",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "_759616",
              "EAN": "-",
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LOSARTANA HCT 100-25MG TABCO BL2X15 BR",
              "FAMILIA": "LOSARTANA HCT",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "_759617",
              "EAN": "-",
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "LOSARTANA HCT 100-25MG TABCO BL4X15 BR",
              "FAMILIA": "LOSARTANA HCT",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "_762908",
              "EAN": "-",
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "BUPROPION HCL 300MG TABCR BL4X15 BR",
              "FAMILIA": "BUPROPION",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "_762907",
              "EAN": "-",
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "BUPROPION HCL 300MG TABCR BL2X15 BR",
              "FAMILIA": "BUPROPION",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "_762905",
              "EAN": "-",
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "BUPROPION HCL 150MG TABCR BL2X15 BR",
              "FAMILIA": "BUPROPION",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "_762904",
              "EAN": "-",
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "BUPROPION HCL 150MG TABCR BL4X15 BR",
              "FAMILIA": "BUPROPION",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "_766915",
              "EAN": "-",
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "SIMETICONA  COMPRIMIDO 40 MG C/20",
              "FAMILIA": "SIMETICONA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CAM001",
              "EAN": 7896422505567,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR AMBROXOL XAROPE PED",
              "FAMILIA": "AMBROXOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CAM001",
              "EAN": 7896422505567,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR AMBROXOL XAROPE PED",
              "FAMILIA": "AMBROXOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CAM001",
              "EAN": 7896422505567,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR AMBROXOL XAROPE PED",
              "FAMILIA": "AMBROXOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CAM002",
              "EAN": 7896422505574,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR AMBROXOL XAROPE AD",
              "FAMILIA": "AMBROXOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CAM002",
              "EAN": 7896422505574,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR AMBROXOL XAROPE AD",
              "FAMILIA": "AMBROXOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CAM002",
              "EAN": 7896422505574,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR AMBROXOL XAROPE AD",
              "FAMILIA": "AMBROXOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "AMI005",
              "EAN": 7891058001667,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR AMIODARONA COMP 100MG C/ 30",
              "FAMILIA": "AMIODARONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "AMI006",
              "EAN": 7891058001681,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR AMIODARONA COMP 200MG C/ 30",
              "FAMILIA": "AMIODARONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "ATO002",
              "EAN": 7896422520966,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ATORVASTATINA CALCICA COMP REV 20MG-30",
              "FAMILIA": "ATORVASTATINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "BTP001",
              "EAN": 7896422532310,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "BIMATOPROSTA 0,3MG/ML SOL OFTAL - 3ML",
              "FAMILIA": "BIMATOPROSTA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "BRM003",
              "EAN": 7896422505598,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "BROMOPRIDA GOTAS PED 4MG/ML",
              "FAMILIA": "BROMOPRIDA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "BRM003",
              "EAN": 7896422505598,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "BROMOPRIDA GOTAS PED 4MG/ML - SA",
              "FAMILIA": "BROMOPRIDA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "BRM003",
              "EAN": 7896422505598,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "BROMOPRIDA GOTAS PED 4MG/ML",
              "FAMILIA": "BROMOPRIDA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "BRM003",
              "EAN": 7896422505598,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "BROMOPRIDA GOTAS PED 4MG/ML",
              "FAMILIA": "BROMOPRIDA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "BRM003",
              "EAN": 7896422505598,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "BROMOPRIDA GOTAS PED 4MG/ML",
              "FAMILIA": "BROMOPRIDA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CAR001",
              "EAN": 7896422511841,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CARBAMAZEPINA SUSPENSAO 2% 100ML (C1)",
              "FAMILIA": "CARBAMAZEPINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CAR001",
              "EAN": 7896422511841,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CARBAMAZEPINA SUSPENSAO 2% (C1)",
              "FAMILIA": "CARBAMAZEPINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CAR001",
              "EAN": 7896422511841,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CARBAMAZEPINA SUSPENSAO 2% (C1)",
              "FAMILIA": "CARBAMAZEPINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CAR002",
              "EAN": 7896422513920,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CARBAMAZEPINA 400MG C/20 (C1)",
              "FAMILIA": "CARBAMAZEPINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CAR003",
              "EAN": 7896422513975,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CARBAMAZEPINA 200MG C/30 (C1)",
              "FAMILIA": "CARBAMAZEPINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CAR004",
              "EAN": 7896422513982,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CARBAMAZEPINA 200MG C/60 (C1)",
              "FAMILIA": "CARBAMAZEPINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CAR006",
              "EAN": 7896422514002,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CARBAMAZEPINA 400MG C/30 (C1)",
              "FAMILIA": "CARBAMAZEPINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CEA004",
              "EAN": 7896422512572,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CEFALEXINA MONOIDRATADA CAP 500MG - 10",
              "FAMILIA": "CEFALEXINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CEA004",
              "EAN": 7896422512572,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CEFALEXINA MONOIDRATADA CAP 500MG C/10",
              "FAMILIA": "CEFALEXINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CEA004",
              "EAN": 7896422512572,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CEFALEXINA CAP 500MG C/10 - SS",
              "FAMILIA": "CEFALEXINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CEA006",
              "EAN": 7896422512589,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CEFALEXINA MONOIDRATADA CAP 500MG - 8",
              "FAMILIA": "CEFALEXINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CEA006",
              "EAN": 7896422512589,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CEFALEXINA MONOIDRATADA CAP 500MG C/8",
              "FAMILIA": "CEFALEXINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "FUC001",
              "EAN": 7896422505208,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "FUMARATO CETOTIFENO GTS",
              "FAMILIA": "CETOTIFENO",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "FUC001",
              "EAN": 7896422505208,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "FUMARATO CETOTIFENO GTS",
              "FAMILIA": "CETOTIFENO",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "FUC001",
              "EAN": 7896422505208,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "FUMARATO CETOTIFENO GTS",
              "FAMILIA": "CETOTIFENO",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "FLI003",
              "EAN": 7896422512961,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL FLUOXETINA SOL 20MG/ML-20 (C1)",
              "FAMILIA": "FLUOXETINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "FLI003",
              "EAN": 7896422512961,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL FLUOXETINA SOL 20MG/ML-20 (C1)",
              "FAMILIA": "FLUOXETINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "FLI003",
              "EAN": 7896422512961,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL FLUOXETINA SOL 20MG/ML-20 (C1)",
              "FAMILIA": "FLUOXETINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CNA001",
              "EAN": 7896422506809,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR NAFAZOLINA SOL NASAL",
              "FAMILIA": "NAFAZOLINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CNA001",
              "EAN": 7896422506809,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR NAFAZOLINA SOL NASAL",
              "FAMILIA": "NAFAZOLINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CNA001",
              "EAN": 7896422506809,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR NAFAZOLINA SOL NASAL",
              "FAMILIA": "NAFAZOLINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "NIT001",
              "EAN": 7896422503372,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "NITAZOXANIDA COMPRIMIDOS 500MG C/6",
              "FAMILIA": "NITAZOXANIDA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "NOT002",
              "EAN": 7896422516334,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL NORTRIPTILINA 50MG C/30 (C1)",
              "FAMILIA": "NORTRIPTILINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PAR001",
              "EAN": 7896422519694,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PARACETAMOL SUS OR 160 MG/5ML X 60 ML",
              "FAMILIA": "PARACETAMOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PAR001",
              "EAN": 7896422519694,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PARACETAMOL SUS OR 32 MG/ML X 60 ML",
              "FAMILIA": "PARACETAMOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PAR001",
              "EAN": 7896422519694,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PARACETAMOL SUS OR 160 MG/5ML X 60 ML",
              "FAMILIA": "PARACETAMOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PAR005",
              "EAN": 7896422519618,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PARACETAMOL 100MG/ML SUSP OR 15ML",
              "FAMILIA": "PARACETAMOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PAR005",
              "EAN": 7896422519618,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PARACETAMOL 100MG/ML SUSP OR-15ML FR PL",
              "FAMILIA": "PARACETAMOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PAR005",
              "EAN": 7896422519618,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PARACETAMOL 100MG/ML SUSP OR-15ML FR PL",
              "FAMILIA": "PARACETAMOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PAR005",
              "EAN": 7896422519618,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "PARACET 100MG/ML SUS OR-15ML FR PL (EXP)",
              "FAMILIA": "PARACETAMOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "FOS001",
              "EAN": 7896422506298,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "FOS SOD PREDNISO SOL OR 1MG/ML",
              "FAMILIA": "PREDNISOLONA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "FOS001",
              "EAN": 7896422506298,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "FOS SOD PREDNISO SOL OR 1MG/ML",
              "FAMILIA": "PREDNISOLONA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "FOS001",
              "EAN": 7896422506298,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "FOS SOD PREDNISO SOL OR 1MG/ML",
              "FAMILIA": "PREDNISOLONA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CRA002",
              "EAN": 7896422517317,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR RANITIDINA COM 150 C10-AL",
              "FAMILIA": "RANITIDINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CRA004",
              "EAN": 7896422517324,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR RANITIDINA COM 150 C20-AL",
              "FAMILIA": "RANITIDINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CRA005",
              "EAN": 7896422504973,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR RANITIDINA COMP REV 300MG C/10",
              "FAMILIA": "RANITIDINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CRA006",
              "EAN": 7896422504980,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CLOR RANITIDINA COMP REV 300MG C/20",
              "FAMILIA": "RANITIDINA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "RIS003",
              "EAN": 7896422504089,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "RISPERIDONA COMP REV 3MG C/30  (C1)",
              "FAMILIA": "RISPERIDONA",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "TRL001",
              "EAN": 7896422509350,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CL TRAMADOL CAP 50MG - 10 (A2)",
              "FAMILIA": "TRAMADOL",
              "CLASSIFICACAO": "Must Win"
            },
            {
              "COD": "APZ007",
              "EAN": 7891058013202,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "APROZIDE 150MG/12,5MG 30 CPRREV RMT",
              "FAMILIA": "APROZIDE",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "APZ008",
              "EAN": 7891058013226,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "APROZIDE 300MG/12,5MG 30 CPRREV RMT",
              "FAMILIA": "APROZIDE",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ARA001",
              "EAN": 7891058008116,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "ARAVA 20MG 30 COMPRIMIDOS (C1)",
              "FAMILIA": "ARAVA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ARA002",
              "EAN": 7891058008123,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "ARAVA 100MG 3 COMPRIMIDOS ORIG. (C1)",
              "FAMILIA": "ARAVA",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CLE014",
              "EAN": 7891058003302,
              "FRANQUIA": "HOSPITALAR",
              "DESCRICAO": "CLEXANE SAFETY LOCK 100MG 2 SERINGAS",
              "FAMILIA": "CLEXANE",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CLE008",
              "EAN": 7891058003180,
              "FRANQUIA": "HOSPITALAR",
              "DESCRICAO": "CLEXANE SAFETY LOCK 20MG 2 SERINGAS",
              "FAMILIA": "CLEXANE",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CLE009",
              "EAN": 7891058003203,
              "FRANQUIA": "HOSPITALAR",
              "DESCRICAO": "CLEXANE SAFETY LOCK 20MG 10 SERINGAS",
              "FAMILIA": "CLEXANE",
              "CLASSIFICACAO": ""
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
              "COD": "CLE012",
              "EAN": 7891058003241,
              "FRANQUIA": "HOSPITALAR",
              "DESCRICAO": "CLEXANE SAFETY LOCK 60MG 2 SERINGAS",
              "FAMILIA": "CLEXANE",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "CLE013",
              "EAN": 7891058003272,
              "FRANQUIA": "HOSPITALAR",
              "DESCRICAO": "CLEXANE SAFETY LOCK 80MG 2 SERINGAS",
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
              "COD": "LAN001",
              "EAN": 7891058009205,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "LANTUS 100UI 1 FRASCO AMPOLA 10ML",
              "FAMILIA": "LANTUS",
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
              "COD": "ALS002",
              "EAN": 7891058020149,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "CANETA ALLSTAR ROXO MAUVE",
              "FAMILIA": "ALLSTAR",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PRO006",
              "EAN": 7896070601826,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "PROFENID GEL TB 30 G",
              "FAMILIA": "PROFENID",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PRO003",
              "EAN": 7896070601871,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "PROFENID 100MG 6 AMP 2 ML",
              "FAMILIA": "PROFENID",
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
              "COD": "PRO009",
              "EAN": 7896070601796,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "PROFENID RETARD 200MG 10 CPR",
              "FAMILIA": "PROFENID",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PRO002",
              "EAN": 7896070601710,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "PROFENID 100MG C/10 SUPOS.",
              "FAMILIA": "PROFENID",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PRO004",
              "EAN": 7896070601703,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "PROFENID 50MG 2X12 CAPS",
              "FAMILIA": "PROFENID",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PRO010",
              "EAN": 7891058003838,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "PROFENID PEDIATRICO XAROPE 150 ML",
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
              "COD": "PUR003",
              "EAN": 7897595901446,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "PURAN T4 125MCG CPR 2X15 V",
              "FAMILIA": "PURAN T4",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PUR004",
              "EAN": 7897595901330,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "PURAN T4 150MCG CPR 2X15 V",
              "FAMILIA": "PURAN T4",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PUR005",
              "EAN": 7897595901576,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "PURAN T4 175MCG CPR 2X15 V",
              "FAMILIA": "PURAN T4",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PUR006",
              "EAN": 7897595903259,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "PURAN T4 200MCG 2X15 S VD",
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
              "COD": "PUR021",
              "EAN": 7891058003555,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "PURAN T4 12,5MCG COMP 2 X 15 VD",
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
              "COD": "PUR024",
              "EAN": 7891058003586,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "PURAN T4 300MCG COMP 2 X 15 VD",
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
              "COD": "SVN001",
              "EAN": 7898328480306,
              "FRANQUIA": "HOSPITALAR",
              "DESCRICAO": "SYNVISC - 2 ML SER",
              "FAMILIA": "SYNVISC",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "SVN002",
              "EAN": 7898328480313,
              "FRANQUIA": "HOSPITALAR",
              "DESCRICAO": "SYNVISC ONE - 6 ML SER",
              "FAMILIA": "SYNVISC",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "TAR001",
              "EAN": 7891058077419,
              "FRANQUIA": "HOSPITALAR",
              "DESCRICAO": "TARGOCID 200 MG 1 FA TP",
              "FAMILIA": "TARGOCID",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "TAR002",
              "EAN": 7891058077464,
              "FRANQUIA": "HOSPITALAR",
              "DESCRICAO": "TARGOCID 400 MG 1 FA TP",
              "FAMILIA": "TARGOCID",
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
              "COD": "FLC003",
              "EAN": 7896422500852,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "FLUXOCOR 20 MG COM REV C/30",
              "FAMILIA": "FLUXOCOR",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "FLC004",
              "EAN": 7896422500883,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "FLUXOCOR 40 MG COM REV C/30",
              "FAMILIA": "FLUXOCOR",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "FNL003",
              "EAN": 7896422513883,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "FLUXOCOR + ANLO COMP REV 40MG/10MG C/ 30",
              "FAMILIA": "FLUXOCOR + ANLO",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "FNL001",
              "EAN": 7896422513944,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "FLUXOCOR + ANLO COMP REV 20MG/5MG C/ 30",
              "FAMILIA": "FLUXOCOR + ANLO",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "FNL002",
              "EAN": 7896422514200,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "FLUXOCOR + ANLO COMP REV 40MG/5MG C/ 30",
              "FAMILIA": "FLUXOCOR + ANLO",
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
              "COD": "PZL002",
              "EAN": 7896422501972,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "PRAZOL 15 MG C/28",
              "FAMILIA": "PRAZOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PZL005",
              "EAN": 7896422505888,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "PRAZOL CAPSULAS 30 MG C/14",
              "FAMILIA": "PRAZOL",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "PZL006",
              "EAN": 7896422521710,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "PRAZOL 30 MG C/28 CAPS",
              "FAMILIA": "PRAZOL",
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
              "COD": "PYL006",
              "EAN": 7896422502559,
              "FRANQUIA": "AGUDO",
              "DESCRICAO": "PYLORIPAC C/ 7",
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
              "COD": "ZAN003",
              "EAN": 7896422508032,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "ZANIDIP COMP REV 10MG - 20",
              "FAMILIA": "ZANIDIP",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ZAN004",
              "EAN": 7896422508049,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "ZANIDIP COMP REV 10MG - 30",
              "FAMILIA": "ZANIDIP",
              "CLASSIFICACAO": ""
            },
            {
              "COD": "ZAN006",
              "EAN": 7896422512435,
              "FRANQUIA": "CRÔNICO",
              "DESCRICAO": "ZANIDIP COMP REV 20MG - 30 (ALU)",
              "FAMILIA": "ZANIDIP",
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
              "EAN": "",
              "FRANQUIA": "BARISTAR CAP GEL MOLE X 100",
              "DESCRICAO": "",
              "FAMILIA": 7896422544917,
              "CLASSIFICACAO": ""
            },
            {
              "COD": "",
              "EAN": "",
              "FRANQUIA": "BARISTAR CAP GEL MOLE X 30",
              "DESCRICAO": "",
              "FAMILIA": 7896422544894,
              "CLASSIFICACAO": ""
            },
            {
              "COD": "",
              "EAN": "",
              "FRANQUIA": "OSTEONUTRI COMP REV 600MG+400UI C/30",
              "DESCRICAO": "",
              "FAMILIA": 7896422513265,
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