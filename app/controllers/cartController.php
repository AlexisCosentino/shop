<?php
require 'app/persistences/shopData.php';
// Crééer le panier
initCart();

// Si Post contient quelquechose, ajoute les produits au panier
if (!empty($_POST)) {
    addProduct($_POST['productId'], $_POST['quantity']);
    $quantityTotalCart = quantitytotalCart(); //Le nombre total de produits dans le panier
    $priceTotalProduct = priceTotalProduct($mydb, $_POST['productId'], $_POST['quantity']); //Prix total par produit dans le panier
};

$result = getTotalCart($mydb);


require 'ressources/views/cart/cart.php';