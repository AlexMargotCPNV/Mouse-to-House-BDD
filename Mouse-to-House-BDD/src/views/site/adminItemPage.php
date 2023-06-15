<?php $title = "Produit";
echo '<h2 style= color:red>Vous êtes en train de modifier les information du produits !</h2>';

if (isset($bag['data']['mouse'])) {

    $mouse = $bag['data']['mouse'];

    if ($mouse !== false) { ?>
        <article>
            <header>
                <h2><?= $mouse[0]['code'] ?></h2>
                <table>
                    <tr>
                        <td>
                            <div class="tab-content">
                                <div class="span12"><h4><strong><?= $mouse[0]['brand'] ?></strong></h4> <div class="span3">New brand : <input type="text" placeholder="<?= $mouse[0]['brand'] ?>" name="newBrand" required></div>
                                             <h4><strong><?= $mouse[0]['model'] ?></strong></h4> <div class="span3"> New model : <input type="text" placeholder="<?= $mouse[0]['model'] ?>" name="newModel" required></div>
                                </div>
                                <br>
                                <div class="span3">Default Disponibilité : <strong><?= $mouse[0]['number_available'] ?></strong></div> <div class="span3">New Disponibilité : <input type="text" placeholder="<?= $mouse[0]['number_available'] ?>" name="newQuantity" required></div>
                                <br>
                                <div class="span3">Default Prix : <strong><?= $mouse[0]['price_francs'] ?>.- CHF</strong> <div class="span3"> New Prix :<input type="text" placeholder="<?= $mouse[0]['price_francs'] ?>" name="newPrice" required></div>
                                </div>
                                <br>
                                <div class="span3">Default Type : <strong><?= $mouse[0]['type'] ?></strong></div> <div class="span3">New type : <input type="text" placeholder="<?= $mouse[0]['type'] ?>" name="newType" required></div>
                                <br>
                                <div class="span3">Default Poids : <strong><?= $mouse[0]['weight_grams'] ?></strong></div> <div class="span3"> New Poids :<input type="text" placeholder="<?= $mouse[0]['weight_grams'] ?>" name="newWeight" required></div>
                                <br>
                                <div class="span3">Default Description : <strong><?= $mouse[0]['description'] ?></strong></div> <div class="span3">New Description : <input type="text" placeholder="<?= $mouse[0]['description'] ?>" name="newDescription" required></div>
                                <br>
                        </td>
                        <th id="itemImage">
                            <img id="imageInItem" src='\<?= $mouse[0]['image_path'] ?>' style="width:25%">


                        </th>
                    </tr>
                </table>
                <div>
                    <form class="AddToCartItem" method="post" action="modifyData">
                        <input type="submit" value="Enregistrer les changements"/>
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