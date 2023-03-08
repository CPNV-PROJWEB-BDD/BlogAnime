<?php

require 'controller/navigation.php';
require 'controller/User.php';

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
        default :
            lost();
    }
} else {
    home();
}


