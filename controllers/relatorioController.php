<?php
class relatorioController extends controller {

    public function index() {
        $data_inicio = addslashes($_POST['inicio']);
        $data_fim = addslashes($_POST['fim']);
        $data_inicio = '1974-01-08 23:00:13';
        $data_fim = '2010-01-31 17:19:31';
        $i = new Itens();
        $relatorio = $i->getRelatorio($data_inicio, $data_fim);
        $relatorio2['data'] = $relatorio;
        echo json_encode($relatorio2);
        exit;
    }
}