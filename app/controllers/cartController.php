<?php
require 'app/persistences/shopData.php';
// Crééer le panier
initCart();

// Si Post contient quelquechose, ajoute les produits au panier
if(!empty($_POST)) {
    addProduct($_POST['productId'], $_POST['quantity']);
    $quantityTotalCart = quantitytotalCart(); //Le nombre total de produits dans le panier
    $priceTotalProduct = priceTotalProduct($mydb, $_POST['productId'], $_POST['quantity']); //Prix total par produit dans le panier
    var_dump($quantityTotalCart);
    var_dump($priceTotalProduct);
}

require 'ressources/views/cart/cart.php';

/*
<td><?php $result = productById($mydb, $_SESSION['cart'][$id]);
            echo $result['title'];?></td>
<td><?php $result = productById($mydb, $_SESSION['cart'][$id]);
    echo fancyPrice($result['price_ht'], $result['vat']);?></td>
<td><?= $quantity?></td>
<td><?php  $total += fancyPrice($result['price_ht'], $result['vat']) * $quantity;
    echo $total?></td>
*/