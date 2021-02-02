<?php
error_reporting (E_ALL);
ini_set('display_errors', true);

require_once 'config/database.php';                 //Accés Base de données
require 'ressources/views/layouts/header.php';

echo "salut ma gueule";

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
$routes = [
    'index' => 'app/controllers/homeController.php',
    'error' => 'ressources/views/errors/error.php',
];



if (isset($action)) {
    if (array_key_exists($action, $routes)){
        require $routes[$action];
    } else {
        header("HTTP/1.0 404 Not Found");
        require $routes['error'];
    }
} else {
    require $routes['index'];
}


require 'ressources/views/layouts/footer.php';
