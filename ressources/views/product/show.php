<div class="container">
    <h1> <?=$resultproduct['title']?></h1>

    <div class="row pt-5 pb-5">

        <div class="col-lg-4">
            <img src="ressources/img/indonesie.jpg" alt="productPicture" class="img-fluid">
        </div>

        <div class="col-lg-8">
            <p> <?=$resultproduct['description']?> </p>

            <div class="row">
                <p class="pl-3 pr-5 text-danger"><?=$priceTtc?> €</p>

                <form action="index.php?action=cart" method="post">

                    <label for="quantity"></label>
                    <select name="quantity" id="quantity">
                        <option value="">Quantité</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>

                    <input id="productid" name="poductid" type="hidden" value="<?= $resultproduct['id']?>" >

                    <input value="Ajouter au panier" type="submit">
                </form>
            </div>
        </div>
    </div>
</div>
