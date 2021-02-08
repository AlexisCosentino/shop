<?php
require 'config/app.php';
require 'config/database.php'; // Appelle fichier de connexion à la BDD

require 'app/helpers/debug.php'; // Appelle fonction debug joli
require 'app/helpers/price.php'; // Appelle fonction qui transforme un prix ht et une TVA en prix TTC

require 'app/persistences/cartData.php';
require 'app/persistences/productData.php';
initCart();

global $_CART;
$_CART = getTotalCart($mydb);