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

require_once 'model/dbConnector.php';

/**
 * This function is designed to get all active mice
 * @return array : containing all information about mice. Array can be empty.
 */
function getMouse(){
    $productQuery = 'SELECT code, brand, model, weight_grams, number_available, price_francs, active, description, image_path, type FROM mth.products';
    return executeQuerySelect($productQuery);
}

function getMice($code)
{
    $separator = '\'';
    $productsQuery = 'SELECT code, brand,model, snowLength, dailyPrice, qtyAvailable, description, photo FROM snows WHERE code='.$separator.$code.$separator.'AND active=1';
    return executeQuerySelect($productsQuery);
}