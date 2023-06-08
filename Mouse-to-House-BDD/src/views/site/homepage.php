<?php $title = "Accueil";
echo "<h1 class='pageTitle' style='font-size: 45px'>Accueil</h1>";

$codes = array($bag['data']['mouseCode']);

if (!empty($codes)) {
    $randCode = $codes[array_rand($codes)];
    $item = getMouse($randCode);

// Afficher le produit choisi aléatoire
    if ($mouse !== false) {
        if (isset($mouse['Image']) && isset($mouse['brand']) && isset($mouse['modele']) && isset($mouse['prix'])) {
            ?>
            <p id="hometext">La <b><?php echo $mouse['model'] ?></b> de chez <b><?php echo $mouse['brand'] ?></b> est
                disponible au prix de <strong><?php echo $mouse['price_francs'] ?> CHF !</strong></p>
        <a id="details" href="tem&code=<?= $mouse['code'] ?>">
            <img class="HomePageImg" src="<?php echo $mouse['image_path']; ?>" alt="Image de la souris">
            </a><?php
            ?>
            <a id="lienproduits" href="=items">Découvrez tous nos produits ici !</a><?php

        } else {    // Sinon afficher un message d'erreur
            echo "Article non trouvé";
        }
    }
} else { //si le tableau "codes" est vide affichage d'une erreur
    echo "une erreur est survenue, essayer de relancer la page, si l'erreur persiste, merci de nous envoyer un message au traver de la page d'aide";
}
?>