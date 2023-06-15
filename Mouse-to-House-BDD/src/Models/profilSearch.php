<?php

require_once 'dbConnector.php';


function userInformation(){

    $userRequesting = $_SESSION['current_user'];
    $profilQuery = "SELECT username, surname, firstname, email FROM mth.users WHERE username = ('$userRequesting')";

    return executeQuerySelect($profilQuery);

}