<?php
//Fonction qui récupère un produit suivant son ID
function productById(PDO $mydb, int $idProduct)
{
    $statement = $mydb->query("SELECT title, description, id, price_ht, vat
FROM products
WHERE id = $idProduct");
    return $statement->fetch(PDO::FETCH_ASSOC);
}

//Fonction qui recupère tous les produits
function getAllProducts(PDO $mydb)
{
    $statement = $mydb->query("SELECT title, description, price_ht, vat, id
    FROM products
    ORDER BY title");
    return $statement->fetchAll(PDO::FETCH_OBJ);
}
