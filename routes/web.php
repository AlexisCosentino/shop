<?php
require 'ressources/views/layouts/header.php';


$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
$routes = [
    'index' => 'app/controllers/homeController.php',
    'error' => 'ressources/views/errors/error.php',
    'product' => 'app/controllers/productsController.php',
    'cart' => 'app/controllers/cartController.php',
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