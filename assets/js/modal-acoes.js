//Inserindo o id de documento criado na sessão
    var idDocRecuperado = $("#docSelecionado").val();
    var docDescricaoRecuperado = $("#docDesc").val();
    if(this.idDocRecuperado != ''){
    	var doc ='<label for="idDocumento">Selecione o Documento de Entrada:<span class="text-danger">*</span></label>'
    			 +'<select class="form-control select2" required id="idDocumento" name="idDocumento">' 
    			 +'<option value="'+idDocRecuperado+'">'+docDescricaoRecuperado+'</option>'
    			 +'</select>'
    			 +'<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">'
    			 +'<div>'
    			 +'<br/>'
    			 +' <a role="button" href="" class="btn btn-success fa fa-plus-square bigfonts" data-toggle="modal" data-target=".bd-documento-modal-lg">'
    			 +'Adicionar Documento de Entrada'
    			 +'</a>'
    			 +'</div>'
    			 +'</div>';

    	document.getElementById("idDocumento").innerHTML = doc;
    }
 
    //Chamando modal Atos no momento de select de algum ato
//    $('#ato').onclick(function () {
//           $('#modalAto').modal('show');
//     });
    
    document.getElementById("idDocumento").onclick = function() {
        var idDocumento = document.getElementById("idDocumento");
        console.log("O indice é: " + idDocumento.selectedIndex);
        console.log("O texto é: " + idDocumento.options[idDocumento.selectedIndex].text);
        console.log("A chave é: " + idDocumento.options[idDocumento.selectedIndex].value);
    };
    
    