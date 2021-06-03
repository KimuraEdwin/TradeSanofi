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
              "COD": "ADA001",
              "EAN": 7896422515122,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ADAPALENO GEL TOP 1 MG/G",
              "FAMILIA": "ADAPALENO",
              "CLASSIFICACAO": ""
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
              "COD": "CAP008",
              "EAN": 7896422503709,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "CAPTOPRIL 25 MG C/ 30",
              "FAMILIA": "CAPTOPRIL",
              "CLASSIFICACAO": ""
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
              "COD": "CPI002",
              "EAN": 7896422516112,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "BISSULF CLOPIDOGREL 75MG C/28",
              "FAMILIA": "CLOPIDOGREL",
              "CLASSIFICACAO": ""
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
              "COD": "ATO002",
              "EAN": 7896422520966,
              "FRANQUIA": "GENÉRICO",
              "DESCRICAO": "ATORVASTATINA CALCICA COMP REV 20MG-30",
              "FAMILIA": "ATORVASTATINA",
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