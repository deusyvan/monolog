 //Chamada da função no modal para select2     
    $('.select2').select2();

//Chamada da função no modal para select2 especifico da classe modal
    $('.selectModal').select2({
        dropdownParent: $('#bd-documento-modal-lg')
    });

    function teste(){
    	//alert('teste');
    	$('#id-bd-ato-modal-lg').modal('show');
    	
    }
    
  //Calendario de data para form Modal Documento
    $('.dataDoc').datepicker({
    	autoclose: true, //fecha o calendário ao selecionar a data
    	language: 'pt-BR'
    });
    
  //Máscara para formatação da data
    $(".dataDoc").mask("99/99/9999",{placeholder:" "}); //deveria criar uma mascara, mas está impedindo a digitação. Deixei pois impede que o usuario exclua a data

    
    // Dados para o menu login -->
    
