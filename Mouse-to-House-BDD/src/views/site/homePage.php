<?php
$title = "Accueil";
echo "<h1 class='pageTitle' style='font-size: 45px'>Accueil</h1>";

$mouse = $bag['data']['mouse'];

// Afficher les informations du produit choisi aléatoirement
if (isset($mouse[0]['image_path']) && isset($mouse[0]['brand']) && isset($mouse[0]['model']) && isset($mouse[0]['price_francs'])) {
    ?>
    <p id="hometext">La <b><?php echo $mouse[0]['model'] ?></b> de chez <b><?php echo $mouse[0]['brand'] ?></b>
        est
        disponible au prix de <strong><?php echo $mouse[0]['price_francs'] ?> CHF !</strong></p>
    <a id="details" href="item/<?= $mouse[0]['code'] ?>">
        <img class="HomePageImg" src="<?php echo $mouse[0]['image_path']; ?>" alt="Image de la souris">
    </a>
    <?php
    ?>
    <a id="lienproduits" href="Items">Découvrez tous nos produits ici !</a>
    <?php
} else {    // Sinon afficher un message d'erreur
    echo "<br>Article non trouvé";
}
?>
