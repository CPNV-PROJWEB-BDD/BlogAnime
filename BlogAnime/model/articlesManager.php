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
        $dataEncode = json_encode($data, true);
        file_put_contents($filename, $dataEncode);
    }else{
        $temparray = file_get_contents($filename);
        $temparray = json_decode($temparray, true);
        array_push($temparray, $data);
        $dataEncode = json_encode($temparray, true);
        file_put_contents($filename, $dataEncode);
    }
    return $firstname;
}


function getLogin($name, $firstname)
{
    $data = ([
        "nom" => $name,
        "Prenom" => $firstname
    ]);

    $filename = "model/LoginName.json";

    if (file_get_contents($filename) ==""){
        $dataEncode = json_encode($data, true);
        file_put_contents($filename, $dataEncode);
    }else{
        $temparray = file_get_contents($filename);
        $temparray = json_decode($temparray, true);
        array_push($temparray, $data);
        $dataEncode = json_encode($temparray, true);
        file_put_contents($filename, $dataEncode);
    }
    return $firstname;
}
