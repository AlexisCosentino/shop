<?php

//Fonction qui crée le panier
function initCart()
{
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
}

function getTotalCart($mydb)
{
    $result['qttotal'] = 0;
    $result['totalprice'] = 0;

    foreach ($_SESSION['cart'] as $id => $quantity) {
        $product = productById($mydb, $id);
        $productPrice = priceWithVAT($product['price_ht'], $product['vat']);
        $totalRow = $productPrice * $quantity;
        $result['totalprice'] += $totalRow;
        $result['qttotal'] += $quantity;
        $result['id'][$id] = ['product' => $product,
            'productprice' => $productPrice,
            'totalrow' => $totalRow,
            'quantity' => $quantity
        ];
    }

    return $result;
}

//Fonction qui retourne toutes les informations du produit du panier
function getProductCart(PDO $mydb, int $id)
{
    productById($mydb, $id);
}

function addProductToCart(int $id, int $quantity)
{
    $_SESSION['cart'][$id] = intval($quantity);
}

// Fonction qui retourne  le nombre de produits total du panier
function quantityTotalCart()
{
    $quantityTotal = 0;
    foreach ($_SESSION['cart'] as $id => $quantity) {
        $quantityTotal += $quantity;
    }
    return $quantityTotal;
}

// Fonction qui retourne le prix total du panier
function priceTotalProduct(PDO $mydb, $id, $quantity)
{
    $priceTotal = 0;
    $price = productById($mydb, $id);
    $priceTotal += priceWithVAT($price['price_ht'], $price['vat']); // += : total = total + 1
    $priceTotal *= $quantity;
    return $priceTotal;
}
