<?php
/**
 * @file articlesManager.php
 * @brief file desciption
 * @author Created by Loe.LAVAUD
 * @version 24.02.2023
 */




$fileFullPath = "";//le chemin complet jusqu'au fichier
$TextToWrite = "";
$fileName = "";


function setFullPath($fName)
{
    /* Help
        get current directory -> http://php.net/manual/en/function.getcwd.php
    */
    $currentPath = getcwd();

    $fullPathToFileTemp = $currentPath . "\\" . $fName;

    return $fullPathToFileTemp;
}

function writeMsgInFile($fileFullPath, $lineToWrite)
{
    /* Help
    //http://php.net/manual/en/function.fopen.php
    */

    $strWriter = null;

    $strWriter = fopen($fileFullPath, "a");

    fwrite($strWriter, $lineToWrite . "\r\n");
    fclose($strWriter);
}

function PrepareMsgToWrite($name, $firstname, $mail, $pwd)
{

    $name = '"Nom":"' . $name . '",';
    $firstname = '"Prénom":"' . $firstname . '",';
    $mail = '"Adresse mail":"' . $mail . '",';
    $pwd = '"Mot de Passe":"' . $pwd . '"';

    $msg = '{ ' . $name . $firstname . $mail . $pwd . ' }';

    return $msg;
}

function getRegister($name, $firstname, $mail, $pwd){
    $data = array(
        "nom"=>"",
        "Prénom"=>"",
        "Adresse mail"=>"",
        "Mot de passe"=>""
    );

    $data["nom"] = $name;
    $data["Prénom"] = $firstname;
    $data["Adresse mail"] = $mail;
    $data["Mot de passe"] = $pwd;


}
