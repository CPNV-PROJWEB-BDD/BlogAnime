<?php
/**
 * @file article.php
 * @brief file desciption
 * @author Created by Loe.LAVAUD
 * @version 29.03.2023
 */

function displayArticle($name)
{
    require_once "model/articlesManager.php";
    $articles = getArticle($name);
    require "view/articles.php";
}

function displayAddArticle($Perso)
{
    if (isset($Perso['NomPerso'], $Perso['AliasPerso'], $Perso['AgePerso'], $Perso['AnimePerso'], $Perso['FirstSeenPerso'],
        $Perso['SexePerso'], $Perso['SpecesPerso'], $Perso['ResidencePerso'], $Perso['OriginePerso'], $Perso['AffiliationPerso'],
        $Perso['OccupationPerso'], $Perso['FightingStylePerso'], $Perso['PowerPerso'], $Perso['DescriptionPerso'])) {

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
        getAddArticle($Name, $Alias, $Age, $Anime, $FirstAppears, $Sexe, $Speces, $Residence, $Origine, $Affiliation, $Occupation, $FightingStyle, $Power, $Description);
        require "view/blog.php";
    } else {
        require "view/addArticle.php";
    }
}