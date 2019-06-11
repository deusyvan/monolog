<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php echo TITULO;?></title>
        <meta name="description" content="<?php echo DESCRICAO; ?>">
        <meta name="author" content="Web Development DFSWEB: 2º Sgt Deusyvan - <?php echo DESCRICAO; ?>">

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/favicon.ico">
        
        <!-- Switchery css -->
        <link href="<?php echo BASE_URL; ?>assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Font Awesome CSS -->
        <link href="<?php echo BASE_URL; ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Custom CSS -->
        <link href="<?php echo BASE_URL; ?>assets/css/style.css" rel="stylesheet" type="text/css" />
        
        <!-- Select2 -->
        <link href="<?php echo BASE_URL; ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
        
        <link href="<?php echo BASE_URL; ?>assets/css/style-externo.css" rel="stylesheet" type="text/css" />
        
        <!-- DatePicker -->
        <link href="<?php echo BASE_URL; ?>assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" /> 
        <link href="<?php echo BASE_URL; ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
        
        <!-- Sweet-alert -->
        <link href="<?php echo BASE_URL; ?>assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" /> 
        
        <script src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
        
        <!-- Botões Personalizados -->
        <link href="<?php echo BASE_URL; ?>assets/css/analise/botoes-personalizados.css" rel="stylesheet" /> 
</head>
<body class="adminbody">

<div id="main">

    <!-- top bar navigation -->
    <div class="headerbar">

<!--         <div id='header'> -->
<!--             <div id='header-imagem'> -->
<!--                 <div id='header-logo'></div> -->
<!--                 <div class='header-mascara'></div> -->
                <div class='header-txt1'><?php //echo TXT1; ?></div>
                <div class='header-txt2'><?php //echo TXT3; ?></div>
<!--             </div> -->
<!--         </div> -->
        <!-- LOGO -->
        <div class="headerbar-left">
            <a href="<?php echo BASE_URL; ?>home" class="logo"><img alt="Logo" src="<?php echo BASE_URL; ?>assets/images/logo-header.png" /> 
                <span class="logo-lg barra-top"><b><?php echo TITULO;?></b></span></a> 
