<?php
/**
 * @file User.php
 * @brief file desciption
 * @author Created by Loe.LAVAUD
 * @version 08.03.2023
 */

function displayregister($Register)
{
    try {
        if (isset($Register['LogSurname'], $Register['LogFirstname'], $Register['LogMail'], $Register['LogPassword'])) {
            $Surname = $Register['LogSurname'];
            $firstname = $Register['LogFirstname'];
            $mail = $Register['LogMail'];
            $Password = $Register['LogPassword'];

            require_once "model/articlesManager.php";
            $articles = getRegister($Surname, $firstname, $mail, $Password);
            require "view/home.php";
        } else {
            require "view/register.php";
        }
    }
    finally {
            require "view/register.php";
        }
    }