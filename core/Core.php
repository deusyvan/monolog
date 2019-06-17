<?php 
class Core {
    
    public function run(){
        
        $url = '/';
        if(isset($_GET['url'])) {
            $url .= $_GET['url'];
        }
        
        $params = array();
        
        if (!empty($url) && $url != '/'){
            $url = explode('/', $url);//Apaga a barra
            array_shift($url);//Deixa só o que vem depois da barra, elimina onde estava a barra
            $currentController = $url[0].'Controller';//Concatena o controller
            array_shift($url);//Removendo o nome do controller pois não precisamos mais dele
            //Em seguida fazer verificação 
            if (isset($url[0]) && !empty($url[0])){
                $currentAction = $url[0];//Se existe action agente define
                array_shift($url);//Remove também após definição da action sobrando apenas parametros ou nada
            } else {
                $currentAction = 'index';//Se não existe definimos o padrão da action
            }
            
            if (count($url) > 0){//Aqui contamos quantos parametros existe e definimos na variavel se maior que zero
                $params = $url;
            }
            
        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }
        
        //Vamos definir a classe do controller usando a variavel do controller corrente de forma dinamica para estanciar
        $c = new $currentController();//após instanciar o controller vamos chamar a action dele
        
//        if(!file_exists('controllers/'.$currentController.'.php')) {
 //           $currentController = 'notFoundController';
 //           $currentAction = 'index';
  //      }        
        
 //       if(!method_exists($c, $currentAction)) {
 //           $currentAction = 'index';
 //       }
        //Executando a action pois não sabemos o metodo que queremos executar dentro da classe e seus parametros se houver
        call_user_func_array(array($c,$currentAction), $params);//Dentro de um array a classe e sua action corrente e seus parametros)
        
    }
}