<!--        <a href="<?php //echo BASE_URL; ?>" class="logo"><span class="logo-lg barra-top"><b><?php //echo TITULO;?></b></span></a>-->
        </div>

        <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <!-- Menu ajuda -->
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" 
                                aria-expanded="false">
                                <i class="fa fa-fw fa-question-circle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small>Ajuda e Suporte</small></h5>
                                </div>

                                <!-- item-->
                                <a target="_blank" href="https://intranet.cciex.eb.mil.br/blog-info/contato" class="dropdown-item notify-item">
                                    <p class="notify-details ml-0">
                                        <b>Gostaria de falar com o Desenvolvedor sobre o sistema?</b>
                                        <span>Envie uma mensagem</span>
                                    </p>
                                </a>

                                <!-- item-->
                                <a target="_blank" href="https://intranet.cciex.eb.mil.br/blog-info/relatar" class="dropdown-item notify-item">
                                    <p class="notify-details ml-0">
                                        <b>Gostaria apenas de relatar um problema?</b>
                                        <span>Conte-nos</span>
                                    </p>
                                </a> 
                                <!-- All-->
                                <a title="Clique para visitar o Blog da Informática" target="_blank" href="https://intranet.cciex.eb.mil.br/blog-info" 
                                    class="dropdown-item notify-item notify-all">
                                    <i class="fa fa-link"></i> Visite nosso Blog da Informática
                                </a>
                            </div>
                        </li>
                        <!-- END Menu ajuda -->
                        <!-- Menu MSG -->
                        <li class="list-inline-item dropdown notif" <?php echo isset($_SESSION['sMensagens'])?'':'hidden="true"'; ?>>
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-envelope-o"></i><span <?php echo $_SESSION['sMensagens'] > 0 ?'class="notif-bullet"':''; ?>></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg" <?php echo $_SESSION['sMensagens'] > 0 ?'':'hidden="true"'; ?>>
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">12</span>Mensagens de Contatos</small></h5>
                                </div>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Jokn Doe</b>
                                        <span>Nova mensagem recebida</span>
                                        <small class="text-muted">2 minutes atrás</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Michael Jackson</b>
                                        <span>Nova mensagem recebida</span>
                                        <small class="text-muted">15 minutes atrás</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Foxy Johnes</b>
                                        <span>Nova mensagem recebida</span>
                                        <small class="text-muted">Ontem, 13:30</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all">
                                    Ver todas mensagens
                                </a>

                            </div>
                        </li>
                        <!-- END Menu MSG -->
                        
                        <!-- Menu Alertas -->
                        <li class="list-inline-item dropdown notif" <?php echo isset($_SESSION['sAlertas'])?'':'hidden="true"'; ?>>
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-bell-o"></i><span <?php echo $_SESSION['sAlertas'] > 0 ?'class="notif-bullet"':''; ?>></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" <?php echo $_SESSION['sAlertas'] > 0 ?'':'hidden="true"'; ?>>
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">5</span>Alertas</small></h5>
                                </div>
                                
                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="<?php echo BASE_URL;?>assets/images/avatar/avatar2.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>John Doe</b>
                                        <span>Registro do usuário</span>
                                        <small class="text-muted">3 minutes atrás</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="<?php echo BASE_URL; ?>assets/images/avatar/avatar3.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Michael Cox</b>
                                        <span>Tarefa 2 concluída</span>
                                        <small class="text-muted">12 minutes atrás</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="<?php echo BASE_URL; ?>assets/images/avatar/avatar4.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Michelle Dolores</b>
                                        <span>Novo trabalho concluído</span>
                                        <small class="text-muted">35 minutes atrás</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all">
                                    Ver todos os Alertas
                                </a>

                            </div>
                        </li>
                        <!-- END Menu Alertas -->
                        
                        <!-- Menu Logado -->
                        <li class="list-inline-item dropdown notif" <?php echo isset($_SESSION['sAvatar'])?'':'hidden="true"'; ?>>
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?php echo BASE_URL.'assets/images/avatar/'.$_SESSION['sAvatar'];?>" alt="Foto usuário" class="avatar-rounded">
                                <span class="hidden-xs"><b></b></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                 <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Perfil</small> </h5>
                                 </div>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Perfil: <?php echo $_SESSION['sPerfil']?></span>
                                 </a>

                                <!-- item-->
                                <a href="<?php echo BASE_URL; ?>login/sair" class="dropdown-item notify-item">
                                    <i class="fa fa-power-off"></i> <span>Sair</span>
                                </a>
                                
                                <!-- item-->
                                <a target="_blank" href="#" class="dropdown-item notify-item">
                                    <i class="fa fa-external-link"></i> <span>Nova página</span>
                                </a>
                            </div>
                        </li>
                        <!-- END Menu Logado -->
                        
                    </ul>
                    
                    <!-- Botão Menu -->
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>

        </nav>

    </div>
    <!-- End Navigation -->
    
 
    <!-- Menu Lateral Esquerdo -->
    <div class="left main-sidebar" <?php echo isset($_SESSION['sPerfil'])?'':'hidden="true"'; ?>>
        <div class="sidebar-inner leftscroll">
            <div id="sidebar-menu">
            <ul>
                    <li class="submenu">
