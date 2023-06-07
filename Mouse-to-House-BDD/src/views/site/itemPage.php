<?php $title = "Produit";

if (isset($_GET['code'])) {
    $code = $_GET['code'];
    $mouse = getMouse($code);

    if ($mouse !== false) { ?>
        <article>
            <header>
                <h2><?= $mouse['code'] ?></h2>
                <div class="tab-content">
                    <div class="">
                        <div class="span12"><h4><strong><?= $mouse['brand'] ?> - <?= $mouse['model'] ?></strong></h4>
                        </div>
                        <br>
                        <div class="span3">Disponibilité : <?= $mouse['number_available'] ?></div>
                        <br>
                        <div class="span3">Prix : <strong><?= $mouse['price_francs'] ?></strong></div>
                        <br>
                        <div class="span3">Type : <?= $mouse['type'] ?></div>
                        <br>
                        <div class="span3">Poids : <?= $mouse['weight_grams'] ?></div>
                        <br>
                        <div class="span3">Description : <?= $mouse['description'] ?></div>
                        <br>
                    </div>

                    <div>
                        <div class="thumbnail"><p><img src='<?= $mouse['image_path'] ?>' style="width:50%"></p></div>
                    </div>
                    <div>
                        <form class="AddToCartItem" method="post" action="itemToCart">
                            <input type="submit" value="Ajouter au panier"/>
                        </form>
                    </div>
                </div>
                <br>
            </header>
        </article>
        <?php


    }
} else {
    echo "Produit non trouvé";
}
?>