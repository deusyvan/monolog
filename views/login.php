<div class="container-fluid">
    <?php 
        if (!isset($erros)) {
            $erros='';
        }
    ?>
    <div class="alert alert-danger" role="alert" <?php echo empty($erros) ? 'hidden="true"' : ''; ?> >
        <h4 class="alert-heading">Atenção!</h4>
        <p><?php echo $erros;?></p>
    </div>
    <form class="form-horizontal frm-login" role="form" method="POST" action="<?php echo BASE_URL.'login'; ?>">
        <fieldset>
            <legend class="form-group barra-top"><span ><b>Acesso ao Sistema <?php echo TITULO;?></b></span></legend>
            
            <div class="form-group">
              <label class="col-md-4 control-label" for="cpf"></label>  
              <div class="col-md-5">
                  <input id="cpf" name="cpf" type="text" placeholder="C P F" class="form-control input-md" >
                
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-4 control-label" for="senha"></label>
              <div class="col-md-4">
                <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md" >
                
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-4 control-label" for="btn_login"></label>
              <div class="col-md-4">
              	<input type="submit" class="btn btn-primary pull-right" value="Acessar" />
              </div>
            </div>
            <div class="form-group">
                <a  style="color:#ffffff" href="#" data-toggle="modal" data-target="#esqueciModal">> <b>Esqueci minha senha</b></a>
                <br />
                <a style="color:#ffffff" href="#" data-toggle="modal" data-target="#cadastroModal">> <b>Solicitar acesso ao sistema</b></a>
                <br />
                <hr>
                <a style="color:#ffffff" href="#" target="_blank">> <b>Guia do Usuário</b></a>
            </div>
        </fieldset>
    </form>
</div>
