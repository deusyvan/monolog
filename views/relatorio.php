<form class="form-horizontal" action="<?php echo BASE_URL.'dadosRelatorio'?>" method="POST">
        <!-- Form Name -->
        <legend>Gerar Relatório</legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="inicio">Data Inicio</label>  
          <div class="col-md-4">
          <input id="inicio" name="inicio" type="date" placeholder="Selecione a data de início do relatório" class="form-control input-md">
          <span class="help-block">Para escolha do intervalo de datas</span>  
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="fim">Data Fim</label>  
          <div class="col-md-4">
          <input id="fim" name="fim" type="date" placeholder="Selecione a data fim do relatório" class="form-control input-md">
          <span class="help-block">Para escolha do intervalo de datas</span>  
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <div class="col-md-4">
            <button class="btn btn-primary" type="submit">Gerar Relatório</button>
          </div>
        </div>
</form>
