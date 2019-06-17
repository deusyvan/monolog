<?php
class gerarController extends controller {

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
        
        $this->loadTemplate('relatorio', $dados);
    }

}