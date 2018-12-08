$(document).ready(function(){


    // Buscando API do ajax para usar os dados do arquivo .json para preencher os campos e serem editaveis

    $.ajax({
        url: "http://localhost/teste-hubert-front-end/condominios.json",
        type: 'GET',
        dataType : 'json',
        contentType: "application/json; charset=utf-8",
        success: function(data){
            console.log(data.condominios);
            let condominios = data.condominios;
            for (let index = 0; index < condominios.length; index++) {
                if(condominios[index]['condominio-id'] == $('input[name="condominio-id"]').val()){
                    console.log($('input#condominio-id').val())
                    $("input#incorporadora").val(condominios[index]['incorporadora'])
                    $("input#engenheiro").val(condominios[index]['engenheiro'])
                    $("input#metodo-construtivo").val(condominios[index]['metodo-construtivo'])
                    $("input#construtora").val(condominios[index]['construtora'])
                    $("input#outros-responsaveis").val(condominios[index]['outros-responsaveis'])
                    $("input#telefone").val(condominios[index]['telefone'])
                    $("input#tipoap").val(condominios[index]['tipoap'])
                    $("input#area-construida").val(condominios[index]['area-construida'])
                    $("input#area-do-terreno").val(condominios[index]['area-do-terreno'])
                    $("input#area-verde").val(condominios[index]['area-verde'])
                    $("input#obs").val(condominios[index]['obs'])
                    $("input#protecao").val(condominios[index]['protecao'])
                    $("input#antenas").val(condominios[index]['antenas'])
                    $("input#cftv").val(condominios[index]['cftv'])
                    $("input#qtcameras").val(condominios[index]['qtcameras'])
                }
            } 
        }
    });


    // Validacao dos campos do formulario

    $('#btn-finalizar').on('click', function(){
        $('#lista-erros').empty();
        let erros = [];


        // Caso o campo esteja vazio pede para preencher tal campo

        $('#form-condominio input').each(function(key, element){
            if(element.value == ''){
               erros.push('Preencha o campo '+ element.name);
            }
        });

        // Pega todos os campos que ficaram em branco e faz uma lista em baixo mostrando quais devem ser preenchidos para poder enviar o formulario

        if(erros.length > 0){
            $('#lista-erros').addClass('alert alert-danger');
            for(let i = 0; i < erros.length; i++){
                $('#lista-erros').append('<p>'+erros[i]+'</p>');
            }
           
        } else {
            $('#lista-erros').empty();
            $('#form-condominio').submit();
            alert('Enviado com sucesso')
        }


    });




    // Mascara do telefone

    $("#telefone")
    .mask("(99) 9999-9999?9")
    .focusout(function (event) {  
        var target, phone, element;  
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
        phone = target.value.replace(/\D/g, '');
        element = $(target);  
        element.unmask();  
        if(phone.length > 10) {  
            element.mask("(99) 99999-999?9");  
        } else {  
            element.mask("(99) 9999-9999?9");  
        }  
    });

});