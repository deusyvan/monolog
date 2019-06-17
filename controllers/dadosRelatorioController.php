<?php
class dadosRelatorioController extends controller {
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
        
        if(!empty($_POST['inicio']) && !empty($_POST['fim'])){
            $data_inicio = addslashes($_POST['inicio']);
            $data_fim = addslashes($_POST['fim']);
            $data_file = dadosRelatorioController::buscarDados($data_inicio, $data_fim);
            $dados['arquivo'] = $data_file;
        }
            $this->loadTemplate('gerando', $dados);
    }
    
    public function buscarDados($data_inicio,$data_fim) {
        $i = new Itens();
        $relatorio = $i->getRelatorio($data_inicio, $data_fim);
        $relatorio2['data'] = $relatorio;
        return json_encode($relatorio2);
    }
}