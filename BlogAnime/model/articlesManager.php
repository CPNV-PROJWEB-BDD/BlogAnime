<?php
/**
 * @file articlesManager.php
 * @brief file desciption
 * @author Created by Loe.LAVAUD
 * @version 24.02.2023
 */

function getRegister($name, $firstname, $mail, $pwd)
{
    $data = ([
        "nom" => $name,
        "Prenom" => $firstname,
        "Adresse mail" => $mail,
        "Mot de passe" => $pwd
    ]);

    $filename = "model/LoginName.json";

    if (file_get_contents($filename) == "") {
        $temparray[] = $data;
        $dataEncode = json_encode($temparray, true);
        file_put_contents($filename, $dataEncode);
        session_start();
        $_SESSION['user_id'] = $mail;
    } else {
        $temparray = file_get_contents($filename);
        $temparray = json_decode($temparray, true);
        array_push($temparray, $data);
        $dataEncode = json_encode($temparray, true);
        file_put_contents($filename, $dataEncode);
        session_start();
        $_SESSION['user_id'] = $mail;
    }
}


function getLogin($mail, $pwd)
{
    $valeur = 'faux';
    $filename = "model/LoginName.json";
    $temparray = file_get_contents($filename);

    $users = json_decode($temparray, true);

    foreach ($users as $user) {
        if ($user['Adresse mail'] == $mail && $user['Mot de passe'] == $pwd) {
            $valeur = 'vrai';
            $_SESSION['user_id'] = $user['Adresse mail'];
        }
    }
    return $valeur;
}

function getLogout()
{
    unset($_SESSION["user_id"]);
}

function getBlog()
{
    $filename = "model/Perso.json";
    $temparray = file_get_contents($filename);

    $Persos = json_decode($temparray, true);

    return $Persos;
}


function getArticle($name)
{
    $filename = "model/Perso.json";
    $temparray = file_get_contents($filename);

    $Persos = json_decode($temparray, true);

    foreach ($Persos as $Perso) {
        if ($Perso['Nom'] == $name) {
            $NomPerso[] = $Perso;
        }
    }
    return $NomPerso;
}

function getAddArticle($name, $alias, $age, $anime, $firstAppears, $sexe, $speces, $Residence, $Origine, $affiliation, $occupation, $fightingStyle, $power, $Description)
{
    $data = ([
        "Nom" => $name,
        "Nom de code" => $alias,
        "Age" => $age,
        "Anime" => $anime,
        "Images" => "",
        "Banner" => "",
        "Premiere apparition" => $firstAppears,
        "Sexe" => $sexe,
        "Especes" => $speces,
        "Residence" => $Residence,
        "Origine" => $Origine,
        "Affiliation" => $affiliation,
        "Occupation" => $occupation,
        "Style de combat" => $fightingStyle,
        "Pouvoir" => $power,
        "Description" => $Description
    ]);

    $filename = "model/Perso.json";

    $persos = file_get_contents($filename);
    $persos = json_decode($persos, true);
    foreach ($persos as $perso) {
        if ($perso['Nom'] !== $name) {
            $errorDouble = true;
        }
        else{
            $errorDouble = false;
        }
    }
    if ($errorDouble == true){
        array_push($persos, $data);
        $dataEncode = json_encode($persos, true);
        file_put_contents($filename, $dataEncode);
    }

    return $errorDouble;
}