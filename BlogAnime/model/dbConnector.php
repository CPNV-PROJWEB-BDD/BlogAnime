<?php

/**
 * @file dbConnector.php
 * @brief file desciption
 * @author Created by Loe.Lavaud
 * @version 08.02.2023
 */

function openDBConnection()
{
    $sqlDriver = 'mysql';
    $hostname = 'localhost';
    $port = 3306;
    $charset = 'utf8';
    $dbName = 'BlogAnime';
    $userName = 'dos';
    $userPwd = '#Black-Rose2021';
    $dsn = $sqlDriver . ':host=' . $hostname . ';dbname=' . $dbName . ';port=' . $port . ';charset=' . $charset;
    try {
        $tempDBConnexion = new PDO($dsn, $userName, $userPwd);
    } catch (PDOException $exception) {
        echo 'Connection failed' . $exception->getMessage();
    }

    return $tempDBConnexion;
}

function executeQuerySelect($query)
{
    $queryResult = null;

    $dbConnection = openDBConnection();
    if ($dbConnection != null) {
        $statement = $dbConnection->prepare($query);
        $statement->execute();
        $queryResult = $statement->fetchAll();
    }
    $dbConnection = null;
    return $queryResult;
}

function executeQueryInsertUpdate($query)
{
    $queryResult = null;

    $dbConnection = openDBConnection();
    if ($dbConnection != null) {
        $statement = $dbConnection->prepare($query);
        $queryResult = $statement->execute();
    }
    $dbConnection = null;
    return $queryResult;
}