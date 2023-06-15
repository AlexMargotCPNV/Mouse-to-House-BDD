<?php

$bag['data'] = [];

$username = $_POST['username'];
$password = $_POST['password'];

// Validate fields
if (empty($username)) {
    $bag['data']['username_error'] = "Votre identifiant ne doit pas être vide";
}
if (empty($password)) {
    $bag['data']['password_error'] = "Votre mot de passe ne doit pas être vide";
}

// Valid?
if (empty($bag['data'])) {
    // Yep, login the user
    if (loginUser($username, $password)) {
        $bag['response_headers'] = ['Location' => '/'];
        return $bag;
    }
    $bag['data']['login_error'] = "Votre identifiant et/ou mot de passe sont erronés";
}

// Invalid, render the view
echo '<a class="LoginFailed" style="color: red"><strong>Identifiants de connection éronné</strong></a>';
$bag['view'] = 'views/site/loginPage';
return $bag;
