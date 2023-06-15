<?php
require "dbConnector.php";
function getArticleBlog()
{
    $BlogAnimequery = "SELECT bannersPath,name,codename,age,anime,imagePath,firstappear,gender,species,locationLive,origin,afiliate,occupation,fightstyle,power,articles FROM bloganime.articles";
    $Persos = executeQuerySelect($BlogAnimequery);
    return $Persos;
}


function getArticle($name)
{
    $strgSeparator = '\'';
    $queryGetArticle = 'SELECT bannersPath,name,codename,age,anime,imagePath,firstappear,gender,species,locationLive,origin,afiliate,occupation,fightstyle,power,articles FROM bloganime.articles WHERE name='.$strgSeparator.$name.$strgSeparator;
    $detailPerso = executeQuerySelect($queryGetArticle);
    return $detailPerso;
}

function getArticlesNoDB(){
    $queryGetArticleNoDB = 'SELECT bannersPath,name,codename,age,anime,imagePath,firstappear,gender,species,locationLive,origin,afiliate,occupation,fightstyle,power,articles FROM bloganime.articles WHERE name='.$strgSeparator.$name.$strgSeparator;
    $result = executeQuerySelect($queryGetArticleNoDB);
    return $result;
}

function getAddArticle($name, $alias, $age, $anime, $firstAppears, $sexe, $speces, $Residence, $Origine, $affiliation, $occupation, $fightingStyle, $power, $Description)
{
    $strgSeparator = '\'';
    $queryCheck = 'SELECT name FROM bloganime.articles WHERE name="'.$name.'"';
    $check = executeQuerySelect($queryCheck);
    if(isset($check[0])){
        $errorDouble = false;
    }else{
        $BlogAnimequery = 'INSERT INTO bloganime.articles (name,codename,age,anime,firstappear,gender,species,locationLive,origin,afiliate,occupation,fightstyle,power,articles,users_idusers) ';
        $BlogAnimequery = $BlogAnimequery.'VALUES ("'.$name.'", "'.$alias.'", "'.$age.'", "'.$anime.'", "'.$firstAppears.'", "'.$sexe.'", "'.$speces.'", "'.$Residence.'", "'.$Origine.'", "'.$affiliation.'", "'.$occupation.'", "'.$fightingStyle.'", "'.$power.'", "'.$Description.'",1);';
        $errorDouble = executeQueryInsertUpdate($BlogAnimequery);
    }

    return $errorDouble;
}

function getArchiveArticleOn($name){
    $strgSeparator = '\'';
    require "model/dbConnector.php";
    $updatequery = 'UPDATE bloganime SET active = 1 WHERE name ="'.$name.'"';
    $updatequery = executeQuerySelect($updatequery);

    return $updatequery;
}

function getArchiveArticleOff($name){
    $strgSeparator = '\'';
    require "model/dbConnector.php";
    $updatequery = 'UPDATE bloganime SET active = 0 WHERE name ="'.$name.'"';
    $updatequery = executeQuerySelect($updatequery);

    return $updatequery;
}

function getmodifyArticle($name, $alias, $age, $anime, $firstAppears, $sexe, $speces, $Residence, $Origine, $affiliation, $occupation, $fightingStyle, $power, $Description)
{
    $strgSeparator = '\'';
    $queryCheck = 'SELECT bloganime.articles  FROM bloganime.articles WHERE name="'.$name.'"';
    $check = executeQuerySelect($queryCheck);
    if(isset($check[0])){
        $errorDouble = false;
    }else{
        $BlogAnimequery = 'UPDATE bloganime.articles SET WHERE idarticles=".$idarticles."';
        $errorDouble = executeQueryInsertUpdate($BlogAnimequery);
    }

    return $errorDouble;
}