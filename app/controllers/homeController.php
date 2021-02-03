<?php
require 'app/persistences/shopData.php';

$products = getAllProducts($mydb);

require 'ressources/views/home.php';
