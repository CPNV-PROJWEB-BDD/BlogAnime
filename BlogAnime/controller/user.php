<?php

function register($Register)
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

function login($login){

    if (isset($login['LogMail'], $login['LogPassword'])) {
        $mail = $login['LogMail'];
        $Password = $login['LogPassword'];

        require_once "model/articlesManager.php";
        $valeur = getLogin($mail, $Password);
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

function logout(){
        require "model/articlesManager.php";
        getLogout();
        require "view/home.php";
}