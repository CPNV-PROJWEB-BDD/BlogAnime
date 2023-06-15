<?php
session_start();
require 'controller/navigation.php';
require 'controller/user.php';
require 'controller/article.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case "home" :
            getHome();
            break;
        case "blog":
            getBlog();
            break;
        case "aboutUs":
            getAboutUs();
            break;
        case "contact":
            getContact();
            break;
        case "register":
            register($_POST);
            break;
        case "login":
            login($_POST);
            break;
        case "logout":
            logout();
            break;
        case "article":
            showArticle($_GET);
            break;
        case "addArticle":
            addArticle($_POST);
            break;
        case "archiveArticleOn":
            archiveArticleOn($_GET);
            break;
        case "archiveArticleOff":
            archiveArticleOff($_GET);
            break;
        case "modifyArticle":
            modifyArticle($_POST);
            break;
        default :
            getLost();
    }
} else {
    getHome();
}


