<?php
/**
 * @file navigation.php
 * @brief this file contain all main connection
 * @author Created by Loe.LAVAUD
 * @version 08.03.2023
 */
function getHome(){
    require 'view/home.php';
}

function lost(){
    require 'view/lost.php';
}

function getAboutUs() {
    require 'view/AboutUs.php';
}

function getContact() {
    require 'view/Contact.php';
}