<?php
/**
 * @file Login.php
 * @brief file desciption
 * @author Created by Loe.LAVAUD
 * @version 24.02.2023
 */

ob_start();
$title = "BlogAnime";
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>


</body>


<?php

$fileFullPath = setFullPath("LoginName".".json");
$TextToWrite = '{ <br>"Pseudo":"",<br>"Password":"" }</t> ';

writeMsgInFile($fileFullPath, $TextToWrite);


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

    //on va appeler la fonction permettant de récupérer la date et l'heure à l'instant où l'on va écrire


    $strWriter = fopen($fileFullPath, "a");
    //puis on ajoute la date et le heure à la ligne que l'on désire ajouter au fichier


    fwrite($strWriter, $lineToWrite  . "\r\n");
    fclose($strWriter);
}?>

<?php
$content = ob_get_clean();
require 'gabarit.php';

