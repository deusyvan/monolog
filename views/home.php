<div class="container-fluid"><?php !isset($erros) ? $erros='' : $erros=''; ?>
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Home</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item active">Home</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div><!-- end row -->
    <div class="alert alert-danger" role="alert" <?php echo empty($erros) ? 'hidden="true"' : ''; ?> >
        <h4 class="alert-heading">Atenção!</h4>
        <p><?php echo DESCRICAO; ?></p>
        <p><?php echo $erros;?><b></b></p>
        <p>Para mais informações contactar: (61) Deusyvan Silva - <b>Desenvolvedor Responsável</b></p>
    </div>
<!--     <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box noradius noborder bg-default">
                <i class="fa fa-file-text-o float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">Jogos Acumulados</h6>
                <h1 class="m-b-20 text-white"><?php //echo '11'; ?></h1>
                <span class="text-white"><?php //echo '5' ?> neste mês!</span>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box noradius noborder bg-warning">
                <i class="fa fa-bar-chart float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">Jogos Registrados</h6>
                <h1 class="m-b-20 text-white counter"><?php //echo 30; ?></h1>
                <span class="text-white"><?php //echo '5'; ?>% do Total</span>
            </div>
        </div>
         <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box noradius noborder bg-info">
                <i class="fa fa-user-o float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">Apostas</h6>
                <h1 class="m-b-20 text-white counter"><?php //echo '50'; ?></h1>
                <span class="text-white"><?php //echo '12'; ?> ainda não pagas</span>
            </div>
        </div>
         <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box noradius noborder bg-danger">
                <i class="fa fa-bell-o float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">Cartelas Premiadas</h6>
                <h1 class="m-b-20 text-white counter"><?php //echo '1'; ?></h1>
                <span class="text-white"><?php //echo '48'; ?> Não processadas</span>
            </div>
        </div>
    </div><!-- end row -->
    <!-- LOGO -->
    <div align="center" >
<!--   <a href="<?php //echo BASE_URL; ?>home" class="logo"><img alt="Logo" src="<?php //echo BASE_URL; ?>assets/images/logo-header.png" /> <span><?php //echo TITULO; ?></span></a>
 -->
    </div>
</div><!-- END container-fluid -->






















<!-- <h2>AZUL</h2> -->
<?php 
/* echo $times[0].'<br>';
echo $times[1].'<br>';
echo $times[2].'<br>';
echo $times[3].'<br>';
echo $times[4].'<br>';
echo $times[5].'<br>';
echo $times[6].'<br>';
echo $times[7].'<br>';
echo $times[8].'<br>';
echo $times[9].'<br>';
echo $times[10].'<br>';
echo $times[11].'<br>'; */
?>
<!-- <br/>
<br/>
<br/>
<h2>Vermelho</h2> -->
<?php 
/* echo $vermelho[0].'<br>';
echo $vermelho[1].'<br>';
echo $vermelho[2].'<br>';
echo $vermelho[3].'<br>';
echo $vermelho[4].'<br>';
echo $vermelho[5].'<br>';
echo $vermelho[6].'<br>';
echo $vermelho[7].'<br>';
echo $vermelho[8].'<br>';
echo $vermelho[9].'<br>';
echo $vermelho[10].'<br>';
echo $vermelho[11].'<br>'; */
?>
<!-- <br/>
<br/>
<br/>
<h2>Cartelas</h2> -->
<?php 
/* echo print_r($cartelas); */
?>
