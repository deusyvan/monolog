// Script para inserção de data de encaminhamento no ato do tcu através dos processos via modal -->
$('#modalAtoDataEnc').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botão que acionou o modal
  var atorecid = button.data('idatorec') // Extrai informação dos atributos data-*
  var atorecnr = button.data('nratorec') // Extrai informação dos atributos data-*
  var atorecinstituidor = button.data('instituidoratorec') // Extrai informação dos atributos data-*
  var processoid = button.data('processoid') // Extrai informação dos atributos data-*
  var processosku = button.data('processosku') // Extrai informação dos atributos data-*

  // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
  var modal = $(this)
  modal.find('.modal-title').text('Edição do Ato  ' + atorecnr)
  modal.find('#nrAto').val(atorecnr)
  modal.find('#servidorInstituidor').val(atorecinstituidor)
  modal.find('#idAtoAlterar').val(atorecid)
  modal.find('#processoid').val(processoid)
  modal.find('#processosku').val(processosku)
})  	
