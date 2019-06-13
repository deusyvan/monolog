<?php 
require_once __DIR__.'/vendor/autoload.php';
use PHPJasper\PHPJasper;
$input = __DIR__.'/rel_json.jasper';
$output= __DIR__.'/';
$options = ['format'=>['pdf','rtf'],
            'locale'=>'pt_BR',
            'db_connection'=>[
                'driver'=>'json',
                'data_file'=>BASE_URL.'teste.json',
            ]
    
            ];

$jasper = new PHPJasper();

$jasper->process($input, $output,$options)->execute();
