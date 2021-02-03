<?php

function productById (PDO $mydb, int $idProduct){
  $statement = $mydb->query ("SELECT title, description, id, price_ht, vat
FROM products
WHERE id = $idProduct");
$result= $statement ->fetch(PDO::FETCH_ASSOC);
return $result;
}
