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

    if (file_get_contents($filename) ==""){
        $temparray[] = $data;
        $dataEncode = json_encode($temparray, true);
        file_put_contents($filename, $dataEncode);
    }else{
        $temparray = file_get_contents($filename);
        $temparray = json_decode($temparray, true);
        array_push($temparray, $data);
        $dataEncode = json_encode($temparray, true);
        file_put_contents($filename, $dataEncode);
    }
}


function getLogin($mail, $pwd)
{
    $valeur = 'faux';
    $filename = "model/LoginName.json";
    $temparray = file_get_contents($filename);

    $users = json_decode($temparray, true);

    foreach ($users as $user){
        if ($user['Adresse mail'] == $mail && $user['Mot de passe'] == $pwd){
            $valeur = 'vrai';
            session_start();
            $_SESSION['user_id'] = $user['Adresse mail'];
        }
    }
    return $valeur;
}


function getArticle($name)
{
    $filename = "model/Perso.json";
    $temparray = file_get_contents($filename);

    $Persos = json_decode($temparray, true);

    foreach ($Persos as $Perso){
        if ($Perso['Nom'] == $name){
            $NomPerso[] = $Perso;
        }
    }
    return $NomPerso;
}
