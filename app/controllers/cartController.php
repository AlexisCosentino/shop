<?php
require 'app/persistences/shopData.php';
// Crééer le panier
initCart();

// Si Post contient quelquechose, ajoute les produits au panier
if(!empty($_POST)) {
    fakeCart($_POST['productId'], $_POST['quantity']);
}
debug($_SESSION);


debug(quantitytotalCart());
debug(priceTotalCart($mydb, $_POST['productId']));
require 'ressources/views/cart/cart.php';
