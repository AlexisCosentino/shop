<?php

require 'app/persistences/shopData.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$resultproduct = productById($mydb, $id);

if ($resultproduct == false){
echo "L'article n'esxiste pas";
}
require 'ressources/views/product/show.php';