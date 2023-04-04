<?php
/**
 * @file article.php
 * @brief This file will have all connection/action about article
 * @author Created by Loe.LAVAUD
 * @version 29.03.2023
 */

function displayBlog()
{
    require_once "model/articlesManager.php";
    $articles = getBlog();
    require_once "view/blog.php";
}

function displayArticle($name)
{
    require_once "model/articlesManager.php";
    $articles = getArticle($name);
    require_once "view/articles.php";
}

function displayAddArticle($Perso)
{

    if (isset($Perso['NomPerso'], $Perso['AliasPerso'], $Perso['AgePerso'], $Perso['AnimePerso'], $Perso['FirstSeenPerso'],
        $Perso['SexePerso'], $Perso['SpecesPerso'], $Perso['ResidencePerso'], $Perso['OriginePerso'], $Perso['AffiliationPerso'],
        $Perso['OccupationPerso'], $Perso['DescriptionPerso'])) {

        if ($Perso['FightingStylePerso'] == "") {
            $Perso['FightingStylePerso'] = "Aucun";
        }
        if ($Perso['PowerPerso'] == "") {
            $Perso['PowerPerso'] = "Aucun";
        }

        $Name = $Perso['NomPerso'];
        $Alias = $Perso['AliasPerso'];
        $Age = $Perso['AgePerso'];
        $Anime = $Perso['AnimePerso'];
        $FirstAppears = $Perso['FirstSeenPerso'];
        $Sexe = $Perso['SexePerso'];
        $Speces = $Perso['SpecesPerso'];
        $Residence = $Perso['ResidencePerso'];
        $Origine = $Perso['OriginePerso'];
        $Affiliation = $Perso['AffiliationPerso'];
        $Occupation = $Perso['OccupationPerso'];
        $FightingStyle = $Perso['FightingStylePerso'];
        $Power = $Perso['PowerPerso'];
        $Description = $Perso['DescriptionPerso'];

        require_once "model/articlesManager.php";
        $result = getAddArticle($Name, $Alias, $Age, $Anime, $FirstAppears, $Sexe, $Speces, $Residence, $Origine, $Affiliation, $Occupation, $FightingStyle, $Power, $Description);
        if ($result == false) {
            require_once "view/addArticle.php";
        } else {
            require_once "model/articlesManager.php";
            $articles = getBlog();
            require_once "view/blog.php";
        }
    } else {
        require_once "view/addArticle.php";
    }
}
