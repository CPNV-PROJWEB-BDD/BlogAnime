<?php
/**
 * @file user.php
 * @brief this file will have connection about users
 * @author Created by Loe.LAVAUD
 * @version 08.03.2023
 */

function getRegister($Register)
{
    if (isset($Register['LogSurname'], $Register['LogFirstname'], $Register['LogMail'], $Register['LogPassword'])) {
        $Surname = $Register['LogSurname'];
        $firstname = $Register['LogFirstname'];
        $mail = $Register['LogMail'];
        $Password = $Register['LogPassword'];

        require_once "model/articlesManager.php";
        displayRegister($Surname, $firstname, $mail, $Password);
        require "view/home.php";
    } else {
        require "view/register.php";
    }
}

function getLogin($login){

    if (isset($login['LogMail'], $login['LogPassword'])) {
        $mail = $login['LogMail'];
        $Password = $login['LogPassword'];

        require_once "model/articlesManager.php";
        $valeur = displayLogin($mail, $Password);
        if ($valeur == 'vrai') {
            require "view/home.php";
        }
        if ($valeur == 'faux') {
            require "view/login.php";
        }
    }else{
        require "view/login.php";
    }
}

function getLogout(){
        require "model/articlesManager.php";
        displayLogout();
        require "view/home.php";
}