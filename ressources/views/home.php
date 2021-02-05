<?php
require 'ressources/views/layouts/header.php';
?>

<div class="container">
    <h1 class="pb-5">Nos voyages :</h1>
    <div class="row">
        <?php if (!empty($products)): foreach ($products as $product): ?>
            <div class="col-lg-4 pb-5">
                <a href="index.php?action=product&id=<?= $product->id ?>" class="pl-2 pr-2">
                    <img src="ressources/img/<?=$product->id?>.jpg" alt="image_produit"
                            class="img-fluid"></a>
                <div class="row">
                    <div class="col-12">
                        <h3 class="pl-3"><?= $product->title ?></h3>
                    </div>
                    <div class="col-12">
                        <h6 class="pl-5 text-danger"> <?= fancyPrice($product->price_ht, $product->vat) ?></h6>
                    </div>
                </div>
            </div>
        <?php endforeach; else: ?>
            <p> Il n'y a aucun articles </p>
        <?php endif; ?>
    </div>
</div>


<?php
require 'ressources/views/layouts/footer.php';