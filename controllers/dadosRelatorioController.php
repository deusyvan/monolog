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
            
            $name = 'resultado.json';
            $text = $data_file;
            $file = fopen($name, 'w+');
            fwrite($file, $text);
            fclose($file);
            
            //file_put_contents(BASE_URL.'relatorio/resultado.json', $data_file);
            //$dados['arquivo'] = $data_file;
        }
        header('Location: /monolog/gerando.php');
    }
    
    public function buscarDados($data_inicio,$data_fim) {
        $i = new Itens();
        $relatorio = $i->getRelatorio($data_inicio, $data_fim);
        $relatorio2['data'] = $relatorio;
        return json_encode($relatorio2);
    }
}

