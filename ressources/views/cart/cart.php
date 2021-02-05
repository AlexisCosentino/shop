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
        <?php foreach ($_SESSION['cart'] as $id => $quantity): ?>
            <tr>
                <td><img src="ressources/img/indonesie.jpg" height="100px"></td>
                <td><?php
                    $result = productById($mydb, $id);
                    echo $result['title'];
                    ?>
                </td>
                <td><?php $result = productById($mydb, $id);
                    echo fancyPrice($result['price_ht'], $result['vat']); ?>
                </td>
                <td><?= $quantity ?></td>
                <td><?php $result = productById($mydb, $id);
                    $total[$id]  = priceWithVAT($result['price_ht'], $result['vat']) * $quantity;
                    echo number_format(($total[$id]), 2, ',', ' ') . ' €'; ?></td>
            </tr>
        <?php endforeach;?>
    <?php endif; debug($total);?>
    </tbody>
</table>

<div class="container">
    <div class="row justify-content-end">
        <div class="col-2">

            <p> TOTAL <?php $totalCart = 0;
                foreach ($total as $id => $totalRow):
                    $totalCart = $totalCart + $totalRow;
                endforeach;
                echo number_format(($totalCart), 2, ',', ' ') . ' €'; ?>
            </p>
            <form action="" method="post">
                <input class="btn btn-success" type="button" value="Valider le panier" name="submitCart">
            </form>

        </div>
    </div>
</div>