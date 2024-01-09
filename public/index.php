<?php

//REQUIRE
require __DIR__ . '/../vendor/autoload.php';

//DEMARRAGE PHP
session_start();

use Pokedex\Controllers\ErrorController;

$NAMESPACE_CONTROLLERS = '\Pokedex\Controllers\\';

//ALTOROUTER

$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']); 


//ROUTES

//MainController
//*HOME : liste tous les pokémons de la base
$router->map(
    'GET',
    '/',
    [
        'controller'=>'MainController',
        'method' => 'home',
    ],
    'main-home'
);

// PokemonController
//*POKEMON : affiche le détail d'un pokémon
$router->map(
    'GET',
    '/pokemon/[i:number]',
    [
        'controller'=> 'PokemonController',
        'method' => 'pokemon',
    ],
    'pokemon-list'
);

//*TYPE : liste des types
$router->map(
    'GET',
    '/type',
    [
        'controller'=>'PokemonController',
        'method' => 'type'
    ],
    'pokemon-type'
);

//*POKEMON LIST : liste des pokemons selon le type
$router->map(
    'GET',
    '/type/[i:id]',
    [
        'controller'=>'PokemonController',
        'method' => 'typeList'
    ],
    'pokemon-typelist'
);

//ErrorController
//*ERREUR 404
$router->map(
    'GET',
    '/404',
    [
        'controller'=>'ErrorController',
        'method' => 'error404',
    ],
    'error-404',
);


//DISPATCHER

$match = $router->match();

if ($match == false){

    $controller = new ErrorController();
    $controller->error404();
    die();

} else {

    $target = $match ['target'];
    $controllerName = $NAMESPACE_CONTROLLERS . $target['controller'];
    $methodName = $target['method'];

    $controller = new $controllerName($router);

    $controller->setRouter($router);

    $routeParams = $match['params'];

    $controller->$methodName($routeParams);

}