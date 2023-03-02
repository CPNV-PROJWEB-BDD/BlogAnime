<?php

require 'controller/navigation.php';

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
        case "Login":
            getLogin();
            break;
        default :
            lost();
    }
} else {
    home();
}


