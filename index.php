<?php
session_start();

if(!isset($_SESSION['sAtivo'])){
    $_SESSION['sAtivo'] = "nao_liberado";
}

require 'vendor/autoload.php';
require 'config.php';

spl_autoload_register(function ($class){
    if(file_exists('controllers/'.$class.'.php')) {
        require 'controllers/'.$class.'.php';
    } else if(file_exists('models/'.$class.'.php')) {
        require 'models/'.$class.'.php';
    } else if(file_exists('core/'.$class.'.php')) {
        require 'core/'.$class.'.php';
    }
});
    //Vamos instanciar a biblioteca do monolog e a pre-configuração
    use PHPJasper\PHPJasper;
    $jasper = new PHPJasper;
//    $log = new Monolog\Logger("teste");
//    $log->pushHandler(new Monolog\Handler\StreamHandler('erros.log', Monolog\Logger::WARNING));//Onde vai salvar o log

//$log->addError("Deu algo errado");

    /*Nunca esquecer de ativar o modo de reescrita de URL (mod_rewrite) no Apache URL's amigáveis*/
    $core = new Core();
    $core->run();
