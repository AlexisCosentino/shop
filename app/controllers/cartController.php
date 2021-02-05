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

debug($result);
//
//
//
//        $result = productById($mydb, $_POST['productId']);                                  // Pourle titre
//        $titleProduct = $result['title'];
//
//
//        $result = productById($mydb, $id);                                  //Prix unitaire
//        $priceUnit = fancyPrice($result['price_ht'], $result['vat']);
//
//        //quantité direct dans html
//
//        $result = productById($mydb, $id);                                  //Prix Total de la ligne produit
//        $total[$id] = priceWithVAT($result['price_ht'], $result['vat']) * $quantity;
//        $totalRowPrice = number_format(($total[$id]), 2, ',', ' ') . ' €';
//
//
//$totalCart = 0;
//foreach ($total as $id => $totalRow):
//    $totalCart = $totalCart + $totalRow;
//endforeach;
//echo number_format(($totalCart), 2, ',', ' ') . ' €';



require 'ressources/views/cart/cart.php';