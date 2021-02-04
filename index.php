<?php
error_reporting (E_ALL);
ini_set('display_errors', true);
session_start();
require_once 'bootstrap/app.php'; // Appelle les différents fichiers PHP nécessaires au bon fonctionnement du site
require 'routes/web.php';
