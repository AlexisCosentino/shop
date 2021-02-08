<?php
// Crééer le panier
debug($_SESSION['cart']);


// Si Post contient quelquechose, ajoute les produits au panier
if (!empty($_POST)) {
    $id = filter_input(INPUT_POST, 'productId');
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] += $_POST['quantity'];
    } else {
        addProductToCart($_POST['productId'], $_POST['quantity']);
    }
    $_CART = getTotalCart($mydb);

}


if (isset($_POST['addproduct']))











require 'ressources/views/cart/cart.php';