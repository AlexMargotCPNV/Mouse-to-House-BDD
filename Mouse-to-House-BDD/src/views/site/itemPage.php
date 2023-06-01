<?php $title = "Produit";

if (isset($_GET['code'])) {
    $code = $_GET['code'];
    $item = getItem($code);

if ($item !== false) {?>
    <article>
        <header>
            <h2><?= $item['code'] ?></h2>
            <div class="tab-content">
                <div class="">
                    <div class="span12"><h4><strong><?= $item['marque'] ?> - <?= $item['modele'] ?></strong></h4></div><br>
                    <div class="span3">Disponibilité : <?= $item['disponible'] ?></div><br>
                    <div class="span3">Prix : <strong><?= $item['prix'] ?></strong></div><br>
                    <div class="span3">Type : <?= $item['type'] ?></div><br>
                    <div class="span3">Poids : <?= $item['poid'] ?></div><br>
                    <div class="span3">Description : <?= $item['description'] ?></div><br>
                </div>

                <div>
                    <div class="thumbnail"><p><img src='<?= $item['Image'] ?>' style="width:50%"></p></div>
                </div>
                <div>
                    <form class="AddToCartItem" method="post" action="index.php?action=itemToCart">
                        <input type="submit" value="Ajouter au panier"/>
                    </form>
                </div>
            </div>
            <br>
        </header>
    </article>
    <?php


}}
else {
    echo "Produit non trouvé";
}
?>