<?php
require 'app/persistences/shopData.php';
// Crééer le panier
initCart();

// Si Post contient quelquechose, ajoute les produits au panier
if(!empty($_POST)) {
    fakeCart($_POST['productId'], $_POST['quantity']);
    $quantityTotalCart = quantitytotalCart(); //Le nombre total de produits dans le panier
    $priceTotalProduct = priceTotalProduct($mydb, $_POST['productId'], $_POST['quantity']); //Prix total par produit dans le panier
    debug($quantityTotalCart);
    debug($priceTotalProduct);
}

debug($_SESSION);

require 'ressources/views/cart/cart.php';
