<?php
/**
 * This php file is designed to manage all operation regarding snow's management
 * Author   : pascal.benzonana@cpnv.ch
 * Project  : 151
 * Created  : 18.02.2019 - 21:40
 *
 * Last update :    19.02.2019 PBA
 *                  update fields in query
 * Source       :   https://bitbucket.org/pba_cpnv/151-2019_pba
 */

require_once 'dbConnector.php';

/**
 * This function is designed to get all active mice
 * @return array : containing all information about mice. Array can be empty.
 */
function getMice(){
    $separator = '\'';
    $productsQuery = 'SELECT code, brand, model, number_available, price_francs, image_path, type FROM mth.products WHERE active = 1';
    return executeQuerySelect($productsQuery);
}

function _getMice() {
    $items = array();
    // Tester si le fichier n'est pas vide
    if (($handle = fopen(getcwd() . "\..\src\data\items.csv", "r")) !== FALSE) {
        // Boucler jusqu'à ce que tous les produits soient parcourus
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            // Extraire chaque information du produit dans sa case du tableau $item
            $item = array(
                "code" => $data[0],
                "marque" => $data[1],
                "modele" => $data[2],
                "poid" => $data[3],
                "disponible" => $data[4],
                "prix" => $data[5],
                "type" => $data[6],
                "active" => $data[7],
                "description" => $data[8],
                "image" => $data[9]
            );
            // Enregistrer toutes les données des produits
            array_push($items, $item);
        }
        // Fermer le fichier
        fclose($handle);
    }
    return $items;
}
function getMouse()
{
    $productQuery = 'SELECT code, brand, model, weight_grams, number_available, price_francs, active, description, image_path, type FROM mth.products';
    return executeQuerySelect($productQuery);
}