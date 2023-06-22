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

function addArticle($character)
{
    try {
        if (isset($character['Name'], $character['CodeName'], $character['Age'], $character['Anime'],
            $character['FirstAppear'], $character['Gender'], $character['Species'], $character['LocationLive'],
            $character['Origin'], $character['Afiliate'], $character['Occupation'], $character['Description'])){

            if ($character['FightStyle'] == "") {
                $character['FightStyle'] = "Aucun";
            }
            if ($character['Power'] == "") {
                $character['Power'] = "Aucun";
            }

            $Name = $character['Name'];
            $Alias = $character['CodeName'];
            $Age = $character['Age'];
            $Anime = $character['Anime'];
            $FirstAppears = $character['FirstAppear'];
            $Sexe = $character['Gender'];
            $Speces = $character['Species'];
            $Residence = $character['LocationLive'];
            $Origine = $character['Origin'];
            $Affiliation = $character['Afiliate'];
            $Occupation = $character['Occupation'];
            $FightingStyle = $character['FightStyle'];
            $Power = $character['Power'];
            $Description = $character['Description'];

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

function ShowModifyArticle($character)
{
    try {
        require_once "model/articlesManager.php";
        $articles = getArticleToModify($character['id']);
    } catch (ModelDataBaseException $ex){
        $articleErrorMessages = "Nous rencontrons des problèmes de connexions à la base de données";
    } finally {
        require "view/modifyArticle.php";
    }
}
function modifyArticle($character){
    try {
        require_once "model/articlesManager.php";
        $idarticles= $character['idarticles'];
        $Name = $character['Name'];
        $Alias = $character['CodeName'];
        $Age = $character['Age'];
        $Anime = $character['Anime'];
        $FirstAppears = $character['FirstAppear'];
        $Sexe = $character['Gender'];
        $Speces = $character['Species'];
        $Residence = $character['LocationLive'];
        $Origine = $character['Origin'];
        $Affiliation = $character['Afiliate'];
        $Occupation = $character['Occupation'];
        $FightingStyle = $character['FightStyle'];
        $Power = $character['Power'];
        $Description = $character['Description'];

        $articles = getArticleModify($idarticles,$Name, $Alias, $Age, $Anime, $FirstAppears, $Sexe, $Speces,
            $Residence, $Origine, $Affiliation, $Occupation, $FightingStyle, $Power, $Description);
    } catch (ModelDataBaseException $ex){
        $articleErrorMessages = "Nous rencontrons des problèmes de connexions à la base de données";
    } finally {
        $articles = getArticlesNoDB();
        require "view/blog.php";
    }
}