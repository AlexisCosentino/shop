<?php
require 'app/persistences/shopData.php';
debug($_POST);
initCart();
if(!empty($_POST)) {
    fakeCart($_POST['productId'], $_POST['quantity']);
}
debug($_SESSION);
require 'ressources/views/cart/cart.php';