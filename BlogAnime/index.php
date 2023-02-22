<?php

require 'controller/navigation.php';

if (isset($_GET['action'])){
    $action = $_GET['action'];
    switch ($action){
        case "home" :
            home();
            break;
        case "displayArticles":
            displayArticles();
            break;
        default :
            lost();
    }
}
else{
    home();
}