<?php $title = "Accueil";
echo "<h1 class='pageTitle' style='font-size: 45px'>Accueil</h1>";


$codes = $bag['data']['randomMouseCode'];
$mouse = $bag['data']['mouse'];

if (!empty($codes)) {
    $randCode = $codes[array_rand($codes)];

// Afficher les informations du produit choisi aléatoirement
    if ($mouse !== false) {
        if (isset($mouse['image_path']) && isset($mouse['brand']) && isset($mouse['model']) && isset($mouse['price_francs'])) {
            ?>
            <p id="hometext">La <b><?php echo $mouse['model'] ?></b> de chez <b><?php echo $mouse['brand'] ?></b> est
                disponible au prix de <strong><?php echo $mouse['price_francs'] ?> CHF !</strong></p>
        <a id="details" href="item/<?= $mouse['code'] ?>">
            <img class="HomePageImg" src="<?php echo $mouse['image_path']; ?>" alt="Image de la souris">
            </a><?php
            ?>
            <a id="lienproduits" href="items">Découvrez tous nos produits ici !</a><?php

        } else {    // Sinon afficher un message d'erreur
            echo "Article non trouvé";
        }
    }
} else { //si le tableau "codes" est vide affichage d'une erreur
    echo "une erreur est survenue, essayer de relancer la page, si l'erreur persiste, merci de nous envoyer un message au traver de la page d'aide";
}
?>