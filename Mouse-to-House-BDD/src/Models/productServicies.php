<?php

function modifyProduct($newdata, $code) {
    $newBrand = $newdata[0];
    $newModel = $newdata[1];
    $newQuantity = $newdata[2];
    $newPrice = $newdata[3];
    $newType  = $newdata[4];
    $newWeight = $newdata[5];
    $newDescription = $newdata[6];


    $modifyQuery = "UPDATE mth.products SET brand = $newBrand, model = $newModel, weight_grams = $newWeight, number_available = $newQuantity, price_francs = $newPrice, description = $newDescription, type = $newType where code ='$code'";
    executeQuerySelect($modifyQuery);
    return null;
}