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
    } else {
        require "view/register.php";
    }

}

function displayLogin($login)
{
    if (isset($login['LogSurname'], $login['LogFirstname'])) {
        $Surname = $login['LogSurname'];
        $firstname = $login['LogFirstname'];

        require_once "model/articlesManager.php";
        getLogin($Surname, $firstname);
    } else {
        require "view/Login.php";
    }

}
