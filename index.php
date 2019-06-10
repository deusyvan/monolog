<?php
session_start();
if(!isset($_SESSION['sAtivo'])){
    $_SESSION['sAtivo'] = "nao_liberado";
}
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
    /*Nunca esquecer de ativar o modo de reescrita de URL (mod_rewrite) no Apache URL's amigáveis*/
    $core = new Core();
    $core->run();
