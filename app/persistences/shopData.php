<?php

function productById ($mydb,$idProduct){
  $statement = $mydb->query ("SELECT title, description, id 
FROM products
WHERE id = $idProduct");
$result= $statement ->fetch(PDO::FETCH_ASSOC);
return $result;
}