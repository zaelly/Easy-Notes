<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'Home::index'); 
 $routes->get('navbar', 'NavbarController::index');
 $routes->get('comece_ja', 'ComeceJa::index');
 $routes->get('suporte', 'Suporte::index');
 $routes->get('contato', 'Contato::index');
 $routes->get('trabalhe_conosco', 'TrabalheConosco::index');




