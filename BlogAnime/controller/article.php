<?php

function getBlog()
{
    try {
        require_once "model/articlesManager.php";
        $articles = getArticleBlog();
    } catch (ModelDataBaseException $ex){
        $articleErrorMessages = "Nous rencontrons des problèmes de connexions à la base de données";
    } finally {
        require "view/blog.php";
    }
}

function showArticle($name)
{
    try {
        require_once "model/articlesManager.php";
        $articles = getArticle($name['name']);
    } catch (ModelDataBaseException $ex){
        $articleErrorMessages = "Nous rencontrons des problèmes de connexions à la base de données";
    } finally {
        require "view/articles.php";
    }
}

function addArticle($Perso)
{
    try {
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
        } else {
            require_once "view/addArticle.php";
        }
    }catch (ModelDataBaseException $ex){
        $articleErrorMessages = "Nous rencontrons des problèmes de connexions à la base de données";
    } finally {
        if ($result == false) {
            require_once "view/addArticle.php";
        } else {
            require_once "model/articlesManager.php";
            $articles = getArticleBlog();
            require_once "view/blog.php";
        }
    }
}
