<?php

$bag['view'] = 'views/site/helppage';


require_once 'dbConnector.php';

function sendHelp()
{
    $message = $_POST['message'];

    $helpQuery = 'INSERT INTO message (message) VALUES (:message)';
    $stmt = openDBConnexion()->prepare($helpQuery);
    $stmt->bindParam(':message', $message);
    $stmt->execute();

    return executeQuerySelect($helpQuery);
}