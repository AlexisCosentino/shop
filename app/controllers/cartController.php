<?php
// Crééer le panier
debug($_SESSION['cart']);



// Si Post contient quelquechose, ajoute les produits au panier
if (!empty($_POST)) {
//    if (!empty($_SESSION['cart'])){
//        $qtt = ($_POST['quantity']) + $_SESSION['cart'] as $key => $quantity;
//        addProduct($_POST['productId'], $qtt);
//    } else {

        addProductToCart($_POST['productId'], $_POST['quantity']);
//    }
//    $quantityTotalCart = quantitytotalCart(); //Le nombre total de produits dans le panier
//    $priceTotalProduct = priceTotalProduct($mydb, $_POST['productId'], $_POST['quantity']); //Prix total par produit dans le panier
};


$_CART = getTotalCart($mydb);

require 'ressources/views/cart/cart.php';