<?php

require_once 'dbConnector.php';


function userInformation(){

    $userRequesting = $_SESSION['current_user'];
    $separator = "\"";

    $profilQuery = "SELECT username, surname, firstname, email FROM mth.users WHERE username = $separator.$userRequesting.$separator";

    return executeQuerySelect($profilQuery);

}