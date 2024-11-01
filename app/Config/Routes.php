<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'HomeController::index'); 
 $routes->get('navbar', 'NavbarController::index');
 $routes->get('comece_ja', 'ComeceJaController::index');
 $routes->post('comece_ja', 'ComeceJaController::index');
 $routes->get('suporte', 'SuporteController::index');
 $routes->get('contato', 'ContatoController::index');
 $routes->get('trabalhe_conosco', 'TrabalheConoscoController::index');




