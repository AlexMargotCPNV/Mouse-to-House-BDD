<?php


function register(){

    $username;
    $surname;
    $firstname;
    $email;
    $phoneNumber;
    $mdp;


    $registerQuery = "INSERT INTO mth.users (*) VALUES ('$username','$surname','$firstname','$email','$phoneNumber','$mdp')";

    return executeQuerySelect($registerQuery);
}