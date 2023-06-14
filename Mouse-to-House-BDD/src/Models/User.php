<?php

define('USERS_DATA_PATHNAME', BASE_DIR.'/users.json');
require_once 'dbConnector.php';
/**
 ** User:
 **   username:     string  User identifier
 **   lastname:     string  lastname
 **   firstname:    string  firstname
 **   email:        string  email Adress
 **   phoneNumber:  string  phone number
 **   password:     string  hashed password
 **
 **/

function findUser($username)
{
    // Read the user.dat file for the passed $username
    try {
        //return json_decode(file_get_contents(USERS_DATA_PATHNAME), true)[$username] ?? null;
        $separator = '\'';
        $userQuery = 'SELECT username, surname, firstname, email, phone_number, hashed_password, admin FROM mth.users WHERE username ='.$separator.$username.$separator.'';
        return executeQuerySelect($userQuery)[0];
    }
    catch (Exception $e) {
        // Any error will return a null object, so asking for a non existant user throws a PATH_NOT_FOUND error thus returns null.
        return null;
    }
}
function getUserPwd($userEmailAddress){
    $separator = '\'';
    $userPwdQuerry = 'SELECT hashed_password FROM mth.users WHERE email ='.$separator.$userEmailAddress.$separator.'';
    return executeQuerySelect($userPwdQuerry);
}

function isLoginCorrect($userEmailAddress, $userPwd):bool{
    $userPwdDb = getUserPwd($userEmailAddress);

    if(password_verify($userPwd,$userPwdDb)){
        return true;
    }
    return false;
}

function saveUser($user)
{
    $username = $user['username'];

    $allUsers = getAllUsers();
    $allUsers[$username] = array_merge($allUsers[$username] ?? [], $user);

    file_put_contents(USERS_DATA_PATHNAME, json_encode($allUsers));
}

function registerUser($user)
{
    $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
    saveUser($user);
}

function getAllUsers()
{
    try {
        return json_decode(file_get_contents(USERS_DATA_PATHNAME), true);
    }
    catch (Exception $e) {
        // The file does not yet exist, so there's no users
        return [];
    }
}

function isRegistrationCorrect($userEmailAddress, $userPwd):bool
{
    $strSeparator = '\'';

    $userHashPsw = hashPassword($userPwd);

    $registerQuery = 'INSERT INTO users (`userEmailAddress`, `userHashPsw`) VALUES (' . $strSeparator . $userEmailAddress . $strSeparator . ',' . $strSeparator . $userHashPsw . $strSeparator . ')';

    $queryResult = executeQueryInsert($registerQuery);
    if ($queryResult) {
        return true;
    }
    return false;
}

function hashPassword(string $pwd){
    return password_hash($pwd, PASSWORD_DEFAULT);
}