<?php

function register($Register)
{
    try {
        $result = 0;

        if (isset($Register['LogSurname'], $Register['LogFirstname'], $Register['LogMail'], $Register['LogPassword'])) {
            $Surname = $Register['LogSurname'];
            $firstname = $Register['LogFirstname'];
            $mail = $Register['LogMail'];
            $Password = $Register['LogPassword'];

            require_once "model/userManager.php";
            $result = getRegister($Surname, $firstname, $mail, $Password);
        }
    } catch (ModelDataBaseException $ex) {
        $articleErrorMessages = "Nous rencontrons des problèmes de connexions à la base de données";
    } finally {
        if ($result == false) {
            require_once "view/register.php";
        } else {
            require_once "view/home.php";
        }
    }
}

function login($login)
{
    try {
        $result = 0;

        if (isset($login['LogMail'], $login['LogPassword'])) {
            $mail = $login['LogMail'];
            $Password = $login['LogPassword'];

            require_once "model/userManager.php";
            $result = getLogin($mail, $Password);
        }
    } catch (ModelDataBaseException $ex) {
        $articleErrorMessages = "Nous rencontrons des problèmes de connexions à la base de données";
    } finally {
        if ($result == true) {
            require "view/home.php";
        } else {
            require "view/login.php";
        }
    }
}

function logout()
{
    require "model/userManager.php";
    getLogout();
    require "view/home.php";
}