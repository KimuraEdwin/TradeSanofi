$(document).ready(function () {
    var $input = $("#txt-pesquisa");

    var pesquisar = function () {
        var HTML = "";
        var p = $input.val();
        var area = $("#resultados-pesquisa");
        var lista = [
			 {
			   "arquivo": "aas.html",
			   "titulo": "aas",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "acebrofilina.html",
			   "titulo": "acebrofilina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "acetato-clotesbol.html",
			   "titulo": "acetato clotesbol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "aciclovir.html",
			   "titulo": "aciclovir",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "acido-mefenamico.html",
			   "titulo": "acido mefenamico",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "adapaleno.html",
			   "titulo": "adapaleno",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "adapel.html",
			   "titulo": "adapel",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "aixa.html",
			   "titulo": "aixa",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "albendazol.html",
			   "titulo": "albendazol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "alenthus.html",
			   "titulo": "alenthus",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "allegra.html",
			   "titulo": "Allegra",
			   "heroi": "",
			   "marca": "Allegra",
			   "categoria": "CHC"
			 },
			 {
			   "arquivo": "alopurinol.html",
			   "titulo": "alopurinol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "alprazolam.html",
			   "titulo": "alprazolam",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "amaryl.html",
			   "titulo": "amaryl",
			   "heroi": "",
			   "marca": "dcv",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "amoxilina.html",
			   "titulo": "amoxilina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "anador.html",
			   "titulo": "Anador",
			   "heroi": "",
			   "marca": "Anador",
			   "categoria": "CHC"
			 },
			 {
			   "arquivo": "apidra.html",
			   "titulo": "apidra",
			   "heroi": "",
			   "marca": "dcv",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "araceli.html",
			   "titulo": "araceli",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "atenolol.html",
			   "titulo": "atenolol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "atenolol-clortalidona.html",
			   "titulo": "atenolol clortalidona",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "atorvastatina.html",
			   "titulo": "atorvastatina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "azitromicina.html",
			   "titulo": "azitromicina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "baristar.html",
			   "titulo": "baristar",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "benestare.html",
			   "titulo": "benestare",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "benzoilmetronidazol.html",
			   "titulo": "benzoilmetronidazol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "besilato-anlodipino.html",
			   "titulo": "besilato anlodipino",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "bimatoprosta.html",
			   "titulo": "bimatoprosta",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "biprofenid.html",
			   "titulo": "biprofenid",
			   "heroi": "biprofenid.png",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "bisulfato-clopidogrel.html",
			   "titulo": "bisulfato clopidogrel",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "bromazepam.html",
			   "titulo": "bromazepam",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "bromoprida.html",
			   "titulo": "bromoprida",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "buclina.html",
			   "titulo": "buclina",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "captopril.html",
			   "titulo": "captopril",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "carbazepina.html",
			   "titulo": "carbazepina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "carvedilol.html",
			   "titulo": "carvedilol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cefadroxila.html",
			   "titulo": "cefadroxila",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cefalexina-monoidratada.html",
			   "titulo": "cefalexina monoidratada",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cepacol.html",
			   "titulo": "Cepacol",
			   "heroi": "",
			   "marca": "Cepacol",
			   "categoria": "CHC"
			 },
			 {
			   "arquivo": "cetoconazol.html",
			   "titulo": "cetoconazol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cetoconazol-betam.html",
			   "titulo": "cetoconazol betam",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cetoconazol-betam-neom.html",
			   "titulo": "cetoconazol betam neom",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cetoprofeno.html",
			   "titulo": "cetoprofeno",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "ciclopirox.html",
			   "titulo": "ciclopirox",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "ciprofibrato.html",
			   "titulo": "ciprofibrato",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "citalopram.html",
			   "titulo": "citalopram",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "citratro-sidenafila.html",
			   "titulo": "citratro sidenafila",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "claritromicina.html",
			   "titulo": "claritromicina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "clexane.html",
			   "titulo": "clexane",
			   "heroi": "clexane.png",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "clomid.html",
			   "titulo": "clomid",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "clonazepam.html",
			   "titulo": "clonazepam",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "clorana.html",
			   "titulo": "clorana",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cloridato-amitriptilina.html",
			   "titulo": "cloridato amitriptilina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cloridrato-bromexina.html",
			   "titulo": "cloridrato bromexina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cloridrato-ciprofloxacino.html",
			   "titulo": "cloridrato ciprofloxacino",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cloridrato-dexametasona.html",
			   "titulo": "cloridrato dexametasona",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cloridrato-fluoxetina.html",
			   "titulo": "cloridrato fluoxetina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cloridrato-metformina.html",
			   "titulo": "cloridrato metformina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cloridrato-nafazolina.html",
			   "titulo": "cloridrato nafazolina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cloridrato-nortriptilina.html",
			   "titulo": "cloridrato nortriptilina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cloridrato-paroxetina.html",
			   "titulo": "cloridrato paroxetina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cloridrato-propranolol.html",
			   "titulo": "cloridrato propranolol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cloridrato-ranitidina.html",
			   "titulo": "cloridrato ranitidina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cloridrato-sertralina.html",
			   "titulo": "cloridrato sertralina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cloridrato-tansulosina.html",
			   "titulo": "cloridrato tansulosina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cloridrato-terbinafina.html",
			   "titulo": "cloridrato terbinafina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cloridrato-ticlopidina.html",
			   "titulo": "cloridrato ticlopidina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cloridrato-tramadol.html",
			   "titulo": "cloridrato tramadol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cloridrato-venlafaxina.html",
			   "titulo": "cloridrato venlafaxina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "clotrimazol.html",
			   "titulo": "clotrimazol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "clotrimazol-dexanetasona.html",
			   "titulo": "clotrimazol dexanetasona",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "cognitus.html",
			   "titulo": "cognitus",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "colirio-moura.html",
			   "titulo": "col�rio moura brasil",
			   "heroi": "",
			   "marca": "col�rio moura brasil",
			   "categoria": "CHC"
			 },
			 {
			   "arquivo": "coltrax-inj.html",
			   "titulo": "coltrax-inj",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "dactil-ob.html",
			   "titulo": "dactil-ob",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "daonil.html",
			   "titulo": "daonil",
			   "heroi": "",
			   "marca": "dcv",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "depura.html",
			   "titulo": "Depura",
			   "heroi": "",
			   "marca": "Depura",
			   "categoria": "CHC"
			 },
			 {
			   "arquivo": "dermacyd.html",
			   "titulo": "dermacyd",
			   "heroi": "",
			   "marca": "dermacyd",
			   "categoria": "CHC"
			 },
			 {
			   "arquivo": "dermatop.html",
			   "titulo": "dermatop",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "desloratadina.html",
			   "titulo": "desloratadina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "desonida.html",
			   "titulo": "desonida",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "desonol.html",
			   "titulo": "desonol",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "dexametasona.html",
			   "titulo": "dexametasona",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "diclofenaco-cetirizina.html",
			   "titulo": "diclofenaco cetirizina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "diclofenaco-colestiramina.html",
			   "titulo": "diclofenaco colestiramina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "diclofenaco-dietilamonio.html",
			   "titulo": "diclofenaco dietilamonio",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "diclofenaco-potassico.html",
			   "titulo": "diclofenaco potassico",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "diclofenaco-sodico.html",
			   "titulo": "diclofenaco sodico",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "dieloft.html",
			   "titulo": "dieloft",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "digesan.html",
			   "titulo": "digesan",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "dip-betametasona-genta.html",
			   "titulo": "dip betametasona genta",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "dip-betametasona-salic.html",
			   "titulo": "dip betametasona salic",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "dipirona.html",
			   "titulo": "dipirona",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "dogmatil.html",
			   "titulo": "dogmatil",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "dolantina.html",
			   "titulo": "dolantina",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "domperidona.html",
			   "titulo": "domperidona",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "dorflex.html",
			   "titulo": "dorflex",
			   "heroi": "",
			   "marca": "dorflex",
			   "categoria": "CHC"
			 },
			 {
			   "arquivo": "dorflex-icy-hot.html",
			   "titulo": "Dorflex Icy Hot",
			   "heroi": "",
			   "marca": "Dorflex",
			   "categoria": "CHC"
			 },
			 {
			   "arquivo": "dropropizina.html",
			   "titulo": "dropropizina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "drospirenona-etinilestradiol.html",
			   "titulo": "drospirenona etinilestradiol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "dulcolax.html",
			   "titulo": "dulcolax guttalax",
			   "heroi": "",
			   "marca": "dulcolax guttalax",
			   "categoria": "CHC"
			 },
			 {
			   "arquivo": "eficentus.html",
			   "titulo": "eficentus",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "enterogermina.html",
			   "titulo": "enterogermina",
			   "heroi": "",
			   "marca": "enterogermina",
			   "categoria": "CHC"
			 },
			 {
			   "arquivo": "equilid.html",
			   "titulo": "equilid",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "esomeprazol.html",
			   "titulo": "esomeprazol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "esperson.html",
			   "titulo": "esperson",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "exploid.html",
			   "titulo": "exploid",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "finasterida.html",
			   "titulo": "finasterida",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "flagyl.html",
			   "titulo": "flagyl",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "flagyl.html",
			   "titulo": "flagyl",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "flagyl-nistatina.html",
			   "titulo": "flagyl nistatina",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "fluconazol.html",
			   "titulo": "fluconazol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "fluxocor.html",
			   "titulo": "fluxocor",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "fluxocor-anlo.html",
			   "titulo": "fluxocor anlo",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "fosfato-prednisolona.html",
			   "titulo": "fosfato prednisolona",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "franol.html",
			   "titulo": "franol",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "frisium.html",
			   "titulo": "frisium",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "fumarato-cetotifeno.html",
			   "titulo": "fumarato cetotifeno",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "furoato-mometasona.html",
			   "titulo": "furoato mometasona",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "gardenal.html",
			   "titulo": "gardenal",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "genfibrozila-lopid.html",
			   "titulo": "genfibrozila lopid",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "glibenclamida.html",
			   "titulo": "glibenclamida",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "glucantime.html",
			   "titulo": "glucantime",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "hemifumarato.html",
			   "titulo": "hemifumarato",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "hidantal.html",
			   "titulo": "hidantal",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "hidroclorotiazida.html",
			   "titulo": "hidroclorotiazida",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "ibuprofeno.html",
			   "titulo": "ibuprofeno",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "imovane.html",
			   "titulo": "imovane",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "ladogal.html",
			   "titulo": "ladogal",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "lamotrigina.html",
			   "titulo": "lamotrigina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "laneli-dha.html",
			   "titulo": "laneli dha",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "lansoprazol.html",
			   "titulo": "lansoprazol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "lantus.html",
			   "titulo": "lantus",
			   "heroi": "lantus.png",
			   "marca": "dcv",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "lasilactona.html",
			   "titulo": "lasilactona",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "lasix.html",
			   "titulo": "lasix",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "levofloxacino.html",
			   "titulo": "levofloxacino",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "lisinopril.html",
			   "titulo": "lisinopril",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "loratadina.html",
			   "titulo": "loratadina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "lorazepam.html",
			   "titulo": "lorazepam",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "losartana-hctz.html",
			   "titulo": "losartana hctz",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "losartana-potassica.html",
			   "titulo": "losartana potassica",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "lyxumia.html",
			   "titulo": "lyxumia",
			   "heroi": "",
			   "marca": "dcv",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "mal-dexclofeniramina.html",
			   "titulo": "mal dexclofeniramina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "mal-dexclofeniramina-betametasona.html",
			   "titulo": "mal dexclofeniramina betametasona",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "mal-enalapril-renitec.html",
			   "titulo": "mal enalapril renitec",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "mal-midazolam.html",
			   "titulo": "mal midazolam",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "meloxicam.html",
			   "titulo": "meloxicam",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "mesil-doxazosina.html",
			   "titulo": "mesil doxazosina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "minima.html",
			   "titulo": "minima",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "mirtazapina.html",
			   "titulo": "mirtazapina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "mobility.html",
			   "titulo": "Mobility",
			   "heroi": "",
			   "marca": "Mobility",
			   "categoria": "CHC"
			 },
			 {
			   "arquivo": "montelucaste-sodio.html",
			   "titulo": "montelucaste sodio",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "moratus.html",
			   "titulo": "moratus",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "mucosolvan.html",
			   "titulo": "bisolvon mucosolvan",
			   "heroi": "",
			   "marca": "bisolvon mucosolvan",
			   "categoria": "CHC"
			 },
			 {
			   "arquivo": "naturetti.html",
			   "titulo": "naturetti",
			   "heroi": "",
			   "marca": "naturetti",
			   "categoria": "CHC"
			 },
			 {
			   "arquivo": "neozine.html",
			   "titulo": "neozine",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "neuleptil.html",
			   "titulo": "neuleptil",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "nistatina-oxido-zinco.html",
			   "titulo": "nistatina oxido zinco",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "nitazoxanida.html",
			   "titulo": "nitazoxanida",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "norfloxacino.html",
			   "titulo": "norfloxacino",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "novalgina.html",
			   "titulo": "Novalgina",
			   "heroi": "",
			   "marca": "Novalgina",
			   "categoria": "CHC"
			 },
			 {
			   "arquivo": "omeprazol.html",
			   "titulo": "omeprazol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "oroxadim.html",
			   "titulo": "oroxadim",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "oscal.html",
			   "titulo": "Oscal",
			   "heroi": "",
			   "marca": "Oscal",
			   "categoria": "CHC"
			 },
			 {
			   "arquivo": "osteonutri.html",
			   "titulo": "osteonutri",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "oxal-escitalopram.html",
			   "titulo": "oxal escitalopram",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "oxcarbazepina.html",
			   "titulo": "oxcarbazepina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "pantoprazol-sodico.html",
			   "titulo": "pantoprazol sodico",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "paracetamol.html",
			   "titulo": "paracetamol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "paracetamol-cafeina.html",
			   "titulo": "paracetamol cafeina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "pharmaton.html",
			   "titulo": "Pharmaton",
			   "heroi": "",
			   "marca": "Pharmaton",
			   "categoria": "CHC"
			 },
			 {
			   "arquivo": "plaquinol.html",
			   "titulo": "plaquinol",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "plasil.html",
			   "titulo": "plasil",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "plavix.html",
			   "titulo": "plavix",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "policresuleno.html",
			   "titulo": "policresuleno",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "policresuleno-cloridrato.html",
			   "titulo": "policresuleno cloridrato",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "pravastatina-sodica.html",
			   "titulo": "pravastatina sodica",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "prazol.html",
			   "titulo": "prazol",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "prednisolon.html",
			   "titulo": "prednisolon",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "prednisona.html",
			   "titulo": "prednisona",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "pregabalina.html",
			   "titulo": "pregabalina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "primacor.html",
			   "titulo": "primacor",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "proleptol.html",
			   "titulo": "proleptol",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "proprionato-clobetasol.html",
			   "titulo": "proprionato clobetasol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "puran.html",
			   "titulo": "puran-T4",
			   "heroi": "puran.png",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "pyloripac.html",
			   "titulo": "pyloripac",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "pyloripac-ibp.html",
			   "titulo": "pyloripac ibp",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "pyloripac-retrat.html",
			   "titulo": "pyloripac retrat",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "ramipril.html",
			   "titulo": "ramipril",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "renagel.html",
			   "titulo": "renagel",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "respiratus.html",
			   "titulo": "respiratus",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "rifaldin.html",
			   "titulo": "rifaldin",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "rifocina.html",
			   "titulo": "rifocina",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "risperidona.html",
			   "titulo": "risperidona",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "rosuvastatina-calcica.html",
			   "titulo": "rosuvastatina calcica",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "rovamicina.html",
			   "titulo": "rovamicina",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "sabril.html",
			   "titulo": "sabril",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "secnidal.html",
			   "titulo": "secnidal",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "secnidazol.html",
			   "titulo": "secnidazol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "simeticona.html",
			   "titulo": "simeticona",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "sinvastatina.html",
			   "titulo": "sinvastatina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "socian.html",
			   "titulo": "socian",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "soliqua.html",
			   "titulo": "soliqua",
			   "heroi": "soliqua.png",
			   "marca": "dcv",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "stilnox.html",
			   "titulo": "stilnox",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "stilnox-cr.html",
			   "titulo": "stilnox cr",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "succinato-metoprolol.html",
			   "titulo": "succinato metoprolol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "sulfato-neomicina.html",
			   "titulo": "sulfato neomicina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "sulpan.html",
			   "titulo": "sulpan",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "superan.html",
			   "titulo": "superan",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "synvisc.html",
			   "titulo": "synvisc",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "tadalafila.html",
			   "titulo": "tadalafila",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "targifor.html",
			   "titulo": "Targifor",
			   "heroi": "",
			   "marca": "Targifor",
			   "categoria": "CHC"
			 },
			 {
			   "arquivo": "targocid.html",
			   "titulo": "targocid",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "tetraciclina-anfotericina.html",
			   "titulo": "tetraciclina anfotericina",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "ticlid.html",
			   "titulo": "ticlid",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "tioconazol-tinidazol.html",
			   "titulo": "tioconazol tinidazol",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "topit.html",
			   "titulo": "topit",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "toujeo.html",
			   "titulo": "toujeo",
			   "heroi": "toujeo.png",
			   "marca": "dcv",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "travoprosta.html",
			   "titulo": "travoprosta",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "urbanil.html",
			   "titulo": "urbanil",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "valerato-betametasona.html",
			   "titulo": "valerato betametasona",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "valpakine.html",
			   "titulo": "valpakine",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "valsartana.html",
			   "titulo": "valsartana",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "valtrian.html",
			   "titulo": "valtrian",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "valtrian-hct.html",
			   "titulo": "valtrian hct",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "vbeta-genta-tolna-clioq.html",
			   "titulo": "vbeta genta tolna clioq",
			   "heroi": "inn.png",
			   "marca": "inn",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "vitawin.html",
			   "titulo": "Vitawin",
			   "heroi": "",
			   "marca": "Vitawin",
			   "categoria": "CHC"
			 },
			 {
			   "arquivo": "xatral.html",
			   "titulo": "xatral",
			   "heroi": "",
			   "marca": "ep",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "zanidip.html",
			   "titulo": "zanidip",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "zarmine.html",
			   "titulo": "zarmine",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "zinpass.html",
			   "titulo": "zinpass",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 },
			 {
			   "arquivo": "zodel.html",
			   "titulo": "zodel",
			   "heroi": "",
			   "marca": "bgx",
			   "categoria": "GEM"
			 }
        ];

        $.ajax({
            url: 'https://admin.sanofinoponto.com.br/index.php/ferramenta_execucao/api/request',
            type: 'post',
            dataType: 'json',
            data: {
                'token': localStorage.getItem('token'),
                'pesquisas': {
                    'titulo': p,
                    'categoria': ['CHC', 'gem']
                },
                'resultados': [
                    'titulo',
                    'arquivo',
                    'heroi',
                    'categoria',
                    'marca'
                ]
            },
        }).done(function(resp) {
			area.empty();

			resp.result.forEach(function (v) {

				if(v.categoria === "GEM") {
					HTML += "<a href='https://admin.sanofinoponto.com.br/resources/uploads/ferramenta_execucao/home/" + v.categoria + "/produtos/" + v.marca + "/" + v.arquivo + "'><li>" + v.titulo + "</li></a>";
				}
				else {
					HTML += "<a href='https://admin.sanofinoponto.com.br/resources/uploads/ferramenta_execucao/home/" + v.categoria + "/produtos/" + v.marca + "/" + v.arquivo + "'><li>" + v.titulo + "</li></a>";
				}
			});

			area.html(HTML);
        });

		/*area.empty();
		areaHeroi.empty();

		var s = lista.filter(function(a, b){
			return a.titulo.toString().toUpperCase().includes(p.toUpperCase()) > 0;
		});

		s.forEach(function (v) {
			if(s.length == 1 && v.heroi != ""){
				areaHeroi.html("<img src='img/herois-pesquisa/" + v.heroi + "' />")
			}	

			if(v.categoria === "GEM") {
					HTML += "<a href='https://admin.sanofinoponto.com.br/resources/uploads/ferramenta_execucao/home/" + v.categoria + "/" + v.marca + "/" + v.arquivo + "'><li>" + v.titulo + "<hr></li></a>";
			}
			else {
					HTML += "<a href='https://admin.sanofinoponto.com.br/resources/uploads/ferramenta_execucao/home/" + v.categoria + "/" + v.arquivo + "'><li>" + v.titulo + "<hr></li></a>";
			}
		});

		area.html(HTML);*/
    };

    $input.keyup(pesquisar);
    $("#btn-pesquisa").click(pesquisar);
});