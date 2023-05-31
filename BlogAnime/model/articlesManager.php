<?php
require "dbConnector.php";
function getArticleBlog()
{
    $BlogAnimequery = "SELECT bannersPath,name,codename,age,anime,imagePath,firstappear,gender,species,locationLive,origin,afiliate,occupation,fightstyle,power,articles FROM BlogAnime.articles";
    $Persos = executeQuerySelect($BlogAnimequery);
    return $Persos;
}


function getArticle($name)
{
    $strgSeparator = '\'';
    $queryGetArticle = 'SELECT bannersPath,name,codename,age,anime,imagePath,firstappear,gender,species,locationLive,origin,afiliate,occupation,fightstyle,power,articles FROM BlogAnime.articles WHERE name='.$strgSeparator.$name.$strgSeparator;
    $detailPerso = executeQuerySelect($queryGetArticle);
    return $detailPerso;
}

function getAddArticle($name, $alias, $age, $anime, $firstAppears, $sexe, $speces, $Residence, $Origine, $affiliation, $occupation, $fightingStyle, $power, $Description)
{
    $strgSeparator = '\'';
    $queryCheck = 'SELECT name FROM BlogAnime.articles WHERE name="'.$name.'"';
    $check = executeQuerySelect($queryCheck);
    if(isset($check[0])){
        $errorDouble = false;
    }else{
        $BlogAnimequery = 'INSERT INTO BlogAnime.articles (name,codename,age,anime,firstappear,gender,species,locationLive,origin,afiliate,occupation,fightstyle,power,articles,users_idusers) ';
        $BlogAnimequery = $BlogAnimequery.'VALUES ("'.$name.'", "'.$alias.'", "'.$age.'", "'.$anime.'", "'.$firstAppears.'", "'.$sexe.'", "'.$speces.'", "'.$Residence.'", "'.$Origine.'", "'.$affiliation.'", "'.$occupation.'", "'.$fightingStyle.'", "'.$power.'", "'.$Description.'",1);';
        $errorDouble = executeQueryInsertUpdate($BlogAnimequery);
    }

    return $errorDouble;
}