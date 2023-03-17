<?php
/**
 * @file User.php
 * @brief file desciption
 * @author Created by Loe.LAVAUD
 * @version 08.03.2023
 */

function displayregister($Register)
{
    if (isset($Register['LogSurname'], $Register['LogFirstname'], $Register['LogMail'], $Register['LogPassword'])) {
        $Surname = $Register['LogSurname'];
        $firstname = $Register['LogFirstname'];
        $mail = $Register['LogMail'];
        $Password = $Register['LogPassword'];

        require_once "model/articlesManager.php";
        getRegister($Surname, $firstname, $mail, $Password);
        require "view/home.php";
    } else {
        require "view/register.php";
    }
}

function displayLogin($login){

    if (isset($login['LogMail'], $login['LogPassword'])) {
        $mail = $login['LogMail'];
        $Password = $login['LogPassword'];

        require "model/articlesManager.php";
        $valeur = getLogin($mail, $Password);
        if ($valeur == 'vrai') {
            /*require "view/failConnection.php";*/
            require "view/home.php";
        }
        if ($valeur == 'faux') {
            /*require "view/successConnexion.php";*/
            require "view/Login.php";
        }
    }else{
        require "view/Login.php";
    }
}
