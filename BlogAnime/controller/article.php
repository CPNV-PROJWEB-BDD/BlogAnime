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