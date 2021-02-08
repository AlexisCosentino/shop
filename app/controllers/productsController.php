<?php

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// Récupère un produit avec l'Id de l'URL
$resultproduct = productById($mydb, $id);

// Récupère le prix HT et la TVA et calcule le prix TTC
$priceTtc = priceWithVAT($resultproduct['price_ht'], $resultproduct['vat']);

if ($resultproduct == false) {
    echo "L'article n'existe pas";
}

require 'ressources/views/product/show.php';