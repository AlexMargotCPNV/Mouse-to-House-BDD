<?php

$bag['view'] = 'views/site/helpPage';

require_once 'dbConnector.php';

function sendHelp($message)
{
    $messageToInsert = $message;
    $userRequesting = $_SESSION['current_user'];

    $helpQuery = "INSERT INTO mth.requests (message, username) VALUES ('$messageToInsert', '$userRequesting')";

    return executeQuerySelect($helpQuery);
}