<?php 
require 'environment.php';

global $config;
global $db;

$config = array();

if(ENVIRONMENT == 'development'){
    
    define("BASE_URL", "http://localhost/monolog/");
    define("TITULO", "MONOLOG");
    define('TEMPO_MAX_INATIVIDADE', 1800);//tempo em segundos
    define('DESCRICAO',"Sistema para Testes");
    $config['dbname'] = 'paginacao';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'admin';
    $config['dbpass'] = 'admin12';
    
} else {
    
    define("BASE_URL", "http://meusite.com.br/");
    define("TITULO", "BOLOTECA");
    define('TEMPO_MAX_INATIVIDADE', 1800);//tempo em segundos
    define('DESCRICAO',"Bolão das Loterias Com Amigos");
    $config['dbname'] = 'paginacao';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'admin';
    $config['dbpass'] = 'admin@12';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";charset=utf8;host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>