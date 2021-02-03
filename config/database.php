<?php

try {
    $user = 'shop';
    $password = 'wildjourney';
    $mydb = new PDO('mysql:host=localhost;dbname=wildjourney;charset=UTF8',$user,$password);

} catch (PDOException $exception) {
    echo "Erreur:" . $exception ->getMessage();
    die();
}