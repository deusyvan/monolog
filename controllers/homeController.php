<?php
class homeController extends controller{
/*     public function __construct() {
        parent::__construct();
    } */
    
    public function index() {
        $dados = array();
        
        //Para verificar se está logado
        if (!isset($_SESSION['sLogin'])
            || $_SESSION['sAtivo'] == "nao_liberado"
            || $_SESSION['sAtivo'] == 'lock'
            || isset($_SESSION['obriga_troca_senha'])){
            $this->loadTemplate('login', $dados);
            exit;
        }
        
        $u = new Usuarios();
       
        /*LOGICA DE ESCOLHA DE NUMEROS**/
        /* $times = array('10','24','13','16','32','6','27','36','28','30','44','4','12','43','17','11','56');
        shuffle($times);
        $vermelho = array('37','5','46','2','42','1','50','31','58','29','52','41','8','33','59','49','34','60','38','47',
                           '7', '20', '39', '40', '35', '14', '3', '55', '19', '15', '18', '25', '51', '21', '57', '9',
                '45', '23', '26', '22', '48');
        shuffle($vermelho);
        
        $cartelas = array();
        $min = 1;
        $max = 1500;
        $vezes = 3;
        
        for ($i = 0; $i < $vezes; $i++) {
            $cartelas[] = rand($min,$max);
        }
        
        $data['cartelas'] = $cartelas;
        $data['times'] = $times;
        $data['vermelho'] = $vermelho; */
        
        
        $this->loadTemplate('home', $dados);
    }
    
}