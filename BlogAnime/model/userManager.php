<?php
function getRegister($name, $firstname, $mail, $pwd)
{
    $strgSeparator = '\'';
    require "model/dbConnector.php";
    $queryCheck = 'SELECT emailAddress FROM BlogAnime.users WHERE emailAddress="'.$mail.'"';
    $check = executeQuerySelect($queryCheck);
    if(isset($check[0])){
        $result = false;
    }else{
        $BlogAnimequery = 'INSERT INTO bloganime.users (emailAddress, firstname, lastname, accountLevel, password) ';
        $BlogAnimequery = $BlogAnimequery.'VALUES ("'.$mail.'", "'.$firstname.'", "'.$name.'", 1, "'.$pwd.'");';
        $result = executeQueryInsertUpdate($BlogAnimequery);
        $_SESSION['user_id'] = $mail;
    }

    return $result;
}


function getLogin($mail, $pwd)
{
    $strgSeparator = '\'';
    require "model/dbConnector.php";
    $queryCheck = 'SELECT emailAddress, password FROM bloganime.users WHERE emailAddress="'.$mail.'" AND password="'.$pwd.'";';
    $check = executeQuerySelect($queryCheck);
    if(isset($check[0])){
        $result = true;
        $_SESSION['user_id'] = $mail;
    }else{
        $result = false;
    }

    return $result;
}

function getLogout()
{
    unset($_SESSION["user_id"]);
}