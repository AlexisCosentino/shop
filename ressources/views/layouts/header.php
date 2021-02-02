<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="ressources/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">

    <title> <?= $metaTitle; ?> </title>
    <meta name="description"
          content= <?= '$metaDescription'; ?>>
</head>

<body>
<header class="bg-black">


    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">

                <img src="ressources/img/logo_noir.svg" alt="logo">

                <nav class="navbar navbar-expand-lg navbar-light text-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link btn btn-lg bg-white text-dark m-1 btn-outline-dark"
                                   href="index.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-lg bg-white text-dark m-1 btn-outline-dark"
                                   href="index.php?action=blogpost&id=1">Articles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-lg bg-white text-dark m-1 btn-outline-dark"
                                   href="index.php?action=blogpostcreate">Creer un article</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-lg bg-white text-dark m-1 btn-outline-dark"
                                   href="index.php?action=blogpostmodify&id=1">Modifier un article</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-lg bg-white text-dark m-1 btn-outline-dark"
                                   href="index.php?action=blogpostdeletelist">Supprimer un article</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

    </div>


    <!-- Wave background -->
    <div style="height: 90px; overflow: hidden;">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none"
             style="height: 100%; width: 100%;">
            <path d="M-9.31,5.44 C146.44,61.67 271.49,-49.98 524.54,39.95 L500.00,0.00 L0.00,0.00 Z"
                  style="stroke: none; fill: rgb(255, 255, 255);"></path>
        </svg>
    </div>


    <div class="container bg-black pt-1">


</header>

<main>
    <div class="container pt-5 pb-5">

