<?php
class loginController extends controller{
    
    public $user;
    public $erros;
 /*    public function __construct() {
        parent::__construct();
    } */
    
    public function index(){
        $dados = array();
        if (isset($_POST['cpf']) && !empty($_POST['cpf'])) {
            $cpf = addslashes($_POST['cpf']);
            $senha = addslashes($_POST['senha']);
            $u = new Usuarios();
            try{
                $valida = $u->login($cpf,$senha);
            } catch (PDOException $e) {
                $this->erros = "Falha ao conectar com o banco de dados: ".$e->getMessage();
                header("Location: ".BASE_URL);
                exit;
            }
            if ($valida) {
                $usuario = $u->getUsuario($cpf);
                if($usuario['ativo'] != 1){
                    $this->erros .= "Usuário inativo! Favor procurar o Administrador.";
                    $dados['erros'] = $this->erros;
                    $this->loadTemplate('login', $dados);
                    exit;
                }
                $_SESSION['sLogin'] = $usuario['cpf'];
                $_SESSION['sNome'] = utf8_encode($usuario['nome']);
                if($usuario['avatar'] == ''){
                    $usuario['avatar']= 'default_avatar.jpg';
                }
                $_SESSION['sAvatar'] = $usuario['avatar'];
                $_SESSION['sMensagens'] = $usuario['mensagens'];
                $_SESSION['sAlertas'] = $usuario['alertas'];
                $_SESSION['sAtivo'] = 'liberado';
                $_SESSION['sPerfil'] = 'Administrador';
                
                $this->loadTemplate('home',$dados);
                exit;
            } else {
                $dados['erros'] = $u->erro;
                $this->loadTemplate('login', $dados);
                exit;
            }
        }
        
        
        $this->loadTemplate('login',$dados);
        
    }
    
    public function sair(){
        session_destroy();
        header("Location: ".BASE_URL);
    }
}