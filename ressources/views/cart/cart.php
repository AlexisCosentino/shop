<?php
require 'ressources/views/layouts/header.php';
debug($_CART);
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
            <th scope="col"> </th>

        </tr>
        </thead>
        <tbody>

        <?php if (!empty($_SESSION['cart'])): debug($_SESSION['cart']);?>
            <?php foreach ($_CART['id'] as $id => $product): ?>
                <tr>
                    <td><img src="ressources/img/<?= $id ?>.jpg" height="100px"></td>
                    <td>
                        <?= $product['product']['title'] ?>
                    </td>
                    <td>
                        <?= number_format(($product['productprice']), 2, ',', ' ') . ' €'; ?>
                    </td>
                    <form action="index.php?action=cart&edit&id=<?= $id ?>" method="post">
                    <td>
                        <label for="editQuantity"></label>
                        <select name="editQuantity" id="editQuantity">
                            <option value=" <?= $product['quantity'] ?>" selected> <?= $product['quantity'] ?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <input id="addproduct" name="id" value="<?= $id?>" type="hidden" >

                    </td>

                    <td><?= number_format(($product['totalrow']), 2, ',', ' ') . ' €'; ?>
                    </td>
                    <td>
                        <a href="index.php?action=cart&delete&id=<?=$id?>"> <h1 class="text-danger bold"> X </h1> </a>
                    </td>

                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <h1>VIDE</h1>
        <?php endif; ?>

        </tbody>
    </table>

    <div class="container">
        <div class="row justify-content-end">
            <div class="col-2">
                <input class="btn btn-warning" type="submit" value="Modifier le panier" name="submitCart">
                </form>
                <p> TOTAL <?=number_format(($_CART['totalprice']), 2, ',', ' ') . ' €'; ?>   </p>
                <form action="" method="post">
                    <input class="btn btn-success" type="button" value="Valider le panier" name="submitCart">
                </form>

            </div>
        </div>
    </div>

<?php
require 'ressources/views/layouts/footer.php';