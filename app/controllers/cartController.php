<?php
// Crééer le panier
debug($_SESSION['cart']);


// Si Post contient quelquechose, ajoute les produits au panier


if (isset($_POST['addproduct'])) {

    $id = filter_input(INPUT_POST, 'productId');
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] += $_POST['quantity'];
    } else {
        addProductToCart($_POST['productId'], $_POST['quantity']);
    }

    header('location: index.php?action=cart');
   exit();

    $_CART = getTotalCart($mydb);

} elseif (isset($_POST['editQuantity'])) {
    $editQuantity = filter_input(INPUT_POST, 'editQuantity');
    $id = filter_input(INPUT_POST, 'id');
    $_SESSION['cart'][$id] = $editQuantity;

    header('location: index.php?action=cart');
    exit();

//    $_CART = getTotalCart($mydb);
} elseif (isset ($_GET['delete'])) {
unset($_SESSION['cart'][$_GET['id']]);

    $_CART = getTotalCart($mydb);
}

require 'ressources/views/cart/cart.php';