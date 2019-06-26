<?php 
require __DIR__.'/vendor/autoload.php';
use PHPJasper\PHPJasper;

$input = __DIR__ .'/matrizteste.jasper';
$output = __DIR__ .'/relatorio';
$data_file = __DIR__ . '/ma.json';
//echo $data_file;exit;
$options = [
    'format' => ['pdf'],
    'params' => [],
    'locale' => 'pt_BR',
    'db_connection' => [
        'driver' => 'json',
        'data_file' => $data_file,
        'json_query' => 'data'
    ]
];

$jasper = new PHPJasper;

$jasper->process(
    $input,
    $output,
    $options
    )->execute();

    //header('Location: /monolog/relatorio/relatorio.pdf');