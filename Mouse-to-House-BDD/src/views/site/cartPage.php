<?php $title = "Panier";

echo "<h1 style='color: red; margin-left: auto; margin-right: auto;margin-top: 50px;margin-bottom: 50px'>Vous n'avez pas d'article dans votre panier !</h1></style>";
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
            echo "<h1>Vous n'avez pas d'article dans votre panier !</h1>";
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

<a href="itemspage" style="margin-right: auto;margin-left: auto;margin-bottom: 30px">Pour plus de produit cliquez ici !</a>

<div>
    <form class="Checkout" method="post" action="checkout">
        <input type="submit" value="Passer en caise"/>
    </form>
</div>