<?php

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
            getBlog();
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
        case "article":
            displayArticle($_GET['name']);
            break;
        default :
            lost();
    }
} else {
    home();
}


