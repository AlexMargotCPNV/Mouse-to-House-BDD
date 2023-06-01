<?php $title = "Panier";

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['username'])) {
    // Ouvrir le fichier CSV en lecture
    $file = fopen('Data/UserCart.csv', 'r');

    // Parcourir les lignes du fichier
    while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
        
        // Vérifier si le nom d'utilisateur correspond à la première colonne
        if ($_SESSION['username'] == $data[0]) {
            echo "oke mon ruef";
            print_r($data[0]);
            //print_r($data[1]);
        } else {
            echo "pas oke mon reuf";
            print_r($data[0]);
            //print_r($data[1]);
        }
    }
    // Fermer le fichier
    fclose($file);
    echo "<br>";
    if (isset($_SESSION['cart']))
        print_r($_SESSION['cart']);
        echo "<br>";
        //print_r($_SESSION['username']);
        }else{
    //print_r($_SESSION['username']);
}?>

<div>
    <form class="Checkout" method="post" action="index.php?action=Checkout">
        <input type="submit" value="Passer en caise"/>
    </form>
</div>