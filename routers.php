<?php 
global $routes;
$routes = array();
$routes['/inicio'] = '/home';
$routes['/login'] = '/login';
$routes['/sair'] = '/login/sair';
//Esse será sempre por último (qualquer coisa vai para o login)
$routes['/{titulo}'] = '/login';