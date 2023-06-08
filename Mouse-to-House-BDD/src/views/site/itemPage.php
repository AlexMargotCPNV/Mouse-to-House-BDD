<?php $title = "Produit";

if (isset($bag['data']['mouse'])) {

    $mouse = $bag['data']['mouse'];

    if ($mouse !== false) { ?>
        <article>
            <header>
                <h2><?= $mouse[0]['code'] ?></h2>
                <div class="tab-content">
                    <div class="">
                        <div class="span12"><h4><strong><?= $mouse[0]['brand'] ?> - <?= $mouse[0]['model'] ?></strong></h4>
                        </div>
                        <br>
                        <div class="span3">Disponibilité : <?= $mouse[0]['number_available'] ?></div>
                        <br>
                        <div class="span3">Prix : <strong><?= $mouse[0]['price_francs'] ?>.- CHF</strong></div>
                        <br>
                        <div class="span3">Type : <?= $mouse[0]['type'] ?></div>
                        <br>
                        <div class="span3">Poids : <?= $mouse[0]['weight_grams'] ?></div>
                        <br>
                        <div class="span3">Description : <?= $mouse[0]['description'] ?></div>
                        <br>
                    </div>

                    <div>
                        <div class="thumbnail"><p><img src='\<?=$mouse[0]['image_path'] ?>' style="width:50%"></p></div>
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