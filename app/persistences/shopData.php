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
        $_SESSION['cart']['id']=array();
        $_SESSION['cart']['quantity']=array();
    }
    return true;
}

