<?php
/**
 * @file index.php
 * @brief  index.php
 * @author created by Loe.LAVAUD
 * @version 01.02.2023
 */
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
        case "register":
            getRegister($_POST);
            break;
        case "login":
            getLogin($_POST);
            break;
        case "logout":
            getLogout();
            break;
        case "article":
            getArticle($_GET);
            break;
        case "addArticle":
            getAddArticle($_POST); /** getAddArticle **/
            break;
        case "contact":
            getContact();
            break;
        default :
            getLost();
    }
} else {
    getHome();
}


