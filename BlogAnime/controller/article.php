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
        if (isset($Perso['Name'], $Perso['CodeName'], $Perso['Age'], $Perso['Anime'],
            $Perso['FirstAppear'], $Perso['Gender'], $Perso['Species'], $Perso['LocationLive'],
            $Perso['Origin'], $Perso['Afiliate'], $Perso['Occupation'], $Perso['Description'])){

            if ($Perso['FightStyle'] == "") {
                $Perso['FightStyle'] = "Aucun";
            }
            if ($Perso['Power'] == "") {
                $Perso['Power'] = "Aucun";
            }

            $Name = $Perso['Name'];
            $Alias = $Perso['CodeName'];
            $Age = $Perso['Age'];
            $Anime = $Perso['Anime'];
            $FirstAppears = $Perso['FirstAppear'];
            $Sexe = $Perso['Gender'];
            $Speces = $Perso['Species'];
            $Residence = $Perso['LocationLive'];
            $Origine = $Perso['Origin'];
            $Affiliation = $Perso['Afiliate'];
            $Occupation = $Perso['Occupation'];
            $FightingStyle = $Perso['FightStyle'];
            $Power = $Perso['Power'];
            $Description = $Perso['Description'];

            require_once "model/articlesManager.php";
            $result = getAddArticle($Name, $Alias, $Age, $Anime, $FirstAppears, $Sexe, $Speces,
                $Residence, $Origine, $Affiliation, $Occupation, $FightingStyle, $Power, $Description);
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

function archiveArticleOn($name)
{
    try {
        require_once "model/articlesManager.php";
        $articles = getArchiveArticleOn($name);
    } catch (ModelDataBaseException $ex) {
        $articleErrorMessages = "Nous rencontrons des problèmes de connexions à la base de données";
    } finally {
        $articles = getArticlesNoDB($name);
          require "view/blog.php";
    }
}

function archiveArticleOff($name)
{
    try {
        require_once "model/articlesManager.php";
        $articles = getArchiveArticleOff($name);
    } catch (ModelDataBaseException $ex) {
        $articleErrorMessages = "Nous rencontrons des problèmes de connexions à la base de données";
    } finally {
        $articles = getArticlesNoDB($name);
        require "view/blog.php";
    }
}

function ShowModifyArticle($Perso)
{
    try {
        require_once "model/articlesManager.php";
        $articles = getArticleToModify($Perso['id']);
    } catch (ModelDataBaseException $ex){
        $articleErrorMessages = "Nous rencontrons des problèmes de connexions à la base de données";
    } finally {
        require "view/modifyArticle.php";
    }
}
function modifyArticle($Perso){
    try {
        require_once "model/articlesManager.php";
        $idarticles= $Perso['idarticles'];
        $Name = $Perso['Name'];
        $Alias = $Perso['CodeName'];
        $Age = $Perso['Age'];
        $Anime = $Perso['Anime'];
        $FirstAppears = $Perso['FirstAppear'];
        $Sexe = $Perso['Gender'];
        $Speces = $Perso['Species'];
        $Residence = $Perso['LocationLive'];
        $Origine = $Perso['Origin'];
        $Affiliation = $Perso['Afiliate'];
        $Occupation = $Perso['Occupation'];
        $FightingStyle = $Perso['FightStyle'];
        $Power = $Perso['Power'];
        $Description = $Perso['Description'];

        $articles = getArticleModify($idarticles,$Name, $Alias, $Age, $Anime, $FirstAppears, $Sexe, $Speces,
            $Residence, $Origine, $Affiliation, $Occupation, $FightingStyle, $Power, $Description);
    } catch (ModelDataBaseException $ex){
        $articleErrorMessages = "Nous rencontrons des problèmes de connexions à la base de données";
    } finally {
        $articles = getArticlesNoDB();
        require "view/blog.php";
    }
}