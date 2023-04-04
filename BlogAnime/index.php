<?php
/**
 * @file index.php
 * @brief  index.php
 * @author created by Loe.LAVAUD
 * @version 01.02.2023
 */
session_start();
require 'controller/navigation.php';
require 'controller/User.php';
require 'controller/article.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case "home" :
            getHome();
            break;
        case "Blog":
            displayBlog();
            break;
        case "AboutUs":
            getAboutUs();
            break;
        case "register":
            displayregister($_POST);
            break;
        case "login":
            displayLogin($_POST);
            break;
        case "Logout":
            displayLogout($_POST);
            break;
        case "article":
            displayArticle($_GET['name']);
            break;
        case "addArticle":
            displayAddArticle($_POST);
            break;
        case "Contact":
            getContact();
            break;
        default :
            lost();
    }
} else {
    getHome();
}


