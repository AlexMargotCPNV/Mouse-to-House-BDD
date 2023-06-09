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
    $productsQuery = 'SELECT code, brand, model, number_available, price_francs, image_path, type FROM mth.products WHERE active = 1';
    return executeQuerySelect($productsQuery);
}

function getMouse($code)
{
    $separator = '\'';
    $productQuery = 'SELECT code, brand, model, weight_grams, number_available, price_francs, active, description, image_path, type FROM mth.products WHERE code='.$separator.$code.$separator.' AND active = 1';
    return executeQuerySelect($productQuery);
}

function getRandomMouseCode(){
    $randomProductQuery = 'SELECT code FROM mth.products WHERE active = 1 ORDER BY RAND() LIMIT 1';
    return executeQuerySelect($randomProductQuery);
}
