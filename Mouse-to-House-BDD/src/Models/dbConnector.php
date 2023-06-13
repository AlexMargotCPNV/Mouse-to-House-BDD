<?php
function executeQuerySelect($query):array{
    $queryResult = null;

    $dbConnexion = openDBConnexion();
    if ($dbConnexion != null)
    {
        $statement = $dbConnexion->prepare($query);
        $statement->execute();
        $queryResult = $statement->fetchAll();
    }
    $dbConnexion = null;
    return $queryResult;
}
function executeQuerySelectSingle($query):string{
    $queryResult = null;

    $dbConnexion = openDBConnexion();
    if ($dbConnexion != null)
    {
        $statement = $dbConnexion->prepare($query);
        $statement->execute();
        $queryResult = $statement->fetchAll();
    }
    $dbConnexion = null;
    $queryResultSingle = $queryResult[0]['code'];
    return $queryResultSingle;
}

function executeQueryInsert($query){
    $queryResult = null;

    $dbConnexion = openDBConnexion();
    if ($dbConnexion != null)
    {
        try{
            $statement = $dbConnexion->prepare($query);
            $queryResult = $statement->execute();
        }
        catch (PDOException $exception){
            error_log('Duplicate Entry: ' . $exception->getMessage() . "\r\n", 3, ERROR_LOG);
        }
    }
    $dbConnexion = null;
    return $queryResult;
}

function openDBConnexion (){
    $tempDbConnexion = null;

    $sqlDriver = 'mysql';
    $hostname = 'localhost';
    $port = 3306;
    $charset = 'utf8';
    $dbName = 'mth';
    $userName = 'mth';
    $userPwd = 'mth123';
    $dsn = $sqlDriver . ':host=' . $hostname . ';dbname=' . $dbName . ';port=' . $port . ';charset=' . $charset;

    try{
        $tempDbConnexion = new PDO($dsn, $userName, $userPwd);
    }
    catch (PDOException $exception) {
        error_log('Connection failed: ' . $exception->getMessage()  . "\r\n", 3, ERROR_LOG);
    }
    return $tempDbConnexion;
}