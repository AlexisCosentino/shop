<?php
require 'ressources/views/layouts/header.php';
?>

<h1>PANIER</h1>


<table class="table">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Titre</th>
        <th scope="col">Prix Unitaire</th>
        <th scope="col"> Quantité</th>
        <th scope="col"> Total</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($_SESSION)): ?>
        <?php foreach ($result['id'] as $id => $product): ?>
            <tr>
                <td><img src="ressources/img/indonesie.jpg" height="100px"></td>
                <td>
                    <?= $product['product']['title']?>
                </td>
                <td>
                    <?= number_format(($product['productprice']), 2, ',', ' ') . ' €'; ?>
                </td>
                <td><?= $product['quantity'] ?></td>
                <td><?= number_format(($product['totalrow']), 2, ',', ' ') . ' €'; ?>
                </td>
            </tr>
        <?php endforeach;?>
    <?php endif; debug($total);?>
    </tbody>
</table>

<div class="container">
    <div class="row justify-content-end">
        <div class="col-2">

            <p> TOTAL <?=number_format(($result['totalprice']), 2, ',', ' ') . ' €'; ?>
            </p>
            <form action="" method="post">
                <input class="btn btn-success" type="button" value="Valider le panier" name="submitCart">
            </form>

        </div>
    </div>
</div>

<?php
require 'ressources/views/layouts/footer.php';