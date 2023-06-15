<?php $title="Produits Admin";

$mice = $bag['data']['mice'];
?>

<?php
if ($mice !== FALSE) { ?>
    <table style='width:80%;margin-left: auto;margin-right: auto;margin-top: 50px;margin-bottom: 50px'>
        <tr>
            <th><h4>Code</h4></th>
            <th><h4>Marque</h4></th>
            <th><h4>Modèle</h4></th>
            <th><h4>Disponibles</h4></th>
            <th><h4>Prix</h4></th>
            <th><h4>Type</h4></th>
            <th><h4>Image</h4></th>
            <th><h4>Détails</h4></th>
            <th><h4>Ajouter au panier</h4></th>
            <th><h4>Modifier</h4></th>
        </tr>

    <?php
    // Boucler jusqu'à ce que tous les produits soient affichés
    foreach ($mice as $mouse) { ?>
        <tr>
            <td><?= $mouse["code"] ?></td>
            <td><?= $mouse["brand"] ?></td>
            <td><?= $mouse["model"] ?></td>
            <td><?= $mouse["number_available"] ?></td>
            <td><?= $mouse["price_francs"] ?>CHF</td>
            <td><?= $mouse["type"] ?></td>
            <?php $image = $mouse["image_path"] ?>
            <td><img class='itemInTable' src='<?= $image ?>'/></td>
            <td>
                <a class="boutonsItems" type="submit" style="padding: 13px 30px 13px 30px" href="item/<?= $mouse['code']?>"
                <form style="background-color: #2259ff" method="get" type="submit">Détails</form>
            </td>
            <td>
                <?php $bag['data']['mouseCode'] = $mouse['code']; ?>
                <a class="boutonsItems" type="submit" href="itemToCart/code=<?= $mouse['code']?>"
                <form style="background-color: #2259ff" method="post" type="submit">Ajouter au panier</form>
            </td>
            <td>
                <a class="boutonsItems" type="submit" href="modifyItem/<?= $mouse['code']?>"
                <form style="background-color: #2259ff" method="post" type="submit">Modifier</form>
            </td>
        </tr>
        <?php
        }
    ?>
    </table>
<?php
}
?>