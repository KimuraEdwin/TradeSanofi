$(document).ready(function () {

    $("#resetPage").on('click', function(){
        window.location.reload()
    });

    $("#REDE").on('change', function(){
        var selected = $("#REDE").val()
        $("#resetPage").addClass("show-flex")
        

        if( selected === "EXTRAFARMA" ){
            
            var rede = '<div class="btn-filtro d-flex j-content-center a-items-center">'+
                            '<select id="REDE" name="REDE" class="text-filtro">'+
                                '<option value="">redes</option>'+
                                '<option value="DPSP">DPSP</option>'+
                                '<option value="EXTRAFARMA" selected>Extra Farma</option>'+
                                '<option value="RAIA DROGASIL">Raia Drogasil</option>'+
                                '<option value="PAGUEMENOS">Pague Menos</option>'+
                            '</select>'+
                        '</div>'

            var categoria = '<div class="btn-filtro d-flex j-content-center a-items-center">'+
                                '<select id="CATEGORIA" name="CATEGORIA" class="text-filtro campo-1">'+
                                    '<option value="">categoria</option>'+
                                    '<option value="DOR E FEBRE">Dor e Febre</option>'+
                                '</select>'+
                            '</div>'

            var perfilLoja = '<div class="btn-filtro d-flex j-content-center a-items-center">'+
                                '<select id="PERFIL_LOJA" name="PERFIL_LOJA" class="text-filtro campo-2" disabled>'+
                                    '<option value="">perfil loja</option>'+
                                '</select>'+
                            '</div>'

            var regiao =    '<div class="btn-filtro d-flex j-content-center a-items-center" style="display:none">'+
                                '<select id="REGIAO" name="REGIAO" class="text-filtro campo-3" disabled>'+
                                    '<option value="-">regiao</option>'+
                                '</select>'+
                            '</div>'

            var numModulos = '<div class="btn-filtro d-flex j-content-center a-items-center">'+
                                '<select id="NUMERO_DE_MODULOS" name="NUMERO_DE_MODULOS" class="text-filtro campo-4" disabled>'+
                                    '<option value="">nº de módulos</option>'+
                                '</select>'+
                            '</div>'

            var alturaMobiliario = '<div class="btn-filtro d-flex j-content-center a-items-center">'+
                                        '<select id="ALTURA_DO_MOBILIARIO" name="ALTURA_DO_MOBILIARIO" class="text-filtro" disabled>'+
                                            '<option value="">altura do mobiliário</option>'+
                                        '</select>'+
                                    '</div>'

            var tipoMobiliario = '<div class="btn-filtro d-flex j-content-center a-items-center" style="display:none">'+
                                    '<select id="TIPO_DE_MOBILIARIO" name="TIPO_DE_MOBILIARIO" class="text-filtro">'+
                                        '<option value="-">tipo de mobiliário</option>'+
                                    '</select>'+
                                '</div>'

            var planograma = '<div class="btn-filtro d-flex j-content-center a-items-center campo-7">'+
                                '<select id="PLANOGRAMA" name="PLANOGRAMA" class="text-filtro " disabled>'+
                                    '<option value="">planograma</option>'+
                                '</select>'+
                            '</div>'

            $('#input-opt').empty()
            $('#input-opt').append(rede)
            $('#input-opt').append(categoria)
            $('#input-opt').append(perfilLoja)
            $('#input-opt').append(regiao)
            $('#input-opt').append(numModulos)
            $('#input-opt').append(alturaMobiliario)
            $('#input-opt').append(tipoMobiliario)
            $('#input-opt').append(planograma)



            $("#CATEGORIA").on('change', function(){
                var varCATEGORIA = $('#CATEGORIA').val()
        
                const filtrarResultado = function(p){
                    if(varCATEGORIA){
                        return p.CATEGORIA == varCATEGORIA
                    }
                }

                const pegarfiltro = e => e.PERFIL_LOJA
            
                $.getScript("../../webroot/js/lista_extrafarma.js", function(){
                    var listageral = lista.filter(filtrarResultado).map(pegarfiltro)
                    var qtd = [listageral[0]]
                    for (var i = 0; i < listageral.length; i++ ){
                        if(listageral[i+1]){
                            if(listageral[i+1] != listageral[i]){
                                if(!qtd.find(e => e == listageral[i+1])){
                                    qtd.push(listageral[i+1])
                                }                        
                            }
                        }
                    }
                    console.log(qtd)

                    $("#PERFIL_LOJA").prop("disabled", false)

                    var option = ""

                    $("#PERFIL_LOJA").empty()
                    $("#PERFIL_LOJA").append("<option value=''>perfil loja</option>")

                    for(var x = 0; x < qtd.length ; x++){
                        option += "<option value='"+qtd[x]+"'>"+qtd[x]+"</option>"
                    }

                    $("#PERFIL_LOJA").append(option)
                })

                


            })
                
            $("#PERFIL_LOJA").on('change', function(){
                var varCATEGORIA = $('#CATEGORIA').val()
                var varPERFIL_LOJA = $('#PERFIL_LOJA').val()
        
                const filtrarResultado = function(p){
                    if(varCATEGORIA){
                        if(varPERFIL_LOJA){
                            return ((p.CATEGORIA == varCATEGORIA) && (p.PERFIL_LOJA == varPERFIL_LOJA))
                        }
                        return p.CATEGORIA == varCATEGORIA
                    }
                }

                const pegarfiltro = e => e.REGIAO
            
                $.getScript("../../webroot/js/lista_extrafarma.js", function(){
                    var listageral = lista.filter(filtrarResultado).map(pegarfiltro)
                    var qtd = [listageral[0]]
                    for (var i = 0; i < listageral.length; i++ ){
                        if(listageral[i+1]){
                            if(listageral[i+1] != listageral[i]){
                                if(!qtd.find(e => e == listageral[i+1])){
                                    qtd.push(listageral[i+1])
                                }                        
                            }
                        }
                    }
                    console.log(qtd)

                    $("#REGIAO").prop("disabled", false)

                    var option = ""

                    $("#REGIAO").empty()
                    $("#REGIAO").append("<option value=''>perfil loja</option>")

                    for(var x = 0; x < qtd.length ; x++){
                        option += "<option value='"+qtd[x]+"'>"+qtd[x]+"</option>"
                    }

                    $("#REGIAO").append(option)
                })


            })

            $("#REGIAO").on('change', function(){
                var varCATEGORIA = $('#CATEGORIA').val()
                var varPERFIL_LOJA = $('#PERFIL_LOJA').val()
                var varREGIAO = $('#REGIAO').val()
        
                const filtrarResultado = function(p){
                    if(varCATEGORIA){
                        if(varPERFIL_LOJA){
                            if(varREGIAO){
                                return ((p.CATEGORIA == varCATEGORIA) && (p.PERFIL_LOJA == varPERFIL_LOJA) && (p.REGIAO == varREGIAO))
                            }
                            return ((p.CATEGORIA == varCATEGORIA) && (p.PERFIL_LOJA == varPERFIL_LOJA))
                        }
                        return p.CATEGORIA == varCATEGORIA
                    }
                }

                const pegarfiltro = e => e.NUMERO_DE_MODULOS
            
                $.getScript("../../webroot/js/lista_extrafarma.js", function(){
                    var listageral = lista.filter(filtrarResultado).map(pegarfiltro)
                    var qtd = [listageral[0]]
                    for (var i = 0; i < listageral.length; i++ ){
                        if(listageral[i+1]){
                            if(listageral[i+1] != listageral[i]){
                                if(!qtd.find(e => e == listageral[i+1])){
                                    qtd.push(listageral[i+1])
                                }                        
                            }
                        }
                    }
                    console.log(qtd)
                    $("#NUMERO_DE_MODULOS").prop("disabled", false)

                    var option = ""

                    $("#NUMERO_DE_MODULOS").empty()
                    $("#NUMERO_DE_MODULOS").append("<option value=''>nº de módulos</option>")

                    for(var x = 0; x < qtd.length ; x++){
                        option += "<option value='"+qtd[x]+"'>"+qtd[x]+"</option>"
                    }

                    $("#NUMERO_DE_MODULOS").append(option)
                })


            })
                
            $("#NUMERO_DE_MODULOS").on('change', function(){
                var varCATEGORIA = $('#CATEGORIA').val()
                var varPERFIL_LOJA = $('#PERFIL_LOJA').val()
                var varREGIAO = $('#REGIAO').val()
                var varNUMERO_DE_MODULOS = $('#NUMERO_DE_MODULOS').val()
        
                const filtrarResultado = function(p){
                    if(varCATEGORIA){
                        if(varPERFIL_LOJA){
                            if(varREGIAO){
                                if(varNUMERO_DE_MODULOS){
                                    return ((p.CATEGORIA == varCATEGORIA) && (p.PERFIL_LOJA == varPERFIL_LOJA) && (p.REGIAO == varREGIAO) && (p.NUMERO_DE_MODULOS == varNUMERO_DE_MODULOS))
                                }
                                return ((p.CATEGORIA == varCATEGORIA) && (p.PERFIL_LOJA == varPERFIL_LOJA) && (p.REGIAO == varREGIAO))
                            }
                            return ((p.CATEGORIA == varCATEGORIA) && (p.PERFIL_LOJA == varPERFIL_LOJA))
                        }
                        return p.CATEGORIA == varCATEGORIA
                    }
                }

                const pegarfiltro = e => e.ALTURA_DO_MOBILIARIO
            
                $.getScript("../../webroot/js/lista_extrafarma.js", function(){
                    var listageral = lista.filter(filtrarResultado).map(pegarfiltro)
                    var qtd = [listageral[0]]
                    for (var i = 0; i < listageral.length; i++ ){
                        if(listageral[i+1]){
                            if(listageral[i+1] != listageral[i]){
                                if(!qtd.find(e => e == listageral[i+1])){
                                    qtd.push(listageral[i+1])
                                }                        
                            }
                        }
                    }
                    console.log(qtd)

                    $("#ALTURA_DO_MOBILIARIO").prop("disabled", false)

                    var option = ""

                    $("#ALTURA_DO_MOBILIARIO").empty()
                    $("#ALTURA_DO_MOBILIARIO").append("<option value=''>altura do mobiliário</option>")

                    for(var x = 0; x < qtd.length ; x++){
                        option += "<option value='"+qtd[x]+"'>"+qtd[x]+"</option>"
                    }

                    $("#ALTURA_DO_MOBILIARIO").append(option)
                })


            })

            $("#ALTURA_DO_MOBILIARIO").on('change', function(){
                var varCATEGORIA = $('#CATEGORIA').val()
                var varPERFIL_LOJA = $('#PERFIL_LOJA').val()
                var varREGIAO = $('#REGIAO').val()
                var varNUMERO_DE_MODULOS = $('#NUMERO_DE_MODULOS').val()
                var varALTURA_DO_MOBILIARIO = $('#ALTURA_DO_MOBILIARIO').val()
        
                const filtrarResultado = function(p){
                    if(varCATEGORIA){
                        if(varPERFIL_LOJA){
                            if(varREGIAO){
                                if(varNUMERO_DE_MODULOS){
                                    if(varALTURA_DO_MOBILIARIO){
                                        return ((p.CATEGORIA == varCATEGORIA) && 
                                                (p.PERFIL_LOJA == varPERFIL_LOJA) && 
                                                (p.REGIAO == varREGIAO) && 
                                                (p.NUMERO_DE_MODULOS == varNUMERO_DE_MODULOS) && 
                                                (p.ALTURA_DO_MOBILIARIO == varALTURA_DO_MOBILIARIO))
                                    }
                                    return ((p.CATEGORIA == varCATEGORIA) && 
                                            (p.PERFIL_LOJA == varPERFIL_LOJA) && 
                                            (p.REGIAO == varREGIAO) && 
                                            (p.NUMERO_DE_MODULOS == varNUMERO_DE_MODULOS))
                                }
                                return ((p.CATEGORIA == varCATEGORIA) && 
                                        (p.PERFIL_LOJA == varPERFIL_LOJA) && 
                                        (p.REGIAO == varREGIAO))
                            }
                            return ((p.CATEGORIA == varCATEGORIA) && 
                                    (p.PERFIL_LOJA == varPERFIL_LOJA))
                        }
                        return p.CATEGORIA == varCATEGORIA
                    }
                }

                const pegarfiltro = e => e.TIPO_DE_MOBILIARIO
            
                $.getScript("../../webroot/js/lista_extrafarma.js", function(){
                    var listageral = lista.filter(filtrarResultado).map(pegarfiltro)
                    var qtd = [listageral[0]]
                    for (var i = 0; i < listageral.length; i++ ){
                        if(listageral[i+1]){
                            if(listageral[i+1] != listageral[i]){
                                if(!qtd.find(e => e == listageral[i+1])){
                                    qtd.push(listageral[i+1])
                                }                        
                            }
                        }
                    }
                    console.log(qtd)

                    $("#TIPO_DE_MOBILIARIO").prop("disabled", false)

                    var option = ""

                    $("#TIPO_DE_MOBILIARIO").empty()
                    $("#TIPO_DE_MOBILIARIO").append("<option value=''>tipo de mobiliário</option>")

                    for(var x = 0; x < qtd.length ; x++){
                        option += "<option value='"+qtd[x]+"'>"+qtd[x]+"</option>"
                    }

                    $("#TIPO_DE_MOBILIARIO").append(option)
                })


            })

            $("#TIPO_DE_MOBILIARIO").on('change', function(){
                var varCATEGORIA = $('#CATEGORIA').val()
                var varPERFIL_LOJA = $('#PERFIL_LOJA').val()
                var varREGIAO = $('#REGIAO').val()
                var varNUMERO_DE_MODULOS = $('#NUMERO_DE_MODULOS').val()
                var varALTURA_DO_MOBILIARIO = $('#ALTURA_DO_MOBILIARIO').val()
                var varTIPO_DE_MOBILIARIO = $('#TIPO_DE_MOBILIARIO').val()
        
                const filtrarResultado = function(p){
                    if(varCATEGORIA){
                        if(varPERFIL_LOJA){
                            if(varREGIAO){
                                if(varNUMERO_DE_MODULOS){
                                    if(varALTURA_DO_MOBILIARIO){
                                        if(varTIPO_DE_MOBILIARIO){
                                            return ((p.CATEGORIA == varCATEGORIA) && 
                                                    (p.PERFIL_LOJA == varPERFIL_LOJA) && 
                                                    (p.REGIAO == varREGIAO) && 
                                                    (p.NUMERO_DE_MODULOS == varNUMERO_DE_MODULOS) && 
                                                    (p.ALTURA_DO_MOBILIARIO == varALTURA_DO_MOBILIARIO) && 
                                                    (p.TIPO_DE_MOBILIARIO == varTIPO_DE_MOBILIARIO))
                                        }
                                        return ((p.CATEGORIA == varCATEGORIA) && 
                                                (p.PERFIL_LOJA == varPERFIL_LOJA) && 
                                                (p.REGIAO == varREGIAO) && 
                                                (p.NUMERO_DE_MODULOS == varNUMERO_DE_MODULOS) && 
                                                (p.ALTURA_DO_MOBILIARIO == varALTURA_DO_MOBILIARIO))
                                    }
                                    return ((p.CATEGORIA == varCATEGORIA) && 
                                            (p.PERFIL_LOJA == varPERFIL_LOJA) && 
                                            (p.REGIAO == varREGIAO) && 
                                            (p.NUMERO_DE_MODULOS == varNUMERO_DE_MODULOS))
                                }
                                return ((p.CATEGORIA == varCATEGORIA) && 
                                        (p.PERFIL_LOJA == varPERFIL_LOJA) && 
                                        (p.REGIAO == varREGIAO))
                            }
                            return ((p.CATEGORIA == varCATEGORIA) && 
                                    (p.PERFIL_LOJA == varPERFIL_LOJA))
                        }
                        return p.CATEGORIA == varCATEGORIA
                    }
                }

                const pegarfiltro = e => e.PLANOGRAMA
            
                $.getScript("../../webroot/js/lista_extrafarma.js", function(){
                    var listageral = lista.filter(filtrarResultado).map(pegarfiltro)
                    var qtd = [listageral[0]]
                    for (var i = 0; i < listageral.length; i++ ){
                        if(listageral[i+1]){
                            if(listageral[i+1] != listageral[i]){
                                if(!qtd.find(e => e == listageral[i+1])){
                                    qtd.push(listageral[i+1])
                                }                        
                            }
                        }
                    }
                    console.log(qtd)
                    
                    $("#PLANOGRAMA").prop("disabled", false)

                    var option = ""

                    $("#PLANOGRAMA").empty()
                    $("#PLANOGRAMA").append("<option value=''>planograma</option>")

                    for(var x = 0; x < qtd.length ; x++){
                        option += "<option value='"+qtd[x]+"'>"+qtd[x]+"</option>"
                    }

                    $("#PLANOGRAMA").append(option)
                })
            })

        }
       
        

        
    })
})