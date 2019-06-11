<?php 
class controller {
    
/*     protected $db;
    
    public function __construct() {
        global $config;
    } */
    //Método que carrega nosso view que queremos recebendo dados de um array vazio ou não
    public function loadView($viewName, $viewData = array()){
        extract($viewData);//Função que recebe o array pegando os indices e transformando numa variável
        require 'views/'.$viewName.'.php';
    }
    //Método para carregar o template no sistema(usado no controller onde busca a view)
    public function loadTemplate($viewName, $viewData = array()){
        require 'views/template.php';
    }
    //Método que carrega o view dentro do template (usado no template)
    public function loadViewInTemplate($viewName, $viewData = array()){
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }
}
