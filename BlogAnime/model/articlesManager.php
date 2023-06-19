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
    $queryGetArticle = 'SELECT idarticles,bannersPath,name,codename,age,anime,imagePath,firstappear,gender,species,locationLive,origin,afiliate,occupation,fightstyle,power,articles FROM bloganime.articles WHERE name='.$strgSeparator.$name.$strgSeparator;
    $detailPerso = executeQuerySelect($queryGetArticle);
    return $detailPerso;
}
function getArticleToModify($id)
{
    $strgSeparator = '\'';
    $queryGetArticle = 'SELECT idarticles,bannersPath,name,codename,age,anime,imagePath,firstappear,gender,species,locationLive,origin,afiliate,occupation,fightstyle,power,articles FROM bloganime.articles WHERE idarticles='.$id;
    $detailPerso = executeQuerySelect($queryGetArticle);
    return $detailPerso;
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


function getArticleModify($idarticles,$name, $alias, $age, $anime, $firstAppears, $sexe, $speces, $Residence, $Origine, $affiliation, $occupation, $fightingStyle, $power, $Description)
{
    $strgSeparator = '\'';
    if(isset($check[0])){
        $errorDouble = false;
    }else{
        $BlogAnimequery = 'UPDATE bloganime.articles SET name="'.$name.'", codename="'.$alias.'", age="'.$age.'",anime="'.$anime.'", 
        firstappear="'.$firstAppears.'",gender= "'.$sexe.'", species="'.$speces.'", locationLive="'.$Residence.'", origin="'.$Origine.'", afiliate="'.$affiliation.'", 
        occupation="'.$occupation.'",fightstyle= "'.$fightingStyle.'",power= "'.$power.'", articles="'.$Description.'",users_idusers= 1 WHERE idarticles='.$idarticles.'';
        $errorDouble = executeQueryInsertUpdate($BlogAnimequery);
    }

    return $errorDouble;
}