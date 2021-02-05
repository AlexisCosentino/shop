<?php
//Fonction qui récupère un produit suivant son ID
function productById (PDO $mydb, int $idProduct){
  $statement = $mydb->query ("SELECT title, description, id, price_ht, vat
FROM products
WHERE id = $idProduct");
$result= $statement ->fetch(PDO::FETCH_ASSOC);
return $result;
}

//Fonction qui recupère tous les produits
function getAllProducts(PDO $mydb){
    $statement = $mydb->query ("SELECT title, description, price_ht, vat, id
    FROM products
    ORDER BY title");
    $result = $statement -> fetchAll(PDO::FETCH_OBJ);
    return $result;
}


//Fonction qui crée le panier
function initCart(){
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart']=array();
    }
    return true;
}

function addProduct($id, $quantity){
    $_SESSION['cart'][$id]=intval($quantity);
}

// Fonction qui retourne  le nombre de produits total du panier
function quantitytotalCart(){
    $quantityTotal = 0;
    foreach ($_SESSION['cart'] as $id=>$quantity){
        $quantityTotal += $quantity;
    }
        return $quantityTotal;
}

// Fonction qui retourne le prix total du panier
function priceTotalProduct(PDO $mydb, $id, $quantity){
    require 'config/database.php';
    $priceTotal = 0;
        $price = productById($mydb, $id);
        $priceTotal += priceWithVAT($price['price_ht'], $price['vat']); // += : total = total + 1
        $priceTotal *= $quantity;
    return $priceTotal;
}

//Fonction qui retourne toutes les informations du produit du panier
function getCartProduct(PDO $mydb, int $id) {
    productById($mydb, $id);

}
