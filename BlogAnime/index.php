<?php
session_start();
require 'controller/navigation.php';
require 'controller/User.php';
require 'controller/article.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case "home" :
            home();
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
        default :
            lost();
    }
} else {
    home();
}


