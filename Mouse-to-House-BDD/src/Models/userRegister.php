<?php
function register()
{
    $username = $_POST['username'];
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['Email'];
    $phoneNumber = $_POST['telNumber'];
    $mdp = $_POST['password'];
    $hashedMdp = password_hash($mdp, PASSWORD_DEFAULT);


    $registerQuery = "INSERT INTO mth.users (username, surname, firstname, email, phone_number, hashed_password) VALUES ('$username','$surname','$firstname','$email','$phoneNumber','$hashedMdp')";

    return executeQuerySelect($registerQuery);
}
