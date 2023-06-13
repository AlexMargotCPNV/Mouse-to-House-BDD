<?php

$bag['data'] = [];

$userEmail = $_POST['email'];
$password = $_POST['password'];
/**
    print_r($_POST['email']);
    echo "<br>";
    print_r($_POST['password']);
 **/
// Validate fields
if (empty($userEmail)) {
    $bag['data']['username_error'] = "Votre identifiant ne doit pas être vide";
}
if (empty($password)) {
    $bag['data']['password_error'] = "Votre mot de passe ne doit pas être vide";
}

// Valid?
if (empty($bag['data'])) {
    // Yep, login the user
    if (loginUser($userEmail, $password)) {
        $bag['response_headers'] = ['Location' => '/'];
        return $bag;
    }
    $bag['data']['login_error'] = "Votre identifiant et/ou mot de passe sont erronés";
}

// Invalid, render the view
$bag['view'] = 'views/site/profilePage';
return $bag;