<!--                         <a class="active" href="<?php //echo BASE_URL; ?>index.php"><i class="fa fa-home bigfonts"></i><span> Home </span> </a> -->
                        <a href="<?php echo BASE_URL; ?>index.php"><i class="fa fa-home bigfonts" ></i> <span> Home</span> <span ></span></a>
                    </li>
                    <li class="submenu" <?php echo $_SESSION['sPerfil'] == 'Administrador' ?'':'hidden="true"'; ?>>
                        <a href="<?php echo BASE_URL; ?>"><i class="fa fa-gears bigfonts" aria-hidden="true"></i><span > Área Administrativa</span> </a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fa fa-search bigfonts" ></i> <span> Pesquisa</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li class="submenu"><a href="#" style="padding-left: 15px"><span><i class="fa fa-map-o bigfonts"></i> Estratégias</span> <span class="menu-arrow"></span></a>
                                    <ul style="">
                                        <li><a href="<?php echo BASE_URL; ?>" style="padding-left: 20px"><span><i class="fa fa-caret-right bigfonts"></i> Mais Sorteadas</span></a></li>
                                        <li><a href="<?php echo BASE_URL; ?>" style="padding-left: 20px"><i class="fa fa-caret-right bigfonts"></i> Menos Sorteadas</a></li>
                                        <li><a href="<?php echo BASE_URL; ?>" style="padding-left: 20px"><span><i class="fa fa-caret-right bigfonts"></i> Probabilidade</span></a></li>
                                        
                                    </ul>
                                </li>
                                <li class="submenu"><a href="#" style="padding-left: 15px"><span><i class="fa fa-edit bigfonts"></i> Apostar</span> <span class="menu-arrow"></span></a>
                                        <ul style="">
                                            <li><a class="active" href="<?php echo BASE_URL; ?>" style="padding-left: 20px"><span><i class="fa fa-caret-right bigfonts"></i> Mega Sena</span></a></li>
                                        </ul>
                                </li>
                                <li><a href="#" style="padding-left: 15px"><i class="fa fa-book bigfonts"></i>Relatórios</a></li>
                                <li><a href="#" style="padding-left: 15px"><i class="fa fa-tv bigfonts"></i>Resultados</a></li>
                            </ul>
                    </li>
                    <li class="submenu">
                        <a href="<?php echo BASE_URL; ?>mailbox_input.php"><i class="fa fa-envelope bigfonts"></i><span> Correio </span> </a>
                    </li>
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- End Menu Lateral Esquerdo -->
    <div class="content-page">
        <div class="content">
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div><!-- END content -->
      </div><!-- END content-page -->
    <footer class="footer" <?php echo $_SESSION['sAtivo'] == 'liberado'?'':'hidden="true"'; ?>>
        <span class="text-right">
        Copyright <a target="_blank" href="#"><?php echo DESCRICAO;?></a>
        </span>
        <span class="float-right">
        Produzido por <a target="_blank" href="https://dfsweb.com.br"><b>DFS - Web</b></a>
        </span>
    </footer>
</div>
    <!-- END main -->
    <script src="<?php echo BASE_URL; ?>assets/js/modernizr.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/moment.min.js"></script>            
    <script src="<?php echo BASE_URL; ?>assets/js/popper.min.js"></script>
       
       <script src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
    
     <script src="<?php echo BASE_URL; ?>assets/js/detect.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/fastclick.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.blockUI.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.nicescroll.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/plugins/switchery/switchery.min.js"></script>

    <!-- App js -->
    <script src="<?php echo BASE_URL; ?>assets/js/pikeadmin.js"></script>

    <!-- BEGIN Java Script for this page -->
    <!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script> -->
        <script src="<?php echo BASE_URL; ?>assets/plugins/select2/js/select2.min.js"></script>

    <!-- Counter-Up -->
    <script src="<?php echo BASE_URL; ?>assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/plugins/counterup/jquery.counterup.min.js"></script>    
    
    <!-- DateTimePicker -->
    <script src="<?php echo BASE_URL; ?>assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/plugins/bootstrap-datepicker/dist/locales/bootstrap-datepicker.pt-BR.min.js"></script>
    
    <!-- Máscara -->
    <script src="<?php echo BASE_URL; ?>assets/plugins/jquery-maskedinput/dist/jquery.maskedinput.js"></script>
    
    <!-- Ações para start de plugins -->
    <script src="<?php echo BASE_URL; ?>assets/js/modal-acoes.js"></script>
    
    <!-- bootstrap-sweetalert -->
    <script src="<?php echo BASE_URL; ?>assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
    
    <!-- Scripts Internos -->
    <script src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
     
</body>
</html>