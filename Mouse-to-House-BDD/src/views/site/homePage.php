<?php $title = "Accueil";
echo "<h1 class='pageTitle' style='font-size: 45px'>Accueil</h1>";


$mouse = $bag['data']['mouse'];
print_r($bag['data']['mouse']);

    if (!empty($mouse)) {
// Afficher les informations du produit choisi aléatoirement
        if (isset($mouse['data']['mouse']['image_path']) && isset($mouse['data']['mouse']['brand']) && isset($mouse['data']['mouse']['model']) && isset($mouse['data']['mouse']['price_francs'])) {
            ?>
            <p id="hometext">La <b><?php echo $mouse['data']['mouse']['model'] ?></b> de chez <b><?php echo $mouse['data']['mouse']['brand'] ?></b>
                est
                disponible au prix de <strong><?php echo $mouse['data']['mouse']['price_francs'] ?> CHF !</strong></p>
        <a id="details" href="item/<?= $mouse['data']['mouse']['code'] ?>">
            <img class="HomePageImg" src="<?php echo $mouse['data']['mouse']['image_path']; ?>" alt="Image de la souris">
            </a><?php
            ?>
            <a id="lienproduits" href="userItems">Découvrez tous nos produits ici !</a><?php

        } else {    // Sinon afficher un message d'erreur
            echo "<br>Article non trouvé";
        }

    } else { //si le tableau "mouse" est vide affichage d'une erreur
        echo "une erreur est survenue, essayer de relancer la page, si l'erreur persiste, merci de nous envoyer un message au traver de la page d'aide";
    }
?>