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

function getMice()
{
    $productsQuery = 'SELECT code, brand, model, number_available, price_francs, image_path, type FROM mth.products WHERE active = 1';
    return executeQuerySelect($productsQuery);
}

function getAllMice()
{
    $allProductsQuery = 'SELECT code, brand, model, number_available, price_francs, image_path, type FROM mth.products ';
    return executeQuerySelect($allProductsQuery);
}

function getMouse($code)
{
    $separator = '\'';
    $productQuery = "SELECT code, brand, model, weight_grams, number_available, price_francs, active, description, image_path, type FROM mth.products WHERE code=' . $separator . $code . $separator . ' AND active = 1";
    return executeQuerySelect($productQuery);
}

function getAdminMouse($code)
{
    $separator = '\'';
    $productQuery = "SELECT code, brand, model, weight_grams, number_available, price_francs, active, description, image_path, type FROM mth.products WHERE code='.$separator.$code.$separator.'";
    return executeQuerySelect($productQuery);
}

function getRandomMouseCode()
{
    $randomProductQuery = 'SELECT code FROM mth.products WHERE active = 1 ORDER BY RAND() LIMIT 1';
    return executeQuerySelectSingle($randomProductQuery);
}

function isUserAdmin()
{
    $separator = "\"";
    $userName = $_SESSION['current_user'];
    $username = "$userName";
    $isUserAdminQuery = "SELECT admin FROM mth.users WHERE username =$separator$username$separator ";
    return executeQuerySelect($isUserAdminQuery);
}

